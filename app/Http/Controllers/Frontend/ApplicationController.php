<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\News\News;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{

    public function index()
    {
        $newsData=News::orderBy('id','desc')->get();
        return view('frontend.pages.home.home',compact('newsData'));
    }
}
