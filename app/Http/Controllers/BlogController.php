<?php

namespace App\Http\Controllers;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use Illuminate\Http\Request;
class BlogController extends Controller
{

    public function index(Request $request)
    {
        // دسته‌بندی‌های مقالات
        $blogCategories = BlogCategory::active()->ordered()->get();

        // ساخت کوئری اصلی
        $blogQuery = BlogPost::published()->latest();

        // اعمال فیلتر دسته‌بندی
        if ($request->has('category') && $request->category !== 'latest') {
            $blogQuery->whereHas('category', function($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        // گرفتن نتایج
        $blogPosts = $blogQuery->paginate(3);

        // مقالات برای بخش‌های مختلف
        $blogPost = BlogPost::published()->latest()->take(4)->get();
        $recentPosts = $blogPost; // یا اگر محتوای متفاوتی می‌خوای

        return view('project.blogs', compact(
            'blogPosts',
            'blogCategories',
            'blogPost',
            'recentPosts'
        ));
    }
    public function show($slug)
    {
        $blog = BlogPost::where('slug', $slug)
            ->where('is_published', true)
            ->with('category')
            ->firstOrFail();

        // افزایش بازدید فقط یک‌بار در هر session
        if (!session()->has("viewed_blog_{$blog->id}")) {
            $blog->increment('views');
            session(["viewed_blog_{$blog->id}" => true]);
        }

        return view('project.single-blog', compact('blog'));
    }
}
