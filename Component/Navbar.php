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
            <span><a id="usname" href="http://localhost:3000/view/Profile/myProfile.php" class="text-decoration-none text-reset me-2">username
                </a> : Is login</span>
        </div>

    </div>
    <script>
        var username = JSON.parse(localStorage.getItem('user')).username;
        document.getElementById('usname').innerHTML = username;
    </script>

    <div class="offcanvas offcanvas-start d-flex  flex-shrink-0 p-3 bg-light" style="width: 350px;" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-body">
            <div>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-start" id="menu">
                    <li class="nav-item">
                        <a href="http://localhost:3000/view/Application/InternApplication.php" class="nav-link align-middle px-0">
                            <span class="h4 ms-1 d-none d-sm-inline">Application</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="http://localhost:3000/view/CandidateFollowUp/CandidateFollowMain.php" class="nav-link align-middle px-0">
                            <span class="h4 ms-1 d-none d-sm-inline">Application Following</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="http://localhost:3000/view/Profile/myProfile.php" class="nav-link align-middle px-0">
                            <span class="h4 ms-1 d-none d-sm-inline text-success"> My Profile</span>
                        </a>
                    </li>
                    <hr class="bi-hr w-100">
                    <div id="hrsection">
                        <li class="nav-item">
                            <a href="http://localhost:3000/view/HRViewList/CandidateList.php" class="nav-link align-middle px-0">
                                <span class="h4 ms-1 d-none d-sm-inline">HR List</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="http://localhost:3000/view/CreateJobPosition/select.php" class="nav-link align-middle px-0">
                                <span class="h4 ms-1 d-none d-sm-inline">Create Position</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="http://localhost:3000/view/JobManagement/job.php" class="nav-link align-middle px-0">
                                <span class="h4 ms-1 d-none d-sm-inline">Position Manageer</span>
                            </a>
                        </li>
                        <hr class="bi-hr w-100">
                    </div>


                    <li class="nav-item ali">
                        <a href="http://localhost:3000/" class="nav-link align-middle px-0">
                            <span class="h4 ms-1 d-none d-sm-inline text-danger">Logout</span>
                        </a>
                    </li>

                </ul>
            </div>

        </div>
    </div>
</nav>

<script>
    var role = JSON.parse(localStorage.getItem('user')).role;
    if (role == "user") {
        document.getElementById('hrsection').style = "display:none";
    } else if (role == "admin") {
        document.getElementById('hrsection').style = "display:block";
    }
</script>