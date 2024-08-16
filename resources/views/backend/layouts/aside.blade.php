@section('aside')
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="{{route('dashboard')}}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#users-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-people-fill"></i><span>Users</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="users-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route('users.index')}}">
                            <i class="bi bi-circle"></i><span>List</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End Components Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#category-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-newspaper"></i><span>Manage Category</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="category-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route('manage-category.create')}}">
                            <i class="bi bi-circle"></i><span>Add Category</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('manage-category.index')}}">
                            <i class="bi bi-circle"></i><span>Show</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End Components Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#news-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-newspaper"></i><span>Manage News</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="news-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route('manage-news.create')}}">
                            <i class="bi bi-circle"></i><span>Add News</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('manage-news.index')}}">
                            <i class="bi bi-circle"></i><span>Show</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End Components Nav -->



        </ul>

    </aside><!-- End Sidebar-->

@endsection
