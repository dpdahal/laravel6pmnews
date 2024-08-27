<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\News\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApplicationController extends Controller
{

    public function index(Request $request)
    {
        $search = $request->search;
        if ($search) {
//            $newsData = News::where('title', 'like', '%' . $search . '%')
//               ->orWhere('name', 'like', '%' . $search . '%')
//                ->orderBy('id', 'desc')->get();
            $newsData= DB::table('news')
                ->join('categories', 'news.category_id', '=', 'categories.id')
                ->select('news.*', 'categories.name')
                ->where('news.title', 'like', '%' . $search . '%')
                ->orWhere('categories.name', 'like', '%' . $search . '%')
                ->get();
        } else {
            $newsData = News::orderBy('id', 'desc')->get();
        }
        return view('frontend.pages.home.home', compact('newsData'));

    }

    public function newsDetails($slug)
    {
        $news = News::where('slug', $slug)->first();
        $catId = $news->category->id;
        $news->page_visit += 1;
        $news->save();
        $relatedNews = News::where('category_id', $catId)->where('id', '!=', $news->id)->get();
        return view('frontend.pages.news.index', compact('news', 'relatedNews'));

    }
}
