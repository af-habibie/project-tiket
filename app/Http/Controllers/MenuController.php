<?php
//controller tidak butuh layout. fungsinya hanya mengirim variabel yang isinya nilai ke content2nya
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    
    public function home() {
        $title = 'Home';
        return view('menu.home', compact('title'));
    }
    
    public function about() {
        $title = 'About';
        return view('menu.about', compact('title'));
    }
    
    public function service() {
        $title = 'Service';
        return view('menu.service', compact('title'));
    }
    
    public function partner() {
        $title = 'Partner';
        return view('menu.partner', compact('title'));
    }
    
    public function contact() {
        $title = 'Contact';
        return view('menu.contact', compact('title'));
    }

    public function product($slug = null) {
        $title = 'Product: ' . $slug;
        return view('menu.product', compact('title', 'slug'));
    }

}
