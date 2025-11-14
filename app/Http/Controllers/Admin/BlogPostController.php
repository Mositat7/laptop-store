<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogPost;
use App\Models\BlogCategory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class BlogPostController extends Controller
{
    public function index(Request $request)
    {
        $editingPost = null;
        if ($request->has('edit_id')) {
            $editingPost = BlogPost::findOrFail($request->edit_id);
        }

        $posts = BlogPost::with('category')->latest()->get();
        $categories = BlogCategory::all();

        return view('admin.pages.blog-posts', compact('posts', 'categories', 'editingPost'));
    }

    public function store(Request $request)
    {
        \Log::info('🎯 STORE REQUEST:', $request->all());

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string|min:1',
            'blog_category_id' => 'required|exists:blog_categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $content = $request->content;
        \Log::info('✅ USER CONTENT:', ['content' => $content]);

        // 🔥 محاسبه short_description و meta_description با fallback
        $plainContent = strip_tags($content);
        $shortDescription = !empty(trim($plainContent))
            ? Str::limit($plainContent, 150)
            : 'خلاصه مقاله';

        $metaDescription = !empty(trim($plainContent))
            ? Str::limit($plainContent, 160)
            : 'توضیحات متا برای مقاله';

        \Log::info('📝 CALCULATED DESCRIPTIONS:', [
            'short_description' => $shortDescription,
            'meta_description' => $metaDescription
        ]);

        // آپلود تصویر
        $imagePath = null;
        if ($request->hasFile('image')) {
            $destinationPath = public_path('storage/blog');
            if (!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true, true);
            }

            $file = $request->file('image');
            $filename = time() . '_' . uniqid() . '_' . $file->getClientOriginalName();
            $file->move($destinationPath, $filename);
            $imagePath = 'storage/blog/' . $filename;
        }

        // ساخت slug یکتا
        $slug = $this->generateUniqueSlug($request->title);

        // محاسبه زمان مطالعه
        $wordCount = str_word_count($plainContent) ?: 1;
        $readingTime = max(1, ceil($wordCount / 200));

        BlogPost::create([
            'title' => $request->title,
            'slug' => $slug,
            'short_description' => $shortDescription,
            'content' => $content,
            'image' => $imagePath,
            'author' => auth()->check() ? auth()->user()->name : 'ادمین',
            'publish_date' => now(),
            'views' => 0,
            'reading_time' => $readingTime,
            'is_published' => $request->has('is_published') ? 1 : 0,
            'is_featured' => $request->has('is_featured') ? 1 : 0,
            'meta_title' => $request->title,
            'meta_description' => $metaDescription,
            'blog_category_id' => $request->blog_category_id,
        ]);

        return redirect()->route('admin.blog-posts.index')
            ->with('post_success', 'مقاله با موفقیت اضافه شد.');
    }

    public function update(Request $request, $id)
    {
        $post = BlogPost::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string|min:1',
            'blog_category_id' => 'required|exists:blog_categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $content = $request->content;

        // 🔥 محاسبه descriptions برای آپدیت
        $plainContent = strip_tags($content);
        $shortDescription = !empty(trim($plainContent))
            ? Str::limit($plainContent, 150)
            : $post->short_description;

        $metaDescription = !empty(trim($plainContent))
            ? Str::limit($plainContent, 160)
            : $post->meta_description;

        // مدیریت تصویر
        $imagePath = $post->image;
        if ($request->hasFile('image')) {
            if ($post->image && File::exists(public_path($post->image))) {
                File::delete(public_path($post->image));
            }

            $destinationPath = public_path('storage/blog');
            if (!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true, true);
            }

            $file = $request->file('image');
            $filename = time() . '_' . uniqid() . '_' . $file->getClientOriginalName();
            $file->move($destinationPath, $filename);
            $imagePath = 'storage/blog/' . $filename;
        }

        // مدیریت slug
        $slug = $post->slug;
        if ($request->title != $post->title) {
            $slug = $this->generateUniqueSlug($request->title, $id);
        }

        // محاسبه زمان مطالعه
        $wordCount = str_word_count($plainContent) ?: 1;
        $readingTime = max(1, ceil($wordCount / 200));

        $post->update([
            'title' => $request->title,
            'slug' => $slug,
            'short_description' => $shortDescription,
            'content' => $content,
            'image' => $imagePath,
            'author' => auth()->check() ? auth()->user()->name : $post->author,
            'reading_time' => $readingTime,
            'is_published' => $request->has('is_published') ? 1 : 0,
            'is_featured' => $request->has('is_featured') ? 1 : 0,
            'meta_title' => $request->title,
            'meta_description' => $metaDescription,
            'blog_category_id' => $request->blog_category_id,
        ]);

        return redirect()->route('admin.blog-posts.index')
            ->with('post_success', 'مقاله با موفقیت بروزرسانی شد.');
    }

    public function destroy($id)
    {
        $post = BlogPost::findOrFail($id);

        if ($post->image && File::exists(public_path($post->image))) {
            File::delete(public_path($post->image));
        }

        $post->delete();

        return back()->with('post_success', 'مقاله با موفقیت حذف شد.');
    }

    private function generateUniqueSlug($title, $excludeId = null)
    {
        $slug = Str::slug($title);
        $originalSlug = $slug;
        $counter = 1;

        $query = BlogPost::where('slug', $slug);
        if ($excludeId) {
            $query->where('id', '!=', $excludeId);
        }

        while ($query->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;

            $query = BlogPost::where('slug', $slug);
            if ($excludeId) {
                $query->where('id', '!=', $excludeId);
            }
        }

        return $slug;
    }
}
