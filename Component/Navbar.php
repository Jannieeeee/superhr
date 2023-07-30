

<nav class="navbar navbar-light bg-white shadow-sm">
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
            <a href=" http://localhost:3000/view/followup/followjob/followjob.php" class="text-decoration-none text-reset me-2">username
                <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" height="40" />
            </a>
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
                        <a href="http://localhost:3000/view/Application/InternApplication.php" class="nav-link align-middle px-0">
                            <span class="ms-1 d-none d-sm-inline">Application</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="http://localhost:3000/view/CandidateFollowUp/CandidateFollowMain.php" class="nav-link align-middle px-0">
                            <span class="ms-1 d-none d-sm-inline">Application Following</span>
                        </a>
                    </li>

                </ul>
            </div>

        </div>
    </div>
</nav>