<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $post_count = 0;
        return view('admin.home.index', [
            'post_count' => $post_count
        ]);
    }
}
