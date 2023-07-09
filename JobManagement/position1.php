<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="position.css">
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
      
      <div class="container-fluid" id="main">
        <div class=" dropdown-manu">
            <a class="text-reset me-3 dropdown hidden-arrow" type="button" data-bs-toggle="dropdown" aria-expanded="true" href="#">
              <h3>UX-UI Design</h3>
            </a>
            <ul class="dropdown-menu" >
              <li><a class="dropdown-item" href="#main">Programmer</a></li>
              <li><a class="dropdown-item" href="#main">HR</a></li>
              <li><a class="dropdown-item" href="#main">Software Tester</a></li>
            </ul>
          </div>
        <div class="row justify-content-between">
            <div class="col-md-4">
                <div class="card-profile">
                    <div class="card-header text-white text-end" style=" background: #CB0021;">
                        New
                      </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image"> 
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" width="90" height="90" class="rounded-circle">
                            </div>
                        </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <h4 class="m-t-0 m-b-0"> Deo</h4>
                                <span class="job_post">Ui UX Designer</span>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <a href="#content" class="text-decoration-none me-2">view</a>
                                </div>
                            </div>
                    </div>
                </div>

                <div class="card-profile">
                    <div class="card-header text-white text-end " style="background-color: #9747FF;">
                        Pre-Screen
                      </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image float-md-right"> 
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" width="90" height="90" class="rounded-circle"> 
                              </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h4 class="m-t-0 m-b-0"> Deo</h4>
                            <span class="job_post">Ui UX Designer</span>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="#content" class="text-decoration-none  me-2">view</a>
                            </div>
                        </div>
                            
                        
                    </div>
    
                </div>
                <div class="card-profile">
                    <div class="card-header text-white text-end" style="background-color: #000B84;">
                        Short-list
                      </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image float-md-right"> 
                              <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" width="90" height="90" class="rounded-circle"> 
                            </div>
                        </div> 
                        <div class="col-lg-8 col-md-8 col-12">
                            <h4 class="m-t-0 m-b-0"> Deo</h4>
                            <span class="job_post">Ui UX Designer</span>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="#content" class="text-decoration-none  me-2">view</a>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="card-profile">
                    <div class="card-header text-white text-end " style="background-color: #50C5D9;">
                        Test
                      </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image float-md-right">
                              <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" width="90" height="90" class="rounded-circle"> 
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h4 class="m-t-0 m-b-0"> Deo</h4>
                            <span class="job_post">Ui UX Designer</span>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="#content" class="text-decoration-none  me-2">view</a>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="card-profile">
                    <div class="card-header text-white text-end" style="background-color: #00C29F ;">
                        Scheduled Interview
                      </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image float-md-right"> 
                              <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" width="90" height="90" class="rounded-circle"> 
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h4 class="m-t-0 m-b-0"> Deo</h4>
                            <span class="job_post">Ui UX Designer</span>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="#content" class="text-decoration-none  me-2">view</a>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="card-profile">
                    <div class="card-header text-white text-end" style="background-color: #FBBD41 ;">
                        Interview
                      </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image float-md-right"> 
                              <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" width="90" height="90" class="rounded-circle">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h4 class="m-t-0 m-b-0"> Deo</h4>
                            <span class="job_post">Ui UX Designer</span>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="#content" class="text-decoration-none  me-2">view</a>
                            </div>
                        </div>
                    </div>
                </div>
          
                <div class="card-profile">
                    <div class="card-header text-white text-end" style="background-color: #268B95">
                        Pass
                      </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image float-md-right">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" width="90" height="90" class="rounded-circle">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h4 class="m-t-0 m-b-0"> Deo</h4>
                            <span class="job_post">Ui UX Designer</span>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="#content" class="text-decoration-none  me-2">view</a>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="card-profile">
                    <div class="card-header text-white text-end" style="background-color: #900017;">
                        Fail
                      </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image float-md-right"> 
                              <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" width="90" height="90" class="rounded-circle">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h4 class="m-t-0 m-b-0"> Deo</h4>
                            <span class="job_post">Ui UX Designer</span>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="#content" class="text-decoration-none  me-2">view</a>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="card-profile">
                    <div class="card-header text-white text-end" style="background-color: #444DDA ;">
                        Hire
                      </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image float-md-right"> 
                              <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" width="90" height="90" class="rounded-circle"> 
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h4 class="m-t-0 m-b-0"> Deo</h4>
                            <span class="job_post">Ui UX Designer</span>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="#content" class="text-decoration-none  me-2">view</a>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="card-profile">
                    <div class="card-header text-white text-end" style="background-color: #484554 ;">
                        Hold
                      </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image float-md-right">
                              <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" width="90" height="90" class="rounded-circle"> 
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h4 class="m-t-0 m-b-0"> Deo</h4>
                            <span class="job_post">Ui UX Designer</span>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="#content" class="text-decoration-none  me-2">view</a>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
            
            <div class="col-md-7" id="content">
              <div class="data">
                <div class="emp-profile">
                    <div class="row">
                      <div class="col-md-2">
                          <div class="profile-img">
                              <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" width="90px" height="90px" alt=""/>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="profile-head">
                                      <h5 class="mb-4">
                                          Ploypichcha Anupatanun
                                      </h5>
                                      <h6>UX/UI</h6>
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
                      <h6 ><i class="bi bi-envelope" style="color: #444DDA;"></i> bppjan@gmail.con</h6> 
                    </div>
                    <div class="col-sm-3">
                      <h6 ><i class="bi bi-telephone-fill" style="color: #444DDA;"></i> xxx-xxx-xxxx</h6> 
                    </div>
                    <div class="col-sm-3">
                      <h6 ><i class="bi bi-geo-alt" style="color: #444DDA;"></i> Bankok,Thailand</h6> 
                    </div>
                    <div class="col-sm-3">
                      <h6><i class="bi bi-file-earmark"></i><a href="#" class="text-decoration-none"> document</a> </h6> 
                    </div>
                </div>

                  <div class="tab">
                    <ul class="nav nav-tabs mb-4" id="pills-tab" role="tablist">
                      <li class="nav-item" role="presentation">
                          <a class="nav-link active" id="pills-html-tab" data-bs-toggle="pill" href="#pills-home"
                              role="tab" aria-controls="pills-html" aria-selected="true">Information</a>
                      </li>
                      <li class="nav-item" role="presentation">
                          <a class="nav-link" id="pills-css-tab" data-bs-toggle="pill" href="#pills-test" role="tab"
                              aria-controls="pills-css" aria-selected="false">Test Result</a>
                      </li>
                      <li class="nav-item" role="presentation">
                          <a class="nav-link" id="pills-js-tab" data-bs-toggle="pill" href="#pills-interview" role="tab"
                              aria-controls="pills-js" aria-selected="false">Interview</a>
                      </li>
                      <li class="nav-item" role="presentation">
                          <a class="nav-link" id="pills-js-tab" data-bs-toggle="pill" href="#pills-contract" role="tab"
                              aria-controls="pills-js" aria-selected="false">Contract</a>
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
                                  <textarea class="form-control" id="textAreaExample" rows="4"
                                  style="background: #fff;"></textarea>
                              </div>
                              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-primary" type="submit" style="background-color: #444DDA;"><i class="bi bi-pencil-square"></i></button>
                              </div>
                          </div><!--pane-->

                          <div class="tab-pane fade " id="pills-test" role="tabpanel" aria-labelledby="pills-test-tab">
                            <h5 class="mb-2">Test</h5><br>
                                <div class="col-sm-9 mb-3">
                                    <p class="text-muted mb-0">Test question</p>
                                     <p>Design the dashbord of applications tracking un the sense of applying, rejected, accepted,
                                        interview
                                     </p>
                                </div>
                                <div class="col-sm-5 mb-3 ">
                                        <p class="text-muted mb-0">Test submitted</p>
                                        <a href="#" style="text-decoration-line: underline; font-size: 16px; " class="me-1">
                                          <i class="bi bi-file-earmark" ></i> open submit file</a>
                                </div>
                                    <hr>
                            <h6 class="mb-2" style="font-size: 18px;">Test reult</h6><br>
                            
                              <div class="rating-container">
                                <div class="rating-text">
                                  <p>Topic1</p>
                                </div>
                                <div class="rating">
                                  <form class="rating-form">
                                    <label for="super-happy">
                                  <input type="radio" name="rating" class="super-happy" id="super-happy" value="super-happy"  />
                                  <svg viewBox="0 0 24 24"><path d="M23,10C23,8.89 22.1,8 21,8H14.68L15.64,3.43C15.66,3.33 15.67,3.22 15.67,3.11C15.67,2.7 15.5,2.32 15.23,2.05L14.17,1L7.59,7.58C7.22,7.95 7,8.45 7,9V19A2,2 0 0,0 9,21H18C18.83,21 19.54,20.5 19.84,19.78L22.86,12.73C22.95,12.5 23,12.26 23,12V10M1,21H5V9H1V21Z" /></svg>
                                  </label>
                                    <label for="super-sad">
                                  <input type="radio" name="rating" class="super-sad" id="super-sad" value="super-sad" />
                                  <svg viewBox="0 0 24 24"><path d="M19,15H23V3H19M15,3H6C5.17,3 4.46,3.5 4.16,4.22L1.14,11.27C1.05,11.5 1,11.74 1,12V14A2,2 0 0,0 3,16H9.31L8.36,20.57C8.34,20.67 8.33,20.77 8.33,20.88C8.33,21.3 8.5,21.67 8.77,21.94L9.83,23L16.41,16.41C16.78,16.05 17,15.55 17,15V5C17,3.89 16.1,3 15,3Z" /></svg>
                                  </label><label for="star">
                                    <input type="radio" name="rating" class="star" id="star" value="star" />
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 24 24">
                                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    </label>
                            
                                  </form>
                                </div>
                              </div>
                            
                            
                              <div class="rating-container">
                                <div class="rating-text">
                                  <p>Topic2</p>
                                </div>
                                <div class="rating">
                                  <form class="rating-form">
                                    <label for="super-happy2">
                                  <input type="radio" name="rating2" class="super-happy" id="super-happy2" value="super-happy2"  />
                                  <svg viewBox="0 0 24 24"><path d="M23,10C23,8.89 22.1,8 21,8H14.68L15.64,3.43C15.66,3.33 15.67,3.22 15.67,3.11C15.67,2.7 15.5,2.32 15.23,2.05L14.17,1L7.59,7.58C7.22,7.95 7,8.45 7,9V19A2,2 0 0,0 9,21H18C18.83,21 19.54,20.5 19.84,19.78L22.86,12.73C22.95,12.5 23,12.26 23,12V10M1,21H5V9H1V21Z" /></svg>
                                  </label>
                                    <label for="super-sad2">
                                  <input type="radio" name="rating2" class="super-sad" id="super-sad2" value="super-sad2"  />
                                  <svg viewBox="0 0 24 24"><path d="M19,15H23V3H19M15,3H6C5.17,3 4.46,3.5 4.16,4.22L1.14,11.27C1.05,11.5 1,11.74 1,12V14A2,2 0 0,0 3,16H9.31L8.36,20.57C8.34,20.67 8.33,20.77 8.33,20.88C8.33,21.3 8.5,21.67 8.77,21.94L9.83,23L16.41,16.41C16.78,16.05 17,15.55 17,15V5C17,3.89 16.1,3 15,3Z" /></svg>
                                  </label>
                                  <label for="star2">
                                    <input type="radio" name="rating2" class="star" id="star2" value="star2" />
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 24 24">
                                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    </label>
                            
                                  </form>
                                </div>
                              </div>
                            
                              <div class="rating-container">
                                <div class="rating-text">
                                  <p>Topic3</p>
                                </div>
                                <div class="rating">
                                  <form class="rating-form">
                                    <label for="super-happy3">
                                  <input type="radio" name="rating3" class="super-happy" id="super-happy3" value="super-happy3"  />
                                  <svg viewBox="0 0 24 24"><path d="M23,10C23,8.89 22.1,8 21,8H14.68L15.64,3.43C15.66,3.33 15.67,3.22 15.67,3.11C15.67,2.7 15.5,2.32 15.23,2.05L14.17,1L7.59,7.58C7.22,7.95 7,8.45 7,9V19A2,2 0 0,0 9,21H18C18.83,21 19.54,20.5 19.84,19.78L22.86,12.73C22.95,12.5 23,12.26 23,12V10M1,21H5V9H1V21Z" /></svg>
                                  </label>
                                    <label for="super-sad3">
                                  <input type="radio" name="rating3" class="super-sad" id="super-sad3" value="super-sad3" />
                                  <svg viewBox="0 0 24 24"><path d="M19,15H23V3H19M15,3H6C5.17,3 4.46,3.5 4.16,4.22L1.14,11.27C1.05,11.5 1,11.74 1,12V14A2,2 0 0,0 3,16H9.31L8.36,20.57C8.34,20.67 8.33,20.77 8.33,20.88C8.33,21.3 8.5,21.67 8.77,21.94L9.83,23L16.41,16.41C16.78,16.05 17,15.55 17,15V5C17,3.89 16.1,3 15,3Z" /></svg>
                                  </label>
                                  <label for="star3">
                                    <input type="radio" name="rating3" class="star" id="star3" value="star3" />
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 24 24">
                                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    </label>
                            
                                  </form>
                                </div>
                              </div>
                              <div class="rating-container">
                                <div class="rating-text">
                                  <p>Topic4</p>
                                </div>
                                <div class="rating">
                                  <form class="rating-form">
                                    <label for="super-happy4">
                                  <input type="radio" name="rating4" class="super-happy" id="super-happy4" value="super-happy4"  />
                                  <svg viewBox="0 0 24 24"><path d="M23,10C23,8.89 22.1,8 21,8H14.68L15.64,3.43C15.66,3.33 15.67,3.22 15.67,3.11C15.67,2.7 15.5,2.32 15.23,2.05L14.17,1L7.59,7.58C7.22,7.95 7,8.45 7,9V19A2,2 0 0,0 9,21H18C18.83,21 19.54,20.5 19.84,19.78L22.86,12.73C22.95,12.5 23,12.26 23,12V10M1,21H5V9H1V21Z" /></svg>
                                  </label>
                                    <label for="super-sad4">
                                  <input type="radio" name="rating4" class="super-sad" id="super-sad4" value="super-sad4" />
                                  <svg viewBox="0 0 24 24"><path d="M19,15H23V3H19M15,3H6C5.17,3 4.46,3.5 4.16,4.22L1.14,11.27C1.05,11.5 1,11.74 1,12V14A2,2 0 0,0 3,16H9.31L8.36,20.57C8.34,20.67 8.33,20.77 8.33,20.88C8.33,21.3 8.5,21.67 8.77,21.94L9.83,23L16.41,16.41C16.78,16.05 17,15.55 17,15V5C17,3.89 16.1,3 15,3Z" /></svg>
                                  </label>
                                  <label for="star4">
                                    <input type="radio" name="rating4" class="star" id="star4" value="star4" />
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 24 24">
                                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    </label>
                            
                                  </form>
                                </div>
                              </div>
                              
                              
                                <div class="rating-container">
                                  <div class="rating-text">
                                    <p>Topic5</p>
                                  </div>
                                  <div class="rating">
                                    <form class="rating-form">
                                      <label for="super-happy5">
                                    <input type="radio" name="rating5" class="super-happy" id="super-happy5" value="super-happy5"  />
                                    <svg viewBox="0 0 24 24"><path d="M23,10C23,8.89 22.1,8 21,8H14.68L15.64,3.43C15.66,3.33 15.67,3.22 15.67,3.11C15.67,2.7 15.5,2.32 15.23,2.05L14.17,1L7.59,7.58C7.22,7.95 7,8.45 7,9V19A2,2 0 0,0 9,21H18C18.83,21 19.54,20.5 19.84,19.78L22.86,12.73C22.95,12.5 23,12.26 23,12V10M1,21H5V9H1V21Z" /></svg>
                                    </label>
                                      <label for="super-sad5">
                                    <input type="radio" name="rating5" class="super-sad" id="super-sad5" value="super-sad5" />
                                    <svg viewBox="0 0 24 24"><path d="M19,15H23V3H19M15,3H6C5.17,3 4.46,3.5 4.16,4.22L1.14,11.27C1.05,11.5 1,11.74 1,12V14A2,2 0 0,0 3,16H9.31L8.36,20.57C8.34,20.67 8.33,20.77 8.33,20.88C8.33,21.3 8.5,21.67 8.77,21.94L9.83,23L16.41,16.41C16.78,16.05 17,15.55 17,15V5C17,3.89 16.1,3 15,3Z" /></svg>
                                    </label>
                                    <label for="star5">
                                      <input type="radio" name="rating5" class="star" id="star5" value="star5" />
                                      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 24 24">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                      </svg>
                                      </label>
                              
                                    </form>
                                  </div>
                                </div>
                              
                            <hr>
                            <div class="form-outline w-100 mb-3">
                                <label class="form-label" for="textAreaExample">Note</label>
                                <textarea class="form-control" id="textAreaExample" rows="4"
                                style="background: #fff;"></textarea>
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
                                            <input type="text" name="inp" class="form-control">  
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
                                                <input type="text" name="con" class="form-control" >
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
                                <div class="d-grid d-md-flex justify-content-md-end ">
                                  <a href="#" class="btn btn-primary " style="color: #fff; background-color: #444DDA;">save</a>
                                </div>
                                </div>
                            </div>
                        </div><!--pane-->   
                    </div><!--tab-content-->
                  </div><!--tab-->
                </div>
              </div><!--md8-->
            
                
          </div><!--row-->
      </div><!--container-->

      

      
</body>
</html>