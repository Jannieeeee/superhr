<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Candidate followup</title>
</head>
<style>
    .fieldinput {
        padding: 10px 10px;
        font-size: 1em;
        border: 1px solid #444DDA;
        border-radius: 6px;
    }

    .fss {
        font-size: 1.2em;
    }
</style>

<body>
    <div>
        <?php
        require_once '../../Component/Navbar.php';
        ?>
    </div>

    <div class="row mt-3 p-2">
        <div class="col-4 p-1">
            <h2 class="text-center fw-bold">Your application</h2>
            <div id="listApps" class="px-2">

            </div>

            <div class="d-flex justify-content-end">
                <a name="" id="" class="btn btn-outline-primary my-2" href="../Application/InternApplication.php" role="button">new apply</a>
            </div>

        </div>

        <div class="col-8">
            <div class="shadow-sm rounded p-3">
                <h6 class="text-end">Process status: <span class="bold text-primary" id="status">New apply</span></h6>
                <div class="d-flex justify-content-end waittest">
                    <button id="testbtn" disabled type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Test</button>
                    <button id="interbtn" disabled type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2" data-bs-whatever="@getbootstrap">Interview</button>
                </div>
                <h5 class="text-start">Application Information</h5>
                <div class="row ">
                    <div class="col-6">
                        <h6>Position 1</h6>
                        <p id="position_1">UX/UI designer trainee</p>
                        <h6>Position 2</h6>
                        <p id="position_2">Programer</p>
                        <h6>Period</h6>
                        <p id="period">01/08/2023 - 30/10/2023</p>
                        <h6>House registration address</h6>
                        <p id="house_address">00000000000000000</p>
                        <h6>Current address</h6>
                        <p id="current_address">Same as house registration</p>
                        <h6>Contact person</h6>
                        <p id="contact_person">Contact person name</p>
                        <h6>Contact person number</h6>
                        <p id="contact_person_number">09x-xxx-xxxx</p>
                        <h6>Test result 1</h6>
                        <p id="test_result1">-</p>
                        <h6>Test result 2</h6>
                        <p id="test_result2">-</p>
                        <h6>Result</h6>
                        <p id="result">-</p>
                    </div>
                    <div class="col-6">
                        <h6>Document</h6>
                        <a class="link" id="document" style="cursor: pointer;" onclick="downloadFiles()">Open document</a>
                        <h6>University</h6>
                        <p id="university">Thammasat</p>
                        <h6>Faculty</h6>
                        <p id="faculty">SIIT</p>
                        <h6>Major</h6>
                        <p id="major">Digital engineering</p>
                        <h6>Year</h6>
                        <p id="year">3rd</p>
                        <h6>GPA</h6>
                        <p id="gpa">3.21</p>
                        <h6>Application reason</h6>
                        <p id="application_reason">Reason</p>
                        <h6>Interview date</h6>
                        <p id="interview_date">-</p>
                        <h6>Interview result</h6>
                        <p id="interview_result">-</p>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Cancel application
                    </button>
                </div>
            </div>

        </div>


    </div>



    <!-- Modal -->
    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Skill Test</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <h4>Position 1</h4>
                        <hr>
                        <div class="mb-3">
                            <p>Question:</p>
                            <textarea rows="3" class="w-100" id="questionText1" style="pointer-events: none;">...</textarea>
                        </div>
                        <div class="mb-3">
                            <div class="row align-items-center my-4">
                                <div class="col-3">
                                    Attachment
                                </div>
                                <div class="col-9">
                                    <input class="form-control fieldinput" type="file" id="ansfile1" name="photo">
                                </div>
                            </div>
                            <div class="row align-items-center my-4">
                                <div class="col-3">
                                    Link
                                </div>
                                <div class="col-9">
                                    <input type="text" id="link1" class="form-control fieldinput" placeholder="www//..">
                                </div>
                            </div>
                        </div>
                    </form>
                    <form>
                        <h4>Position 2</h4>
                        <hr>
                        <div class="mb-3">
                            <p>Question:</p>
                            <textarea rows="3" class="w-100" id="questionText2" style="pointer-events: none;">...</textarea>
                        </div>
                        <div class="mb-3">
                            <div class="row align-items-center my-4">
                                <div class="col-3">
                                    Attachment
                                </div>
                                <div class="col-9">
                                    <input class="form-control fieldinput" type="file" id="ansfile2" name="photo">
                                </div>
                            </div>
                            <div class="row align-items-center my-4">
                                <div class="col-3">
                                    Link
                                </div>
                                <div class="col-9">
                                    <input type="text" id="link2" class="form-control fieldinput" placeholder="www//..">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="submitTest()">Turn In</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 2-->
    <div class="modal fade " id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Skill Test</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="submitInter()">End Interview</button>
                </div>
            </div>
        </div>
    </div>

</body>
<script defer src="script.js"></script>
<script defer src="testscript.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.5/jszip.min.js"></script>

</html>