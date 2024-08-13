@extends('backend.layouts.master')
@section('content')
    <main id="main" class="main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header mb-2">
                            <h4><i class="bi bi-people"></i> Account setting</h4>
                            @include('backend.layouts.message')
                            {{$errors}}
                        </div>
                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-2">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" value="{{$user->name}}" name="name" class="form-control">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="email">Email</label>
                                    <input type="text" id="email" readonly disabled value="{{$user->email}}" name="email" class="form-control">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="gender">Gender</label>
                                    <select name="gender" id="gender" class="form-control">
                                        <option value="male" {{$user->gender=='male' ? 'selected': ''}}>Male</option>
                                        <option value="female" {{$user->gender=='female' ? 'selected': ''}}>Female</option>
                                    </select>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                                <div class="form-group mb-2">
                                   <button class="btn btn-primary"> Update Record</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection

