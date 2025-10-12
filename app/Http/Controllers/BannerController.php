<?php

namespace App\Http\Controllers;

use App\Models\Banners;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function getHeroSliders()
    {
        $banners = Banners::active()
            ->ordered() // مرتب سازی بر اساس position
            ->get();

        return view('index', compact('banners'));

    }
}
