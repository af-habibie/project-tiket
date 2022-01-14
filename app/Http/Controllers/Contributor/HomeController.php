<?php

namespace App\Http\Controllers\Contributor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use DB;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $postsChart = Post::select(DB::raw('COUNT(*) as count')) // tampilkan count/ total data artikel yang dialiaskan count
                            ->where('user_id', Auth::id())
                            ->whereYear('created_at', date('Y'))    //dengan kondisi tanggal pembuatan artikel adalah tahun ini 
                            ->groupBy(DB::raw('MONTH(created_at)'))  // di grouping berdasarkan bulan di dalam kolom created_at (2021-02-10 21:30:55) MONTH->Mengambil bulannya
                            ->pluck('count'); //return array ---> mendapatkan value dari array tersebut

        $totalPosts = Post::where('user_id', Auth::id())->count();

        return view('contributor.home.index', compact('totalPosts', 'postsChart'));
    }
}
