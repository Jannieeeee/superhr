

<nav class="navbar navbar-light bg-white">
    <div class="container-fluid">
        <div class="row d-flex align-items-center">
            <div class="col-sm-2 ">
                <div class="toggle">
                    <a class="btn btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                        <i class="fs-2 bi bi-list"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <img src="https://firstdraw.blob.core.windows.net/cardimgs/logo.png" alt="" height="40px" width="272.85711669921875px" class="d-inline-block align-text-top">
            </div>

        </div>

        <div class="d-flex align-items-center">
            <a href="#" class="text-decoration-none text-reset me-2">username
                <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" height="40" />
            </a>
            <div class="dropdown">
                <a class="text-reset me-1 dropdown hidden-arrow" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class=" fs-4 bi bi-bell bi-lg text-dark"></i>

                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="#">Some news</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Another news</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </li>
                </ul>
            </div>
            <div class="dropdown">
                <a class="text-reset me-2 dropdown hidden-arrow" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fs-4 bi bi-three-dots-vertical bi-lg text-dark"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#"> <i class="fas fa-user-alt pe-2"></i>My Profile</a></li>
                    <li><a class="dropdown-item" href="#"> <i class="fas fa-cog pe-2"></i>Settings</a></li>
                    <li><a class="dropdown-item" href="/"> <i class="fas fa-door-open pe-2"></i>Logout</a></li>
                </ul>
            </div>
        </div>

    </div>


    <div class="offcanvas offcanvas-start d-flex flex-coumn flex-shrink-0 p-3 bg-light" style="width: 280px;" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <div class="input-group rounded">
                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                <button id="search-button" type="button" class="btn btn-outline">
                    <i class="bi bi-search"></i>
                </button>
            </div>

            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="/SortByPos/position.php" class="nav-link align-middle px-0">
                            <span class="ms-1 d-none d-sm-inline">Open position</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/SortByPos/position.php" class="nav-link align-middle px-0">
                            <span class="ms-1 d-none d-sm-inline">Sort by position</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/SortByStatus/sstatus.php" class="nav-link align-middle px-0">
                            <span class="ms-1 d-none d-sm-inline">Sort by status</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/CreateJobPosition/job.php" class="nav-link align-middle px-0">
                            <span class="ms-1 d-none d-sm-inline">Create job</span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</nav>