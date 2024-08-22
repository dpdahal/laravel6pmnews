@extends('backend.layouts.master')
@section('content')
    <main id="main" class="main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header mb-2">
                            <h4><i class="bi bi-newspaper"></i> News List
                                <a href="{{route('manage-news.create')}}" class="float-end">Add News</a>
                            </h4>
                            @include('backend.layouts.message')
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>Sn</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Image</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($newsData as $key => $new)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $new->title }}</td>
                                                <td>{{ $new->category->name }}</td>
                                                <td>
                                                    @if($new->image)
                                                        <img src="{{ url($new->image) }}" alt="" style="width: 50px;">
                                                    @endif
                                                </td>
                                                <td>{{ $new->created_at->diffForHumans() }}</td>
                                                <td>
                                                    <a href="">Edit</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection

