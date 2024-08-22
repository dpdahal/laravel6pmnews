@extends('frontend.layouts.master')



@section('content')
    <div class="container">
        <div class="row mt-2 mb-4">
            <div class="col-md-12">
                <h1>News List</h1>
            </div>
        </div>
        <div class="row">
            @foreach($newsData as $news)
            <div class="col-md-4 mb-3">
                <div class="card">
                    @if($news->image)
                    <img src="{{url($news->image)}}" height="250" class="card-img-top" alt="...">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{$news->title}}</h5>
                        <p class="card-text">
                            {!! $news->summary  !!}
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection
