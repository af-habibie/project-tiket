<?php

namespace App\Http\Controllers;

use App\Http\Controller\Controller;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('backend.ads.index');
    }

    public function create()
    {
        return view('backend.ads.create');
    }
}
