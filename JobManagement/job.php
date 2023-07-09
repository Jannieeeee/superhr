<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="job.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
</head>
<body>
<div>
        <?php
        require_once '../Component/Navbar.php';
        ?>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-md-5 col-lg-4" >
                <h5 class="text-muted text-end py-3 me-4">Open</h5>
                <div class="status">
                  <div class="row justify-content-evenly">
                    <div class="row align-items-center justify-content-end" >
                        <div class="col-md-6">
                            <label for="inputPassword6" class="col-form-label"><h4>UX/UI Designer</h4></label>
                          </div>
                          <div class="col-md-2 offset-md-2">
                            <div class="form-check form-switch ">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                              </div>
                          </div>
                    </div>

                    <div class="row align-items-center justify-content-end" >
                        <div class="col-md-6 ">
                            <label for="inputPassword6" class="col-form-label"><h4>Programmer</h4></label>
                          </div>
                          <div class="col-md-2 offset-md-2">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                              </div>
                          </div>
                    </div>

                    <div class="row align-items-center justify-content-end" >
                        <div class="col-md-6 ">
                            <label for="inputPassword6" class="col-form-label"><h4>Data analyst</h4></label>
                          </div>
                          <div class="col-md-2 offset-md-2">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                              </div>
                          </div>
                    </div>

                    <div class="row align-items-center justify-content-end" >
                        <div class="col-md-6 ">
                            <label for="inputPassword6" class="col-form-label"><h4>System analyst</h4></label>
                          </div>
                          <div class="col-md-2 offset-md-2">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                              </div>
                          </div>
                    </div>

                    <div class="row align-items-center justify-content-end" >
                        <div class="col-md-6">
                            <label for="inputPassword6" class="col-form-label"><h4>Software tester</h4></label>
                          </div>
                          <div class="col-md-2 offset-md-2">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                              </div>
                          </div>
                    </div>

                    <div class="row align-items-center justify-content-end" >
                        <div class="col-md-6">
                            <label for="inputPassword6" class="col-form-label"><h4>Technical spacialist</h4></label>
                          </div>
                          <div class="col-md-2 offset-md-2">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                              </div>
                          </div>
                    </div>

                    <div class="row align-items-center justify-content-end" >
                        <div class="col-md-6">
                            <label for="inputPassword6" class="col-form-label"><h4>English translator</h4></label>
                          </div>
                          <div class="col-md-2 offset-md-2">
                            <div class="fs-4 form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                              </div>
                          </div>
                    </div>

                    <div class="row align-items-center justify-content-end" >
                        <div class="col-md-6">
                            <label for="inputPassword6" class="col-form-label"><h4>Chinese translator</h4></label>
                          </div>
                          <div class="col-md-2 offset-md-2">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                              </div>
                          </div>
                    </div>
                    <h5 class="text-muted text-end py-3 me-4">Closed</h5>
                    <div class="row align-items-center justify-content-end" >
                      <div class="col-md-6">
                          <label for="inputPassword6" class="col-form-label"><h4>Marketing</h4></label>
                        </div>
                        <div class="col-md-2 offset-md-2">
                          <div class="form-check form-switch ">
                              <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                            </div>
                        </div>
                  </div>
                  <div class="row align-items-center justify-content-end" >
                    <div class="col-md-6">
                        <label for="inputPassword6" class="col-form-label"><h4>Admin</h4></label>
                      </div>
                      <div class="col-md-2 offset-md-2">
                        <div class="form-check form-switch ">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                          </div>
                      </div>
                </div>
                <div class="row align-items-center justify-content-end" >
                  <div class="col-md-6">
                      <label for="inputPassword6" class="col-form-label"><h4>Content craetor</h4></label>
                    </div>
                    <div class="col-md-2 offset-md-2">
                      <div class="form-check form-switch ">
                          <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        </div>
                    </div>
              </div>
            </div>
          </div>
         </div>


            <div class="col-sm-6 col-md-5 offset-md-2 col-lg-8 offset-lg-0" style="background-color: #fff;">
              <div class="information">
                <div class="row justify-content-between">
                  <div class="col-md-7">
                    <h4>UX/UI Designer</h4><br>
                  </div>
                  <div class="col-md-2 ">
                    <a href="jobedit.html" class="btn btn-outline-primary" style="color: #444DDA; border:1px solid #444DDA;">Edit</a>
                  </div>
                </div>

                <h6 class="mb-4">Basic Information</h6>
                <div class="row">
                  <div class="col-md-9">
                    <div class="row mb-3">
                      <div class="col-md-6">
                        <p class="text-muted mb-2">Position name</p>
                        <p class=" mb-0">Ux/UI Designer</p>
                      </div>
                      <div class="col-md-6">
                        <p class="text-muted mb-2">MRT station</p>
                        <p class=" mb-0">Si lom</p>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <div class="col-md-6">
                        <p class="text-muted mb-2">Work type</p>
                        <p class=" mb-0">Work from home</p>
                      </div>
                      <div class="col-md-6">
                        <p class="text-muted mb-2">BTS station</p>
                        <p class=" mb-0">Sala Daeng</p>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <div class="col-md-6">
                        <p class="text-muted mb-2">Staus</p>
                        <p class=" mb-0">Enable</p>
                      </div>
                      <div class="col-md-6">
                        <p class="text-muted mb-2">Location</p>
                        <p class=" mb-0">37 floor,xxx building xxx road, xxxx district,xxx sub-district Bankok,Thailand 10500</p>
                      </div>
                    </div>
                  </div>
                  <hr>

                  <h6 class="mb-4">Test informatin</h6>
                  <div class="col-md-9">
                    <div class="row mb-3">
                      <div class="col-md-6 ">
                        <p class="text-muted mb-2">Test Question</p>
                        <p class=" mb-4">1.Design the dashbord of applications tracking un the sense of applying, rejected, accepted,
                          interview</p>
                          <div class="col-md-6">
                            <p class="text-muted mb-2">Test Period</p>
                            <p class=" mb-0">7 day</p>
                          </div>
                      </div>
                      <div class="col-md-6">
                        <p class="text-muted mb-2">Test assessment criteria</p>
                        <p class=" mb-2">1.Criteria 1</p>
                        <p class=" mb-2">2.Criteria 2</p>
                        <p class=" mb-2">3.Criteria 3</p>
                        <p class=" mb-2">4.Criteria 4</p>
                        <p class=" mb-2">5.Criteria 5</p>
                      </div>
                    </div>
                  </div>
                  <hr>

                  <h6 class="mb-4">Interview information</h6>
                  <div class="col-md-9">
                    <p class="text-muted mb-2">Interview assessment criteria</p>
                        <p class=" mb-2">1.Criteria 1</p>
                        <p class=" mb-2">2.Criteria 2</p>
                        <p class=" mb-2">3.Criteria 3</p>
                        <p class=" mb-2">4.Criteria 4</p>
                        <p class=" mb-2">5.Criteria 5</p>
                      </div>
                  </div>
                </div>
              </div>
            </div>


        </div>
    </div>
</body>
</html>