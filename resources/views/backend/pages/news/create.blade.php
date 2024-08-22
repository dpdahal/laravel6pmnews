@extends('backend.layouts.master')
@section('content')
    <main id="main" class="main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Add News</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="{{route('manage-news.store')}}" method="post"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group mb-2">
                                            <label for="category">Category:
                                                <a style="color: red;">{{$errors->first('category_id')}}</a>

                                            </label>
                                            <select class="form-control" name="category_id" id="category">
                                                <option value="">Select Category</option>
                                                @foreach($categoryData as $category)
                                                    <option value="{{$category->id}}"
                                                            {{old('category_id') == $category->id ? 'selected' : ''}}>
                                                        {{$category->name}}
                                                    </option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="title">Title:
                                                <a style="color: red;">{{$errors->first('title')}}</a>
                                            </label>
                                            <input type="text" class="form-control" name="title" id="title"
                                                   value="{{old('title')}}">

                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="slug">Slug:
                                                <a style="color: red;">{{$errors->first('slug')}}</a>
                                            </label>
                                            <input type="text" class="form-control" name="slug" id="slug"
                                                   value="{{old('slug')}}">

                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="image">Image:
                                                <a style="color: red;">{{$errors->first('image')}}</a>
                                            </label>
                                            <input type="file" class="form-control" name="image" id="image">

                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="summary">summary:
                                                <a style="color: red;">{{$errors->first('summary')}}</a>
                                            </label>
                                            <textarea class="form-control" name="summary" id="summary"
                                                      rows="3">{{old('summary')}}</textarea>

                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="description">description:
                                                <a style="color: red;">{{$errors->first('description')}}</a>
                                            </label>
                                            <textarea class="form-control" name="description" id="description"
                                                      rows="3">{{old('description')}}</textarea>

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

@section('custom-scripts')
    <script>
       CKEDITOR.replace('summary')
       CKEDITOR.replace('description')
    </script>
@endsection

