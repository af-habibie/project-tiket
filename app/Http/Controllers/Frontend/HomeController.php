<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    
    public function index() {
        $title = 'eNews - Portal Berita Terkini';
        return view('frontend.home.index', compact('title'));
    }

}
