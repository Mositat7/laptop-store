<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ContactUserController extends Controller
{
    // نمایش لیست کاربران
    public function index()
    {
        $users = User::paginate(8); // همه کاربران
        return view('admin.pages.contact_userlist_grid', compact('users'));
    }
}
