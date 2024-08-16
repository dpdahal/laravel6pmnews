@extends('backend.layouts.master')
@section('content')
    <main id="main" class="main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header mb-2">
                            <h4><i class="bi bi-newspaper"></i> {{$catData->name}}
                                <a href="{{route('manage-category.index')}}" class="float-end">Back</a>
                            </h4>
                            @include('backend.layouts.message')
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @foreach($catData->newsData as $news)
                                    <div class="col-md-3 mb-2">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4>{{$news->title}}</h4>
                                            </div>
                                            <div class="card-body">
                                                <p>{{$news->description}}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection

