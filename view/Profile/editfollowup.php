<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="followup.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

</head>
<body>
    <nav class="navbar navbar-light bg-white">
        <div class="container-fluid">
            <div class="row d-flex align-items-center">
                        <div class="col-md-3">
                          <a class="navbar-brand" href="#">
                            <img src="C:\Users\malli\Documents\internship\img\unnamed.png" alt="" height="40px" width= "272.85711669921875px" class="d-inline-block align-text-top">
                          </a>
                        </div>
                </div>
          <div class="d-flex align-items-center">
            <a  href="#" class="text-decoration-none text-reset me-2">username  
              <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" height="40"/>
            </a>
            <div class="dropdown">
              <a
              class="text-reset me-1 dropdown hidden-arrow"
              type="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
            <i class=" fs-4 bi bi-bell bi-lg text-dark"></i>
              
            </a>
            <ul
              class="dropdown-menu dropdown-menu-end"
            >
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
          <!-- Avatar -->
          <div class="dropdown">
              <a
                class="text-reset me-2 dropdown hidden-arrow"
                type="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="fs-4 bi bi-three-dots-vertical bi-lg text-dark"></i>
              </a>
              <ul class="dropdown-menu" >
                <li><a class="dropdown-item" href="#"> <i class="fas fa-user-alt pe-2"></i>My Profile</a></li>
                <li><a class="dropdown-item" href="#"> <i class="fas fa-cog pe-2"></i>Settings</a></li>
                <li><a class="dropdown-item" href="#"> <i class="fas fa-door-open pe-2"></i>Logout</a></li>
              </ul>
            </div>
        </div>
      </div>
    </nav>

    <button type="button" class="btn-close me-5 mb-4" aria-label="Close" 
    onclick="window.location.href = 'position.html';" style="float: right; padding-top: 50px;"></button>
    <div class="container emp-profile">

        <div class="row">
            <div class="col-md-2">
                <div class="profile-img">
                    <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" alt=""/>
                </div>
            </div>
            <div class="col-md-8">
                <div class="profile-head">
                            <h4 class="mb-4">
                                Ploypichcha Anupatanun
                            </h4>
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
            </div>
        </div>
        
    </div>

    <div class="container-data">
        <div class="row justify-content-evenly ">
            <div class="row"  style="padding-left: 180px;">
                <div class="col-sm-3 mb-3">
                    <h4 >Personal Information</h4>
                </div>
                <div class="col-sm-3 " style="padding-left: 800px;">
                    <button type="button" class="btn btn-primary "  onclick="window.location.href = 'followup.html';"
                    style=" border: 1px solid #444DDA; background-color:#444DDA;  ">save</button>
                </div>
            </div>
                
                <div class="row" style="padding-left: 180px; ">
                    <div class="col-md-6">
                        <div class="row mb-3 align-items-center">
                            <div class="col-sm-3">
                              <p class="text-muted mb-0 ">Full name</p>
                            </div>
                            <div class="col-md-7">
                              <input type="text" name="name" id="name" class="form-control">
                            </div>
                          </div>
                          <div class="row mb-3 align-items-center">
                            <div class="col-sm-3">
                              <p class="text-muted mb-0 ">Username</p>
                            </div>
                            <div class="col-md-7">
                              <input type="text" name="user" id="user" class="form-control">
                            </div>
                          </div>
                          <div class="row mb-3 align-items-center">
                            <div class="col-sm-3 ">
                              <p class="text-muted mb-0 ">Email</p>
                            </div>
                            <div class="col-md-7">
                              <input type="email" name="email" id="email" class="form-control">
                            </div>
                          </div>
                          <div class="row mb-3 align-items-center">
                            <div class="col-sm-3 ">
                              <p class="text-muted mb-0 ">Phone Number</p>
                            </div>
                            <div class="col-md-7">
                              <input type="text" name="phone" id="phone" class="form-control">
                            </div>
                          </div>

                          <div class="row mb-3 align-items-center">
                            <div class="col-sm-3 ">
                              <p class="text-muted mb-0 ">Photo</p>
                            </div>
                            <div class="col-md-7">
                                <input id="file-input" type="file"/>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row mb-3 align-items-center">
                            <div class="col-sm-3 ">
                              <p class="text-muted mb-0 ">Gender</p>
                            </div>
                            <div class="col-sm-7">
                              <select name="gender" id="gender" class="form-control">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Others</option>
                              </select>
                            </div>
                          </div>
                          <div class="row mb-3 align-items-center">
                            <div class="col-sm-3 ">
                              <p class="text-muted mb-0 ">Date of birth</p>
                            </div>
                            <div class="col-md-7">
                              <input type="date" name="date" id="date" class="form-control">
                            </div>
                          </div>
                          <div class="row mb-3 align-items-center">
                            <div class="col-sm-3 ">
                              <p class="text-muted mb-0 ">ID / Passport</p>
                            </div>
                            <div class="col-md-7">
                              <input type="text" name="idcard" id="idcard" class="form-control">
                            </div>
                          </div>
                          <div class="row mb-3 align-items-center">
                            <div class="col-sm-3">
                              <p class="text-muted mb-0 ">Nationality</p>
                            </div>
                            <div class="col-md-7">
                                <select name="nation" id="nation" class="form-control">
                                    <option value="Thai">Thai</option>
                                    <option value="other">Others</option>
                                  </select>                     
                            </div>
                          </div>
                          <div class="row mb-3 align-items-center">
                            <div class="col-sm-3 ">
                              <p class="text-muted mb-0 ">Religion</p>
                            </div>
                            <div class="col-md-7">
                                <select name="religion" id="religion" class="form-control">
                                    <option value="buddhism">Buddhist</option>
                                    <option value="other">Others</option>
                                  </select>                     
                            </div>
                          </div>
                    </div>
                </div>
        </div>
    </div>


</body>
</html>