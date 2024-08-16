<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\News\Category;
use App\Models\News\News;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $category = Category::all();
        return view($this->pagePath . 'category.index', compact('category'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view($this->pagePath . 'category.create');
    }

    /*
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = $request->validate([
            'name' => 'required|unique:categories,name'
        ]);
        try {
            Category::create($category);
            return redirect()->route('manage-category.index')->with('success', 'Category created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $catData = Category::find($id);
        return view($this->pagePath . 'category.show', compact('catData'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);
        return view($this->pagePath . 'category.update', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = $request->validate([
            'name' => 'required|unique:categories,name,' . $id
        ]);
        try {
            Category::find($id)->update($category);
            return redirect()->route('manage-category.index')->with('success', 'Category updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $findNews = News::where('category_id', '=', $id)->count();
        if ($findNews > 0) {
            return redirect()->back()->with('error', 'This category has news. You can not delete this category');
        } else {
            Category::find($id)->delete();
            return redirect()->back()->with('success', 'Category deleted successfully');
        }
    }
}
