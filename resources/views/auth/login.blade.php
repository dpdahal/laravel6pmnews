<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Login page</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link href="{{url('backend-assets/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('backend-assets/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{url('backend-assets/assets/css/style.css')}}" rel="stylesheet">


</head>

<body>

<main>
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        <div class="d-flex justify-content-center py-4">
                            <a href="{{route('index')}}" class="logo d-flex align-items-center w-auto">

                                <span class="d-none d-lg-block">Laravel6pm</span>
                            </a>
                        </div><!-- End Logo -->

                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Login to Dashboard</h5>
                                </div>
                                @include('backend.layouts.message')

                                <form action="{{route('login')}}" class="row g-3 needs-validation" method="post">
                                    @csrf
                                    <div class="form-group mb-2">
                                        <label for="email">Email:
                                            <span style="color: red">{{$errors->first('email')}}</span>
                                        </label>
                                        <input type="email" class="form-control" id="email" name="email">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="password">Password:
                                            <span style="color: red">{{$errors->first('password')}}</span>
                                        </label>
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div>
                                    <div class="form-group mb-2">
                                        <button class="btn btn-success">Login</button>
                                    </div>


                                </form>

                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </section>

    </div>
</main><!-- End #main -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

</body>

</html>
