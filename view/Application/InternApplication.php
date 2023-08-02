<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Intern Application</title>
</head>
<style>
    .fieldinput {
        font-size: 1em;
        border: 1px solid #444DDA;
        border-radius: 6px;
    }

    .fss {
        font-size: 1.2em;
    }
</style>

<body>
    <?php
    require_once '../../Component/Navbar.php';
    ?>
    <div class=" my-5 h3 fw-bold text-center">Application</div>

    <!-- Tab 1 -->
    <div id="tab1" class="d-block">
        <div class="container px-5 w-50">
            <div class="row align-items-center my-2">
                <div class="col-3  fw-bold fss mx-auto">
                    Type application
                </div>
                <div class="col-9 mx-auto">
                    <div class="mb-3">
                        <select class="form-select form-control fieldinput" id="typeSelection" onchange="changeType()">
                            <option selected>Choose...</option>
                            <option value="intern">Intern</option>
                            <option value="jobseeker">Jobseeker</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row align-items-center my-2">
                <div class="col-3  fw-bold fss mx-auto">
                    Position 1
                </div>
                <div class="col-9 mx-auto">
                    <div class="mb-3">
                        <select class="form-select form-control fieldinput" id="pos1Selection">
                        </select>
                    </div>
                </div>
            </div>
            <div class="row align-items-center my-2">
                <div class="col-3  fw-bold fss mx-auto">
                    Position 2
                </div>
                <div class="col-9 mx-auto">
                    <div class="mb-3">
                        <select class="form-select form-control fieldinput" id="pos2Selection">
                            <option selected>Choose...</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mt-2 mb-4">
                <div class="col-3  fw-bold fss mx-auto">
                    Expected salaries
                </div>
                <div class="col-9 mx-auto">
                    <input type="number" id="salary" class="form-control fieldinput" disabled value="0"></input>
                </div>
            </div>


            <div class="row align-items-center mt-2">
                <div class="col-3  fw-bold fss  mx-auto">
                    From
                </div>
                <div class="col-9  mx-auto">
                    <input class="form-control fieldinput" type="date" id="fromdate">
                </div>
            </div>
            <div class="row align-items-center my-4">
                <div class="col-3  fw-bold fss  mx-auto">
                    To
                </div>
                <div class="col-9  mx-auto">
                    <input class="form-control fieldinput" type="date" id="fromto">
                </div>
            </div>
            <div class="row align-items-center my-2">
                <div class="col-3  fw-bold fss mx-auto">
                    Reason
                </div>
                <div class="col-9 mx-auto">
                    <textarea type="text" rows="4" id="reason" class="form-control fieldinput"></textarea>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-primary" onclick="tab1Next()">Next</button>
            </div>
        </div>
    </div>

    <!-- Tab 2 -->
    <div id="tab2" class="d-none">
        <div class="container px-5 w-50">
            <div class="row align-items-center my-4">
                <div class="col-3  fw-bold fss mx-auto">
                    House Register Address
                </div>
                <div class="col-9 mx-auto">
                    <textarea rows="3" type="text" id="houseads" class="form-control fieldinput"></textarea>
                </div>
            </div>
            <div class="container d-flex justify-content-center my-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="isSame">
                    <label class="form-check-label fss fw-bolder" for="isSame">
                        Same House Register Address
                    </label>
                </div>
            </div>

            <div class="row align-items-center my-4">
                <div class="col-3  fw-bold fss mx-auto">
                    Current Address
                </div>
                <div class="col-9 mx-auto">
                    <textarea rows="3" type="text" id="curads" class="form-control fieldinput"></textarea>
                </div>
            </div>
            <div class="row align-items-center my-4">
                <div class="col-3  fw-bold fss mx-auto">
                    Contact Person
                </div>
                <div class="col-9 mx-auto">
                    <input type="text" id="contactperson" class="form-control fieldinput"></input>
                </div>
            </div>
            <div class="row align-items-center my-4">
                <div class="col-3  fw-bold fss mx-auto">
                    Phone Number
                </div>
                <div class="col-9 mx-auto">
                    <input type="number" id="contacttel" class="form-control fieldinput"></input>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <div class="btn-group">

                    <button type="button" class="btn btn-secondary" onclick="backTab2()">back</button>
                    <button type="button" class="btn btn-primary" onclick="tab2Next()">Next</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Tab 3 -->
    <div id="tab3" class="d-none">
        <div class="container px-5 w-50">
            <div class="row align-items-center my-4">
                <div class="col-3  fw-bold fss mx-auto">
                    University
                </div>
                <div class="col-9 mx-auto">
                    <input type="text" id="university" class="form-control fieldinput"></input>
                </div>
            </div>
            <div class="row align-items-center my-4">
                <div class="col-3  fw-bold fss mx-auto">
                    Faculty
                </div>
                <div class="col-9 mx-auto">
                    <input type="text" id="faculty" class="form-control fieldinput"></input>
                </div>
            </div>
            <div class="row align-items-center my-4">
                <div class="col-3  fw-bold fss mx-auto">
                    Major
                </div>
                <div class="col-9 mx-auto">
                    <input type="text" id="major" class="form-control fieldinput"></input>
                </div>
            </div>
            <div class="row align-items-center my-2">
                <div class="col-3  fw-bold fss mx-auto">
                    Year
                </div>
                <div class="col-9 mx-auto">
                    <div class="mb-3">
                        <select class="form-select form-control fieldinput" id="yearSelection">
                            <option selected>Choose...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row align-items-center my-4">
                <div class="col-3  fw-bold fss mx-auto">
                    GPA
                </div>
                <div class="col-9 mx-auto">
                    <input type="number" id="gpa" class="form-control fieldinput"></input>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <div class="btn-group">

                    <button type="button" class="btn btn-secondary" onclick="backTab3()">back</button>
                    <button type="button" class="btn btn-primary" onclick="tab3Next()">Next</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Tab 4 -->
    <div id="tab4" class="d-none">
        <div class="container px-5 w-50">
            <div class="row align-items-center my-4">
                <div class="col-3  fw-bold fss mx-auto">
                    Transcript
                </div>
                <div class="col-9 mx-auto">
                    <input class="form-control fieldinput" type="file" id="transcriptUpload" name="photo">
                </div>
            </div>
            <div class="row align-items-center my-4">
                <div class="col-3  fw-bold fss mx-auto">
                    Resume
                </div>
                <div class="col-9 mx-auto">
                    <input class="form-control fieldinput" type="file" id="resumeUpload" name="photo">
                </div>
            </div>
            <div class="row align-items-center my-4">
                <div class="col-3  fw-bold fss mx-auto">
                    House Registration
                </div>
                <div class="col-9 mx-auto">
                    <input class="form-control fieldinput" type="file" id="houseUpload" name="photo">
                </div>
            </div>
            <div class="row align-items-center my-4">
                <div class="col-3  fw-bold fss mx-auto">
                    ID CARD
                </div>
                <div class="col-9 mx-auto">
                    <input class="form-control fieldinput" type="file" id="idcardUpload" name="photo">
                </div>
            </div>
            <div class="row align-items-center my-4">
                <div class="col-3  fw-bold fss mx-auto">
                    Photo
                </div>
                <div class="col-9 mx-auto">
                    <input class="form-control fieldinput" type="file" id="photoUpload" name="photo">
                </div>
            </div>
            <div class="row align-items-center my-4">
                <div class="col-3  fw-bold fss mx-auto">
                    Certificate (Optional)
                </div>
                <div class="col-9 mx-auto">
                    <input class="form-control fieldinput" type="file" id="certiUpload" name="photo">
                </div>
            </div>
            <div class="row align-items-center my-4">
                <div class="col-3  fw-bold fss mx-auto">
                    Other (Optional)
                </div>
                <div class="col-9 mx-auto">
                    <input class="form-control fieldinput" type="file" id="otherUpload" name="photo">
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <div class="btn-group">

                    <button type="button" class="btn btn-secondary" onclick="backTab4()">back</button>
                    <button id="smform" type="button" class="btn btn-success d-block" onclick="submitData()">Submit form</button>
                </div>
            </div>
        </div>
    </div>

</body>
<script async src="./script.js"></script>
<script async src="./formscript.js"></script>
<script async src="./filescript.js"></script>


</html>