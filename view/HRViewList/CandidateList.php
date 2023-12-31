<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Candidate List</title>
</head>

<?php
require_once '../../Component/Navbar.php';
?>

<body class="">
    <div class="row px-4 ">
        <div class="col-3">
            <div class="">
                <label for="" class="form-label" style="color:#444DDA">Candidate Name</label>
                <input type="text" class="form-control" name="" id="searchName" aria-describedby="Search Candidate name" placeholder="Search Candidate name" style="border: 2px solid #444DDA;">
            </div>
        </div>
        <div class="col-3">
            <div class="">
                <label for="" class="form-label" style="color:#444DDA">Position Name</label>
                <div class="dropdown">
                    <button class="btn dropdown-toggle w-100" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border: 2px solid #444DDA;color: #444DDA;">
                        Search Position
                    </button>
                    <div id="searchPos" class="dropdown-menu" aria-labelledby="triggerId">
                        <label class="dropdown-item w-100">
                            <input type="checkbox" value="1"> UXUI
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="">
                <label for="" class="form-label" style="color:#444DDA">Status Name</label>
                <div class="dropdown">
                    <button class="btn dropdown-toggle w-100" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border: 2px solid #444DDA;color: #444DDA;">
                        Search Status
                    </button>
                    <div id="searchStatus" class="dropdown-menu" aria-labelledby="triggerId">

                    </div>
                </div>
            </div>
        </div>
        <div class="col-3" style="padding-top: 2rem;">
            <button type="button" class="btn w-100" style="background-color: #444DDA;color: white;" onclick="search()">Search</button>
        </div>
    </div>

    <div class="  row px-4 mt-4">
        <div class="col-4 ">
            <div id="candidates">
            </div>
        </div>

        <div id="blockcontent" class="col-8 ">
            <div class="shadow-lg p-4 rounded">
                <div class="row">
                    <div class="col-md-2">
                        <div class="profile-img">
                            <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" width="90px" height="90px" alt="" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                            <p>
                                <span class="mb-4 h-5" id="tfullname">
                                    xxxxxx xxxxx
                                </span>
                                <span class="mb-4 h5" id="efullname">
                                    xxxxxx xxxxx
                                </span>[<span id="status"> </span>]
                            <p>
                            <p>
                                <span class="h6" id="cpos1">UX/UI</span> -
                                <span class="h6" id="cpos2">UX/UI</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row mb-4">
                            <div class="col-sm-4">
                                <button id="btndc" class="btn btn-outline-primary" style="color: #444DDA; border: 1px solid #444DDA;" onclick="DeclineFunct()">Deline</button>
                            </div>

                            <div class="col-sm-5">

                                <button id="btn1" onclick="ChangeStatusBtn()" class="btn btn-primary d-block" style="background-color: #444DDA; border: 1px solid #444DDA;">Short-list</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row ">
                    <div class="col-sm-3">
                        <h6><i class="bi bi-envelope" style="color: #444DDA;"></i> <span id="cmail">@gmail.con</span></h6>
                    </div>
                    <div class="col-sm-3">
                        <h6><i class="bi bi-telephone-fill" style="color: #444DDA;"></i> <span id="cphone">xxx-xxx-xxxx</span></h6>
                    </div>
                    <div class="col-sm-3">
                        <h6><i class="bi bi-geo-alt" style="color: #444DDA;"></i> <span id="cads">Bankok,Thailand</span></h6>
                    </div>
                    <div class="col-sm-3">
                        <h6><i class="bi bi-file-earmark"></i>
                            <a style="cursor: pointer;" onclick="downloadFiles()" class="text-decoration-none"> document</a>
                        </h6>
                    </div>
                </div>

                <div class="tab">
                    <ul class="nav nav-tabs mb-4" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="pills-html-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-html" aria-selected="true">Information</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link nv1" id="pills-css-tab" data-bs-toggle="pill" href="#pills-test" role="tab" aria-controls="pills-css" aria-selected="false">Test Result</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link nv2" id="pills-js-tab" data-bs-toggle="pill" href="#pills-interview" role="tab" aria-controls="pills-js" aria-selected="false">Interview</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link nv3" id="pills-js-tab" data-bs-toggle="pill" href="#pills-contract" role="tab" aria-controls="pills-js" aria-selected="false">Contract</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <!-- Info tab -->
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-html-tab">
                            <h5 class="mb-2"> Personal Information</h5>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="row mb-3">
                                        <div class="col-sm-8">
                                            <p class="text-muted mb-0">Cityzen ID or Passport</p>
                                            <p><span class=" mb-0" id="pid">xxxxxxxxxx</span> -
                                                <span class=" mb-0" id="pidc">xxxxxxxxxx</span>
                                            </p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="text-muted mb-0">Gender</p>
                                            <p class=" mb-0" id="gd">Male</p>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-8">
                                            <p class="text-muted mb-0">Birth date</p>
                                            <p class=" mb-0" id="bd">xx/xx/xxxx</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="text-muted mb-0">Age</p>
                                            <p class=" mb-0" id="ag">23</p>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-8">
                                            <p class="text-muted mb-0">Nationality</p>
                                            <p class=" mb-0" id="ntl">Thai</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="text-muted mb-0">Religigion</p>
                                            <p class="mb-0" id="rlg">Thai</p>
                                        </div>
                                    </div>
                                </div><!--md8-->
                                <hr>
                            </div><!--row-->

                            <!--2-->
                            <h5 class="mb-2">Education Information</h5>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="row mb-3">
                                        <div class="col-sm-8">
                                            <p class="text-muted mb-0">University</p>
                                            <p class=" mb-0" id="uni">xxxxxxxxxx</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="text-muted mb-0">Faculty</p>
                                            <p class=" mb-0" id="facu">SIIT</p>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-8">
                                            <p class="text-muted mb-0">Major</p>
                                            <p class=" mb-0" id="maj">xxxxxxxx</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="text-muted mb-0">Year</p>
                                            <p class=" mb-0" id="yrs">3</p>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-8">
                                            <p class="text-muted mb-0">GPA</p>
                                            <p class=" mb-0" id="gpa">3</p>
                                        </div>
                                    </div>
                                </div><!--md8-->
                                <hr>
                                <div>
                                    <p class="text-muted mb-0">Note</p>
                                    <p class=" mb-0" id="notes">lorem</p>

                                </div>
                            </div>
                        </div>

                        <!-- Test result -->
                        <div class="tab-pane fade" id="pills-test" role="tabpanel" aria-labelledby="pills-css-tab">
                            <h4>Test Result</h4>
                            <hr class="my-4">

                            <div>
                                <h5>Postion 1</h5>
                                <p> <span class="text-secondary">Test Question : </span><br> <span id="testquestion1"></span></p>
                                <p> <span class="text-secondary">Test Submited : </span><br> <button onclick="LoadFile1()" class="btn btn-primary">Download</button></p>
                                <p> <span class="text-secondary">Link : </span> <br> <a class="link-primary" href="" id="link1"></a></p>
                                <div id="c1" class="shadow-sm p-2 rounded">

                                </div>

                                <h5 class="mt-3">Postion 2</h5>
                                <p> <span class="text-secondary">Test Question : </span><br> <span id="testquestion2"></span></p>
                                <p> <span class="text-secondary">Test Submited : </span><br> <button onclick="LoadFile2()" class="btn btn-primary">Download</button></p>
                                <p> <span class="text-secondary">Link : </span><br> <a class="link-primary" href="" id="link2"></a></p>
                                
                                <div id="c2" class="shadow-sm p-2 rounded">

                                </div>

                            </div>
                        </div>

                        <!-- Interview -->
                        <div class="tab-pane fade" id="pills-interview" role="tabpanel" aria-labelledby="pills-js-tab">
                            <h5 class="mb-2">Schedule Interview</h5>
                            <div class="col-sm-6 mb-3">
                                <p class="text-muted mb-0"></i>Attendess</p>
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <p class="text-muted mb-0">Location(or link for online interview)</p>
                                <i class="bi bi-geo-alt-fill"></i>
                                <input type="text" name="locationLink" id="locationLink" class="form-control">
                            </div>
                            <div class="col-sm-6 mb-3">
                                <p class="text-muted mb-0">Date</p>
                                </i>
                                <input type="date" name="interdate" id="interdate" class="form-control">
                            </div>

                            <div class="row mb-3">
                                <div class=" col-sm-5 mb-3">
                                    <p class="text-muted mb-0">Start Time</p>
                                    <input type="time" name="intersttime" id="intersttime" class="form-control">
                                </div>
                                <div class="col-sm-5 mb-3">
                                    <p class="text-muted mb-0">End Time</p>
                                    <input type="time" name="interentime" id="interentime" class="form-control">
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button class="btn btn-primary" onclick="ScheduleInterview()" style="background-color: #444DDA;">Send inviation</button>
                                </div>
                            </div>
                        </div>

                        <!-- Contract -->
                        <div class="tab-pane fade" id="pills-contract" role="tabpanel" aria-labelledby="pills-js-tab">
                            <h5 class="mb-3">Contract Detail</h5>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="row mb-3">
                                        <div class="col-sm-6">
                                            <label for="inp" class="text-muted mb-2">Contract period</label>
                                            <input id= "contractp" type="text" name="con" class="form-control" placeholder="x Months/ x Years">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="inp" class="text-muted mb-2">Contract type</label>
                                            <input id= "contractt"  type="text" name="con" class="form-control" placeholder="ex.Full-time">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-6">
                                            <label for="inp" class="text-muted mb-2">Work type</label>
                                            <input id= "workt" type="text" name="con" class="form-control" placeholder="Hybrid">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="inp" class="text-muted mb-2">Work place</label>
                                            <input id= "workp" type="text" name="con" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-6">
                                            <label for="inp" class="text-muted mb-2">Salary</label>
                                            <input id= "csalary" type="text" name="con" class="form-control" placeholder="xx,xxx">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="inp" class="text-muted mb-2">Transfer account</label>
                                            <input id= "tranfera" type="text" name="con" class="form-control" placeholder="xx,xxx">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-6">
                                            <label for="inp" class="text-muted mb-2">Start date</label>
                                            <input id= "cstdate" type="date" name="con" class="form-control">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="inp" class="text-muted mb-2">End date</label>
                                            <input id= "cend" type="date" name="con" class="form-control">
                                        </div>
                                    </div>
                                    <div class="d-grid gap-3 d-md-flex justify-content-md-end">
                                        <a id ="hbtn" onclick="Hire()" href="#pills-contract1" class="btn btn-primary" role="button" style="background-color: #444DDA;">Hire</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to decline this candidate?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                    <button type="button" class="btn btn-danger" id="confirmDeclineButton">Yes, Decline</button>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.5/jszip.min.js"></script>

<script defer src="script.js"></script>
<script defer src="scriptmore.js"></script>
<script defer src="helper.js"></script>

</html>