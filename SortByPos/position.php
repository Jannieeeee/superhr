<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="position.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


</head>



<body>

    <div class="container-fluid">
         <?php
             require_once '../Component/Navbar.php';
        ?>

        <div class="row justify-content-between" style="background-color: #F2F3FF;">
            <div class="col-md-4">
                <div class="w-100">
                    <div class="row w-100">
                        <div class="col-md-6 offset-md-3">
                            <div class="input-group mb-3">
                                <button class="choiceBtn btn-outline-secondary" type="button" id="leftBtn">
                                    <i class="bi bi-chevron-left"></i>
                                </button>
                                <select class="form-select " id="menuSelect" disabled>
                                    <option value="thai">test</option>
                                    <option value="uxui">UX/UI</option>
                                    <option value="dev">DEV</option>
                                    <option value="hr">HR</option>
                                    <!-- Add more options here if needed -->
                                </select>
                                <button class="choiceBtn btn-outline-secondary" type="button" id="rightBtn">
                                    <i class="bi bi-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="candidates">
                    <!-- Candidates will be loaded here -->
                </div>
            </div>
            <script>
                $(document).ready(function() {
                    // Fetch the initial data
                    fetchCandidates("thai");

                    // When a button is clicked
                    $(".choiceBtn").click(function() {
                        var $select = $("#menuSelect");
                        var totalOptions = $select.find('option').length;
                        var currentOption = $select.prop('selectedIndex');

                        // If the left button is clicked
                        if (this.id === 'leftBtn') {
                            // If the first option is selected, go to the last option
                            if (currentOption === 0) {
                                $select.prop('selectedIndex', totalOptions - 1);
                            } else {
                                $select.prop('selectedIndex', currentOption - 1);
                            }
                        }

                        // If the right button is clicked
                        if (this.id === 'rightBtn') {
                            // If the last option is selected, go to the first option
                            if (currentOption === totalOptions - 1) {
                                $select.prop('selectedIndex', 0);
                            } else {
                                $select.prop('selectedIndex', currentOption + 1);
                            }
                        }

                        fetchCandidates($select.val());
                    });

                    function fetchCandidates(pos) {
                        $.ajax({
                            url: 'fetchCandidates.php',
                            type: 'POST',
                            data: {
                                pos1: pos,
                                pos2: pos
                            },
                            success: function(data) {
                                $('#candidates').html(data);
                            },
                            error: function() {
                                console.log('There was an error.');
                            }
                        });
                    }
                });
            </script>
            <div class="col-md-7" id="content">
                <div class="emp-profile">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="profile-img">
                                <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" width="90px" height="90px" alt="" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="profile-head">
                                <h5 class="mb-4" id="cfullname">
                                    Ploypichcha Anupatanun
                                </h5>
                                <h6 id="cpos">UX/UI</h6>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row mb-4">
                                <div class="col-sm-4">
                                    <a href="https://www.youtube.com/watch?v=WUrquTUH1bk" class="btn btn-outline-primary" style="color: #444DDA; border: 1px solid #444DDA;">Deline</a>
                                </div>
                                <div class="col-sm-5">
                                    <a href="https://www.youtube.com/watch?v=WUrquTUH1bk" class="btn btn-primary" style="background-color: #444DDA; border: 1px solid #444DDA;">Shot-list</a>
                                </div>
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
                        <h6><i class="bi bi-file-earmark"></i><a href="#" class="text-decoration-none"> document</a> </h6>
                    </div>
                </div>

                <div class="tab">
                    <ul class="nav nav-tabs mb-4" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="pills-html-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-html" aria-selected="true">Information</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-css-tab" data-bs-toggle="pill" href="#pills-test" role="tab" aria-controls="pills-css" aria-selected="false">Test Result</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-js-tab" data-bs-toggle="pill" href="#pills-interview" role="tab" aria-controls="pills-js" aria-selected="false">Interview</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-js-tab" data-bs-toggle="pill" href="#pills-contract" role="tab" aria-controls="pills-js" aria-selected="false">Contract</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <h5 class="mb-2">Personal Information</h5>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="row mb-3">
                                        <div class="col-sm-8">
                                            <p class="text-muted mb-0">Cityzen ID or Passport</p>
                                            <p class=" mb-0">xxxxxxxxxx</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="text-muted mb-0">Gender</p>
                                            <p class=" mb-0">Male</p>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-8">
                                            <p class="text-muted mb-0">Birth date</p>
                                            <p class=" mb-0">xx/xx/xxxx</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="text-muted mb-0">Age</p>
                                            <p class=" mb-0">23</p>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-8">
                                            <p class="text-muted mb-0">Nationality</p>
                                            <p class=" mb-0">Thai</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="text-muted mb-0">Religigion</p>
                                            <p class="mb-0">Thai</p>
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
                                            <p class=" mb-0">xxxxxxxxxx</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="text-muted mb-0">Faculty</p>
                                            <p class=" mb-0">SIIT</p>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-8">
                                            <p class="text-muted mb-0">Major</p>
                                            <p class=" mb-0">xxxxxxxx</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="text-muted mb-0">Year</p>
                                            <p class=" mb-0">3</p>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-8">
                                            <p class="text-muted mb-0">GPA</p>
                                            <p class=" mb-0">3</p>
                                        </div>
                                    </div>
                                </div><!--md8-->
                                <hr>
                            </div><!--row-->

                            <!--3-->
                            <h5 class="mb-2">Application Information</h5>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="row mb-3">
                                        <div class="col-sm-8">
                                            <p class="text-muted mb-0">Internship period</p>
                                            <p class=" mb-0">xx/xx/xxxx-xx/xx/xxxx</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="text-muted mb-0">Contect person</p>
                                            <p class=" mb-0">xxx-xxxxx</p>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-8">
                                            <p class="text-muted mb-0">Applicaton reson</p>
                                            <p class=" mb-0">Applicaton reson</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="text-muted mb-0">Phone number</p>
                                            <p class=" mb-0">xxx-xxx-xxxx</p>
                                        </div>
                                    </div>


                                </div><!--md8-->
                                <hr>
                            </div><!--row-->

                            <div class="form-outline w-100 mb-3">
                                <label class="form-label" for="textAreaExample">Note</label>
                                <textarea class="form-control" id="textAreaExample" rows="4" style="background: #fff;"></textarea>
                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-primary" type="submit" style="background-color: #444DDA;"><i class="bi bi-pencil-square"></i></button>
                            </div>

                        </div><!--pane-->
                        <div class="tab-pane fade " id="pills-interview" role="tabpanel" aria-labelledby="pills-intreview-tab">
                            <h5 class="mb-2">Schedule Interview</h5>
                            <div class="col-sm-6 mb-3">
                                <p class="text-muted mb-0"></i>Attendess</p>
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <p class="text-muted mb-0">Location(or link for online interview)</p>
                                <i class="bi bi-geo-alt-fill"></i><input type="text" name="inp" class="form-control">
                            </div>
                            <div class="col-sm-6 mb-3">
                                <p class="text-muted mb-0">Date</p>
                                </i> <input type="date" name="inp" class="form-control">
                            </div>

                            <div class="row mb-3">
                                <div class=" col-sm-5 mb-3">
                                    <p class="text-muted mb-0">Start Time</p>
                                    <input type="time" name="inp" class="form-control">
                                </div>
                                <div class="col-sm-5 mb-3">
                                    <p class="text-muted mb-0">End Time</p>
                                    <input type="time" name="inp" class="form-control">
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button class="btn btn-primary" type="submit" style="background-color: #444DDA;">Send inviation</button>
                                </div>
                            </div>
                        </div><!--pane-->


                        <div class="tab-pane fade " id="pills-contract" role="tabpanel" aria-labelledby="pills-contract-tab">
                            <h5 class="mb-3">Contract Detail</h5>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="row mb-3">
                                        <div class="col-sm-6">
                                            <label for="inp" class="text-muted mb-2">Contract period</label>
                                            <input type="text" name="con" class="form-control" placeholder="x Months/ x Years">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="inp" class="text-muted mb-2">Contract type</label>
                                            <input type="text" name="con" class="form-control" placeholder="ex.Full-time">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-6">
                                            <label for="inp" class="text-muted mb-2">Work type</label>
                                            <input type="text" name="con" class="form-control" placeholder="Hybrid">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="inp" class="text-muted mb-2">Work place</label>
                                            <input type="text" name="con" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-6">
                                            <label for="inp" class="text-muted mb-2">Salary</label>
                                            <input type="text" name="con" class="form-control" placeholder="xx,xxx">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="inp" class="text-muted mb-2">Transfer account</label>
                                            <input type="text" name="con" class="form-control" placeholder="xx,xxx">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-6">
                                            <label for="inp" class="text-muted mb-2">Start date</label>
                                            <input type="date" name="con" class="form-control">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="inp" class="text-muted mb-2">End date</label>
                                            <input type="date" name="con" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-6">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Extendable
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Renewable
                                            </label>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-3 d-md-flex justify-content-md-end">
                                        <a href="#pills-contract1" class="btn btn-primary" role="button" style="background-color: #444DDA;">save</a>
                                    </div>
                                </div>
                            </div>
                        </div><!--pane-->

                    </div><!--tab-content-->
                </div><!--tab-->
            </div><!--md8-->
            <script>
                $(document).ready(function() {
                    $(document).on("click", ".userlist", function() {
                        var id = $(this).data("id");
                        fetchFulldata(id);
                    });


                    function fetchFulldata(id) {
                        $.ajax({
                            url: 'fetchFulldata.php',
                            type: 'POST',
                            data: {
                                id: id // This should be 'id' not 'status'
                            },
                            success: function(data) {
                                var userData = JSON.parse(data);
                                document.getElementById("cfullname").innerHTML = userData.full_name_eng
                                document.getElementById("cmail").innerHTML = userData.email
                                document.getElementById("cads").innerHTML = userData.house_registration_address
                                document.getElementById("cphone").innerHTML = userData.phone_number

                            },
                            error: function() {
                                console.log('There was an error.');
                            }
                        });
                    }

                });
            </script>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </div><!--container-->


</body>

</html>