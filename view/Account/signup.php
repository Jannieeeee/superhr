<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script async src="./script.js"></script>
    <title>Sign up</title>
</head>
<style>
    .fieldinput {
        padding: 10px 10px;
        width: 450px;
        font-size: 1em;
        border: 1px solid #444DDA;
        border-radius: 6px;
    }

    .fss {
        font-size: 1.2em;
    }
</style>

<body>
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
        </div>
    </nav>
    <div id="tab1">
        <div class="text-center my-5 h3 fw-bold">Create Account</div>
        <div class="row px-5">
            <div class="col-6">
                <div class="row align-items-center my-4">
                    <div class="col-3 text-center fw-bold fss">
                        Thai Fullname
                    </div>
                    <div class="col-9">
                        <input type="text" id="thfullname" class="form-control fieldinput" placeholder="Thai fullname">
                    </div>
                </div>
                <div class="row align-items-center my-4">
                    <div class="col-3 text-center fw-bold fss">
                        Eng Fullname
                    </div>
                    <div class="col-9">
                        <input type="text" id="enfullname" class="form-control fieldinput" placeholder="English fullname">
                    </div>
                </div>
                <div class="row align-items-center my-4">
                    <div class="col-3 text-center fw-bold fss">
                        Phone number
                    </div>
                    <div class="col-9">
                        <input type="text" id="phonenumber" class="form-control fieldinput" placeholder="08x-xxx-xxxx">
                    </div>
                </div>
                <div class="row align-items-center my-4">
                    <div class="col-3 text-center fw-bold fss">
                        Email
                    </div>
                    <div class="col-9">
                        <input type="text" id="email" class="form-control fieldinput" placeholder="abc@mail.com">
                    </div>
                </div>
                <div class="row align-items-center my-4">
                    <div class="col-3 text-center fw-bold fss">
                        Gender
                    </div>
                    <div class="col-9">
                        <div class="mb-3">
                            <select class="form-select form-control fieldinput" id="genderSelection">
                                <option selected>Choose...</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                    </div>
                </div>
                <div class="row align-items-center my-4">
                    <div class="col-3 text-center fw-bold fss">
                        Photo
                    </div>
                    <div class="col-9">
                        <div class="mb-3">
                            <input class="form-control fieldinput" type="file" id="photoUpload" name="photo">
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-6">
                <div class="row align-items-center my-4">
                    <div class="col-3 text-center fw-bold fss">
                        Date of Birth
                    </div>
                    <div class="col-9">
                        <input class="form-control fieldinput" type="date" id="dob">
                    </div>
                </div>
                <div class="row align-items-center my-4">
                    <div class="col-3 text-center fw-bold fss">
                        Citizen ID
                    </div>
                    <div class="col-9">
                        <input type="text" id="ctID" class="form-control fieldinput" placeholder="xxxx-xxxx-xxx-...">
                    </div>
                </div>
                <div class="row align-items-center my-4">
                    <div class="col-3 text-center fw-bold fss">
                        Passport ID
                    </div>
                    <div class="col-9">
                        <input type="text" id="psID" class="form-control fieldinput" placeholder="xxxx-xxxx-xxx-...">
                    </div>
                </div>
                <div class="row align-items-center my-4">
                    <div class="col-3 text-center fw-bold fss">
                        Nationality
                    </div>
                    <div class="col-9">
                        <div class="mb-3">
                            <select class="form-select form-control fieldinput" id="nationalSelection">
                                <option selected>Choose...</option>
                                <option value="thai">Thai</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center my-4">
                    <div class="col-3 text-center fw-bold fss">
                        Religion
                    </div>
                    <div class="col-9">
                        <div class="mb-3">
                            <select class="form-select form-control fieldinput" id="reliSelection">
                                <option selected>Choose...</option>
                                <option value="buddhism">Buddhism</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center my-4">
                    <div class="col-3 text-center fw-bold fss">
                        Address
                    </div>
                    <div class="col-9">
                        <textarea class="form-control fieldinput" id="address" rows="3"></textarea>
                    </div>
                </div>
                <div class="row align-items-center my-4 d-flex justify-content-end">
                    <button type="button" class="btn btn-primary w-25" onclick="nextTab()">Next</button>
                </div>
            </div>
        </div>
    </div>

    <div id="tab2" class="d-flex justify-content-center d-none">
        <div class="conta">
            <div class="text-center my-5 h3 fw-bold">Account Information</div>
            <div>
                <div class="row my-4">
                    <div class="col-3 text-center fw-bold fss">
                        Username
                    </div>
                    <div class="col-9">
                        <input type="text" id="username" class="form-control fieldinput" placeholder="Username">
                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-3 text-center fw-bold fss">
                    Passowrd
                </div>
                <div class="col-9">
                    <input type="password" id="password" class="form-control fieldinput" placeholder="******">
                </div>
            </div>
            <div class="row my-4">
                <div class="col-3 text-center fw-bold fss">
                    Confirm Passowrd
                </div>
                <div class="col-9">
                    <input type="password" id="cfpassword" class="form-control fieldinput" placeholder="******">
                </div>
            </div>
            <div class="d-flex justify-content-end btn-group my-4">
                <button type="button" class="btn btn-warning w-25" onclick="backTab()">Back</button>
                <button type="button" class="btn btn-primary w-25" onclick="signup()" >Sign up</button>
            </div>
        </div>
    </div>

</body>
<script>

</script>

</html>