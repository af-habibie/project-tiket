<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Comment;

class NewsController extends Controller
{

    public function category($slug){
        $newsCategory = Category::where('slug', $slug)->first();
        
        $title = 'eNews - Category : ' . $newsCategory->title;

        $news = Post::where('category_id', $newsCategory->id)->get();

        return view("frontend.news.category", compact('title', 'newsCategory', 'news'));
    }

    public function details($slug){
        $newsPost = Post::where('slug', $slug)->first();
        $relatedPost = Post::where('id','!=', $newsPost->id)->where('category_id', $newsPost->category_id)->get(); 

        $title = 'eNews -  ' . $newsPost->title;

        $comments = Comment::where("post_id", $newsPost->id)->get()->toTree();

        return view("frontend.news.details", compact('title', 'newsPost', 'relatedPost', 'comments'));
    }
}