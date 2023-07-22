<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="form.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
  <script defer src="./script.js"></script>
</head>

<body>
  <div>
    <?php
    require_once '../../Component/Navbar.php';
    ?>
  </div>

  <form id="cratejob">
    <!-- Progress -->
    <div id="form-header" class="form-header d-flex mb-4">
      <span class="stepIndicator">Position information</span>
      <span class="stepIndicator">Test</span>
      <span class="stepIndicator">Interview</span>
    </div>



    <!-- Step 1 -->
    <div id="step1" class="">
      <div class="row d-flex justify-content-center align-items-center ">
        <div class="col-md-6">
          <div class="row align-items-center pt-4 py-2">
            <div class="col-auto col-md-3 ps-5">
              <label for="inputPassword6" class="col-form-label ">Position name</label>
            </div>
            <div class="col-auto col-md-8 pe-5">
              <input type="text" id="posname" name="posname" class="form-control " placeholder="Position Name" aria-describedby="passwordHelpInline">
            </div>
          </div>
          <div class="row align-items-center py-2">
            <div class="col-auto col-md-3 ps-5">
              <label for="inputPassword6" class="col-form-label">Work type</label>
            </div>
            <div class="col-auto col-md-8 pe-5">
              <select id="postype" name="postype" class="form-select">Select you role
                <option value="wfh">WFH</option>
                <option value="hybri">Hybrid</option>
                <option value="onsite">Onsite</option>
              </select>
            </div>
          </div>

          <div class="row align-items-center py-2">
            <div class="col-auto col-md-3 ps-5">
              <label for="inputPassword6" class="col-form-label">Location</label>
            </div>
            <div class="col-auto col-md-8 pe-5">
              <input type="text" id="posloca" name="posloca" class="form-control" placeholder="Location" aria-describedby="passwordHelpInline">
            </div>
          </div>

          <div class="row align-items-center py-2">
            <div class="col-auto col-md-3 ps-5">
              <label for="inputPassword6" class="col-form-label">Near</label>
            </div>
            <div class="col-auto col-md-8 pe-5">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="posmrt" name="posmrt" value="mrt">
                <label class="form-check-label" for="inlineCheckbox1">MRT</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="posbts" name="posbts" value="bts">
                <label class="form-check-label" for="inlineCheckbox2">BTS</label>
              </div>
            </div>
          </div>

          <div class="row align-items-center py-2">
            <div class="col-auto col-md-3 ps-5">
              <label for="inputPassword6" class="col-form-label">Station</label>
            </div>
            <div class="col-auto col-md-8 pe-5">
              <input type="text" id="posstation" name="posstation" class="form-control" placeholder="MRT/BTS station" aria-describedby="passwordHelpInline">
            </div>
          </div>

          <div class="row align-items-center py-2">
            <div class="col-auto col-md-3 ps-5">
              <label for="inputPassword6" class="col-form-label">Start date</label>
            </div>
            <div class="col-auto col-md-8 pe-5">
              <input type="date" id="posstartdate" name="posstartdate" class="form-control" placeholder="Start date" aria-describedby="passwordHelpInline">
            </div>
          </div>
          <div class="row align-items-center py-2">
            <div class="col-auto col-md-3 ps-5">
              <label for="inputPassword6" class="col-form-label">End date</label>
            </div>
            <div class="col-auto col-md-8 pe-5">
              <input type="date" id="posenddate" name="posenddate" class="form-control" placeholder="End date" aria-describedby="passwordHelpInline">
            </div>
          </div>
          <div class="container p-2 d-flex justify-content-end">
            <button class="btn btn-primary" type="button" id="nextBtn" onclick="nextstep()">Next</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Step 2 -->
    <div id="step2">
      <div class="row justify-content-evenly">
        <div class="col-md-5">

          <div class="row align-items-center py-2">
            <div class="col-auto col-md-3 ps-5">
              <label for="input" class="col-form-label">Test require</label>
            </div>
            <div class="col-auto col-md-8 pe-5">
              <div class="fs-5 form-check form-switch">
                <input onchange="show()" class="form-check-input" type="checkbox" id="postestreq" name="postestreq" >
              </div>
            </div>
            <script>
              show();
              function show(){
                if(document.getElementById("postestreq").checked){
                  
                }else{
                }
              }
            </script>
          </div>

          <div class="row align-items-center py-2 reqarea">
            <div class="col-auto col-md-3 ps-5">
              <label for="inputPassword6" class="col-form-label">Test period</label>
            </div>
            <div class="col-auto col-md-8 pe-5">
              <input type="text" id="postestpr" name="postestpr" class="form-control" placeholder="How many days?" aria-describedby="passwordHelpInline">
            </div>
          </div>
          <div class="row align-items-center py-2 reqarea">
            <div class="col-auto col-md-3 ps-5">
              <label for="inputPassword6" class="col-form-label">Test question</label>
            </div>
            <div class="col-auto col-md-8 pe-5">
              <textarea class="form-control" id="postestqt" name="postestqt" rows="4" style="background: #fff;" placeholder="Test question"></textarea>
            </div>
          </div>
        </div>
        <div class="col-md-5 reqarea">
          <div class="row align-items-center py-2">
            <h5 class="align-items-center" style="padding-left: 50px; font-size: 20px; font-weight: 600;">Test assessment criteria(<span id="nctr">1</span>)</h5>
          </div>

          <div class="row align-items-center py-2">
            <div class=" col-md-8 ">
              <label for="inputPassword6" class="col-form-label">criteria</label>
              <input type="text" name="testCtr1" id="testCtr1" class="form-control m-input" placeholder="Enter criteria" autocomplete="off">
            </div>
          </div>
          <div id="newRow"></div>

          <button id="addRow" type="button" class="btn btn-info" style="background-color:#444DDA ; border: 1px solid #444DDA; border-radius: 20px; color: #fff;">
            <i class="bi bi-plus"></i>Add</button>
        </div>

      </div>
      <div class="container p-2 d-flex justify-content-end">
            <button class="btn btn-primary mx-1" type="button" id="nextBtn" onclick="previousstep()">Back</button>
            <button class="btn btn-primary" type="button" id="nextBtn" onclick="nextstep()">Next</button>
          </div>
    </div>

    <!-- step 3 -->
    <div id="step3" class="">
      <div class="row justify-content-center">
        <div class="col-md-5">
          <h5 class="text-cenetr mb-3" style="padding-left: 150px;  font-size: 20px; font-weight: 600;">
            Interview criteria(<span id="nctri">1</span>)
          </h5>
          <div class="row align-items-center py-2">
            <div class=" col-md-8 ">
              <label for="inputPassword6" class="col-form-label">criteria</label>
              <input type="text" name="interCtr1" id="interCtr1" class="form-control m-input" placeholder="Enter criteria" autocomplete="off">
            </div>
          </div>
          <div id="newRow2"></div>

          <button id="addRow2" type="button" class="btn btn-info" style="background-color:#444DDA ; border: 1px solid #444DDA; border-radius: 20px; color: #fff;">
            <i class="bi bi-plus"></i>Add</button>
        </div>
      </div>
      <div class="container p-2 d-flex justify-content-end">
            <button class="btn btn-primary mx-1" type="button" id="nextBtn" onclick="previousstep()">Back</button>
            <button class="btn btn-primary" type="button" id="nextBtn" onclick="nextstep()">Save</button>
          </div>

    </div>



  </form>



</body>

</html>