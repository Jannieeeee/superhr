<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Candidate</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<style>
  .fieldinput {
    padding: 0.5rem;
    width: 300px;
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
  <div class="p-4">
    <div id="edital" class="alert alert-warning d-none" role="alert">
      You are in edit mode.
    </div>
    <div id="viewal" class="alert alert-info d-block" role="alert">
      You are in view mode.
    </div>

  </div>

  <div class="container mt-2 mb-2">
    <h2 class="fw-bolder mb-4">Personal Information</h2>
    <div class="d-flex justify-content-end">
      <div class="btn-group">
        <button name="" id="" class="btn btn-primary" onclick="toggleEdit()" role="button">Edit</button>
        <button name="" id="svbtn" class="btn btn-success d-none" onclick="SaveData()" role="button">Save</button>
      </div>
    </div>
    <hr class="my-4">
    <div class="row">
      <div class="col-md-2">
        <div class="profile-img">
          <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" width="80" height="80" alt="" />
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
            <h6><i class="bi bi-envelope" style="color: #444DDA;"></i> <span id="email">bppjan@gmail.con</span> </h6>
          </div>
          <div class="col-sm-3">
            <h6><i class="bi bi-telephone-fill" style="color: #444DDA;"></i> <span id="tel">xxx-xxx-xxxx</span></h6>
          </div>
        </div>
      </div>
    </div>
    <hr class="">
  </div>

  <div class="container">
    <div class="row p-2">
      <div class="col-6">

        <div class="row my-4">
          <div class="col-4">
            <h5>Thai fullname</h5>
          </div>
          <div class="col-8"><input id="thfullname" class="fieldinput" value="จอน โด"></input></div>
        </div>
        <div class="row my-4">
          <div class="col-4">
            <h5>English fullname</h5>
          </div>
          <div class="col-8"><input id="enfullname" class="fieldinput" value="John Doe"></input></div>
        </div>
        <div class="row my-4">
          <div class="col-4">
            <h5>Gender</h5>
          </div>
          <div class="col-8"><input id="gender" class="fieldinput" value="Male"></input></div>
        </div>
        <div class="row my-4">
          <div class="col-4">
            <h5>Birthday</h5>
          </div>
          <div class="col-8"><input id="bod" class="fieldinput" value="09-01-1999"></input></div>
        </div>
        <div class="row my-4">
          <div class="col-4">
            <h5>Age</h5>
          </div>
          <div class="col-8">
            <p id="age" class="fieldinput">20</p>
          </div>
        </div>

      </div>
      <div class="col-6">

        <div class="row my-4">
          <div class="col-4">
            <h5>Citizen ID</h5>
          </div>
          <div class="col-8"><input id="ctID" class="fieldinput" value="000-000-000"></input></div>
        </div>
        <div class="row my-4">
          <div class="col-4">
            <h5>Passport ID</h5>
          </div>
          <div class="col-8"><input id="ptID" class="fieldinput" value="11-111-111"></input></div>
        </div>
        <div class="row my-4">
          <div class="col-4">
            <h5>National</h5>
          </div>
          <div class="col-8"><input id="national" class="fieldinput" value="Thai"></input></div>
        </div>
        <div class="row my-4">
          <div class="col-4">
            <h5>Religion</h5>
          </div>
          <div class="col-8"><input id="religion" class="fieldinput" value="Buddlism"></input></div>
        </div>
        <div class="row my-4">
          <div class="col-4">
            <h5>Address</h5>
          </div>
          <div class="col-8"><textarea rows="4" id="address" class="fieldinput">Bkk/01</textarea></div>
        </div>

      </div>
    </div>
  </div>


</body>
<script defer src="./script.js"></script>

</html>