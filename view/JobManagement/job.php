<!DOCTYPE html>
<html lang="en">
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
  </symbol>
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
  </symbol>
</svg>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="job.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
</head>
<style>
  .cs-p {
    cursor: pointer;
  }
</style>

<body>
  <div>
    <?php
    require_once '../../Component/Navbar.php';
    ?>
  </div>


  <div class="container-fluid">

    <div class="row">
      <div class="col-sm-6 col-md-5 col-lg-4 bg-white">
        <div class="my-2">
          <div class="input-group">
            <input type="text" id="searchTerm" class="form-control" placeholder="Search..." aria-label="Search">
            <button class="btn btn-outline-secondary" type="button" onclick="searchPositionAll()">
              <i class="fas fa-search"></i>
            </button>

          </div>
        </div>

        <div class="btn-group w-100 my-1">
          <button id="openButton" class="btn btn-outline-primary" onclick="searchPosition('Opening')">Opening</button>
          <button id="closeButton" class="btn btn-outline-secondary" onclick="searchPosition('Closing')">Closing</button>
        </div>


        <div id="toggleDiv1" style="display: block;">
          <?php
          include '../../backend/CreatePosition/FetchPostionList.php';

          if ($result->num_rows > 0) {
            echo '<div class="list-group w-100">';
            while ($row = $result->fetch_assoc()) {
              $status = $row['Enable'] ? 'Opening' : 'Closing';
              if ($status == 'Closing') {
                continue;
              }
              $bg = $row['Enable'] ? 'bg-success' : 'bg-danger';
              echo '<a id="posid' . $row['PositionID'] . '" class="list-group-item list-group-item-action cs-p" onclick="selectJob(' . $row['PositionID'] . ')" >';
              echo '<div class="card">';
              echo '<div class="card-body">';
              echo '<h5 class="card-title">' . $row['PositionName'] . '</h5>';
              echo '<h6 class="card-subtitle mb-2 text-muted">loremd 1 person</h6>';
              echo '</div>';
              echo '<div class="card-footer text-end">';
              echo '<i class="bi bi-arrow-right"></i>';
              echo '</div>';
              echo '</div>';


              echo '</a>';
            }
            echo '</div>';
          } else {
            echo "No positions available";
          }
          ?>

        </div>

        <div id="toggleDiv2" style="display: none;">
          <?php
          include '../../backend/CreatePosition/FetchPostionList.php';

          if ($result->num_rows > 0) {
            echo '<div class="list-group w-100">';
            while ($row = $result->fetch_assoc()) {
              $status = $row['Enable'] ? 'Opening' : 'Closing';
              if ($status == 'Opening') {
                continue;
              }
              $bg = $row['Enable'] ? 'bg-success' : 'bg-danger';
              echo '<a id="posid' . $row['PositionID'] . '" class="list-group-item list-group-item-action cs-p" onclick="selectJob(' . $row['PositionID'] . ')" >';
              echo '<div class="card">';
              echo '<div class="card-body">';
              echo '<h5 class="card-title">' . $row['PositionName'] . '</h5>';
              echo '<h6 class="card-subtitle mb-2 text-muted">loremd 1 person</h6>';
              echo '</div>';
              echo '<div class="card-footer text-end">';
              echo '<i class="bi bi-arrow-right"></i>';
              echo '</div>';
              echo '</div>';


              echo '</a>';
            }
            echo '</div>';
          } else {
            echo "No positions available";
          }
          ?>

        </div>





      </div>


      <div class="col-sm-6 col-md-5 offset-md-2 col-lg-8 offset-lg-0" style="background-color: #fff;">

        <div id="vmode" class="alert alert-primary d-flex align-items-center " role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
            <use xlink:href="#info-fill" />
          </svg>
          <div>
            You are in view mode!
          </div>
        </div>

        <div id="emode" class="alert alert-warning d-flex align-items-center d-none" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:">
            <use xlink:href="#exclamation-triangle-fill" />
          </svg>
          <div>
            You are in edit mode!
          </div>
        </div>

        <div class="information">
          <div class="row justify-content-between">
            <div class="col-md-7">
              <h4 id="pname">UX/UI Designer</h4><br>
            </div>
            <div class="col-md-2">
              <button id="editBtn" class="btn btn-outline-primary" style="color: #444DDA; border:1px solid #444DDA;" onclick="enableEdit()"><span id="edittxt">Edit</span></button>
            </div>
          </div>

          <h6 class="mb-4">Basic Information</h6>
          <div class="row">
            <div class="col-md-9">
              <div class="row mb-3">
                <div class="col-md-6">
                  <p class="text-muted mb-2">Position name</p>

                  <div class="input-group mb-3">
                    <input id="pname2" class="form-control mb-0" type="text" disabled>
                    <button class="sv btn btn-outline-success d-none" type="button" onclick="saveData('pname2', 'PositionName')" data-bs-toggle="tooltip" data-bs-placement="top" title="Save">
                      <i class=" bi bi-check-circle"></i>
                    </button>
                  </div>

                </div>
                <div class="col-md-6">
                  <p class="text-muted mb-2">MRT station</p>

                  <div class="input-group mb-3">
                    <input id="pmrt" class="form-control mb-0" type="text" disabled>
                    <button class="sv btn btn-outline-success d-none" type="button" onclick="saveData('pmrt', 'Station')" data-bs-toggle="tooltip" data-bs-placement="top" title="Save">
                      <i class=" bi bi-check-circle"></i>
                    </button>
                  </div>

                </div>
              </div>

              <div class="row mb-3">
                <div class="col-md-6">
                  <p class="text-muted mb-2">Work type</p>
                  <div class="input-group mb-3">

                    <select id="pwtype" class="form-control mb-0" disabled>
                      <option value="wfh">WFH</option>
                      <option value="hybrid">Hybrid</option>
                      <option value="onsite">Onsite</option>
                    </select>

                    <button class="sv btn btn-outline-success d-none" type="button" onclick="saveData('pwtype', 'WorkType')" data-bs-toggle="tooltip" data-bs-placement="top" title="Save">
                      <i class=" bi bi-check-circle"></i>
                    </button>
                  </div>
                </div>
                <div class="col-md-6">
                  <p class="text-muted mb-2">BTS station</p>
                  <div class="input-group mb-3">
                    <input id="pbts" class="form-control mb-0" type="text" disabled>
                    <button class="sv btn btn-outline-success d-none" type="button" onclick="saveData('pbts', 'Station')" data-bs-toggle="tooltip" data-bs-placement="top" title="Save">
                      <i class=" bi bi-check-circle"></i>
                    </button>
                  </div>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-md-6">
                  <p class="text-muted mb-2">Status</p>

                  <div class="input-group mb-3">
                    <select id="pstatus" class="form-control mb-0" disabled>
                      <option value="Opening">Opening</option>
                      <option value="Closing">Closing</option>
                    </select>
                    <button class="sv btn btn-outline-success d-none" type="button" onclick="saveData('pstatus', 'Enable')" data-bs-toggle="tooltip" data-bs-placement="top" title="Save">
                      <i class="bi bi-check-circle"></i>
                    </button>
                  </div>


                </div>
                <div class="col-md-6">
                  <p class="text-muted mb-2">Location</p>
                  <div class="input-group mb-3">
                    <input id="ploca" class="form-control mb-0" type="text" disabled>
                    <button class="sv btn btn-outline-success d-none" type="button" onclick="saveData('ploca', 'Location')" data-bs-toggle="tooltip" data-bs-placement="top" title="Save">
                      <i class=" bi bi-check-circle"></i>
                    </button>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <hr>

          <h6 class="mb-4">Test information</h6>
          <div class="col-md-9">
            <div class="row mb-3">
              <div class="col-md-6">
                <p class="text-muted mb-2">Test Question</p>

                <div class="input-group mb-3">
                  <textarea id="ptqt" class="form-control" rows="4" disabled></textarea>
                  <div class="input-group-append">
                    <button class="sv btn btn-outline-success d-none" type="button" onclick="saveData('ptqt', 'TestQuestion')" data-bs-toggle="tooltip" data-bs-placement="top" title="Save">
                      <i class="bi bi-check-circle"></i>
                    </button>
                  </div>
                </div>


                <div class="col-md-6">
                  <p class="text-muted mb-2">Test Period</p>

                  <div class="input-group mb-3">
                    <input id="ptpd" class="form-control mb-0" type="text" disabled>
                    <button class="sv btn btn-outline-success d-none" type="button" onclick="saveData('ptpd', 'TestPeriod')" data-bs-toggle="tooltip" data-bs-placement="top" title="Save">
                      <i class=" bi bi-check-circle"></i>
                    </button>
                  </div>

                </div>
              </div>
              <div class="col-md-6">

                <div class="input-group">
                  <p class="text-muted mb-2">Test assessment criteria</p>
                  <i class="sv d-none bi bi-plus-circle btn-outline-info rounded-circle mx-2 cs-p" onclick="addTest()"></i>
                </div>

                <div id="c1" class="mb-4">

                </div>
              </div>
            </div>
          </div>
          <hr>

          <h6 class="mb-4">Interview information</h6>
          <div class="col-md-6">
            <div class="input-group">
              <p class="text-muted mb-2">Interview assessment criteria</p>
              <i class="sv d-none bi bi-plus-circle btn-outline-info rounded-circle mx-2" onclick="addInterview()"></i>
            </div>
            <div id="c2" class="mb-4">

            </div>
          </div>

        </div>
      </div>



    </div>


  </div>
  </div>

</body>
<script>
  $(document).ready(function() {
    $("#openButton").click(function() {
      $("#toggleDiv1").show();
      $("#toggleDiv2").hide();
    });
    $("#closeButton").click(function() {
      $("#toggleDiv1").hide();
      $("#toggleDiv2").show();

    });
  });
</script>
<script async src="./script.js"></script>

</html>