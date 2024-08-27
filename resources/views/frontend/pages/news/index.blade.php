@extends('frontend.layouts.master')



@section('content')
    <div class="container">
        <div class="row mt-2 mb-4">
            <div class="col-md-12">
                <h1>News Details</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <h2> {{$news->title}} </h2>
                @if($news->image)
                <img src="{{url($news->image)}}" class="img-fluid" alt="{{$news->title}}">
                @endif
                <p><em>Category Name: {{$news->category->name}}
                        / Author: {{$news->user->name}}
                        / Published Date: {{$news->created_at->format('d M Y')}}
                        / Page View: {{$news->page_visit}}
                    </em></p>
                <p>
                    {!! $news->description !!}
                </p>
            </div>
            <div class="col-md-4">
                <h2>Related News</h2>
                <ul>
                    @foreach($relatedNews as $related)
                    <li>
                        <a href="{{route('news-details', $related->slug)}}">{{$related->title}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>

@endsection
