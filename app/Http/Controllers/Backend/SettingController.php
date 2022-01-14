<?php

namespace App\Http\Controllers;

use App\Http\Controller\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('backend.settings.index');
    }
}
