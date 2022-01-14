<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Category::orderBy('title')->latest()->paginate(15);
        return view('backend.category.index', compact('categories'));
}

public function destroy(Request $request)
    {
        Category::destroy($request->input('id'));

        return redirect()->route('admin.category.index')->with('success', 'You have successfully deleted post.');;
    }

    public function create()
    {
        return view('backend.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:categories',
            'hit' => 'required|numeric'
        ]);

        category::create($request->all());

        return redirect()->route('admin.category.index')->with('success', 'You have successfully created post.');
    }

    public function show($slug = null)
    {
        $categories = Category::where('slug', $slug)->first();
        
        return view('backend.category.show', compact('categories'));
    }

    public function edit($slug = null)
    {
        $categories = Category::where('slug', $slug)->first();
        
        return view('backend.category.edit', compact('categories'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'hit' => 'required'
        ]);

        Category::where('id', $request->input('id'))->update([
            'title' => $request->input('title'),
            'slug' => $request->input('slug'),
            'hit' => $request->input('hit')
        ]);

        return redirect()->route('admin.category.index')->with('success', 'You have successfully updated post.');;
    }
    
}