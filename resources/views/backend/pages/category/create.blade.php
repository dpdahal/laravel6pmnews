@extends('backend.layouts.master')
@section('content')
    <main id="main" class="main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Add Category</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="{{route('manage-category.store')}}" method="post">
                                        @csrf
                                        <div class="form-group mb-2">
                                            <label for="name">Name:
                                                <a style="color: red;">{{$errors->first('name')}}</a>
                                            </label>
                                            <input type="text" class="form-control" name="name" id="name"
                                                   value="{{old('name')}}">

                                        </div>
                                        <div class="form-group mb-2">
                                            <button class="btn btn-success">Add Record</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection

