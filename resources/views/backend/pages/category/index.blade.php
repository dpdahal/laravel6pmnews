@extends('backend.layouts.master')
@section('content')
    <main id="main" class="main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header mb-2">
                            <h4><i class="bi bi-people"></i> Category List</h4>
                            @include('backend.layouts.message')
                        </div>
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Sn</th>
                                    <th>Name</th>
                                    <th>Create at</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                    @foreach($category as $key=>$cat)
                                        <tr>
                                            <td>{{++$key}}</td>
                                            <td>{{$cat->name}}</td>
                                            <td>{{$cat->created_at->diffForHumans()}}</td>
                                            <td width="20%">
                                                <form action="{{route('manage-category.destroy',$cat->id)}}" method="post">
                                                    @csrf
                                                    <a href="{{route('manage-category.show',$cat->id)}}" class="btn btn-success btn-sm">Show</a>
                                                    <a href="{{route('manage-category.edit',$cat->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-sm">Delete</button>

                                                </form>

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

    </main>
@endsection

