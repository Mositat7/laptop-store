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

        // افزایش تعداد بازدیدها
        $blog->increment('views');

        return view('project.single-blog', compact('blog'));
    }
//    public function index(){
//        // مقالات
////        $blogPosts = BlogPost::published()->latest()->take(5)->get();
//        // مقالات با پاژینیشن (6 مقاله در هر صفحه)
//        $blogPosts = BlogPost::published()->latest()->paginate(3);
//        $blogPost =  BlogPost::published()->latest()->paginate(4);
//        // دسته‌بندی‌های مقالات
//        $blogCategories = BlogCategory::active()->ordered()->get();
//        // مقالات با فیلتر دسته‌بندی
//        $blogQuery = BlogPost::published()->latest();
//
//        if ($request->has('category') && $request->category !== 'latest') {
//            $blogQuery->whereHas('category', function($q) use ($request) {
//                $q->where('slug', $request->category);
//            });
//        }
//        return view('project.blogs', compact(
//         'blogPosts',
//            'blogCategories',
//            'blogPost'
//        ));
//
//    }

}
