<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        // دریافت اولین رکورد درباره ما
        $about = About::first();

        // اگر رکوردی وجود نداشت، یک نمونه خالی ایجاد کن
        if (!$about) {
            $about = new About();
            $about->title = 'درباره ما';
            $about->description = 'محتوای درباره ما';
            $about->image = 'assets/image/heroSlider/1.webp';
        }

        return view('project.aboutUs', compact('about'));
    }
}
