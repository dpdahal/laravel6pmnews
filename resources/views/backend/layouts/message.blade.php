@if(session('success'))
    <div class="alert alert-success alert-dismissible message-alert fade show" role="alert">
        <strong>Success!</strong> {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif


@if(session('error'))
    <div class="alert alert-danger alert-dismissible message-alert fade show" role="alert">
        <strong>Error!</strong> {{session('error')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
