<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\News\Category;
use App\Models\News\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        $category=Category::all();
        $news=News::all();
       foreach ($news as $n){
              echo $n->title;
                echo "<br>";
              echo $n->category->name;
              echo "<br>";
                echo $n->user->name;
              echo "<hr>";

       }
//        $news=DB::select("select categories.*,news.* from news
//join categories on categories.id=news.category_id");
//        foreach ($category as $cat){
//              echo $cat->name;
//                echo "<br>";
//           foreach ($cat->newsData as $news){
//               echo $news->title;
//               echo "<br>";
//           }
//
//           echo "<hr>";
//        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
