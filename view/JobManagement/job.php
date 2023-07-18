<!DOCTYPE html>
<html lang="en">

<head>
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
      <div class="col-sm-6 col-md-5 col-lg-4">
        <div class="container d-flex justify-content-center">
          <div class="w-100 h2">Positions Lists</div>
        </div>

        <?php
        include '../backend/CreatePosition/FetchPostionList.php';

        if ($result->num_rows > 0) {
          echo '<div class="list-group w-100">';
          while ($row = $result->fetch_assoc()) {
            $status = $row['Enable'] ? 'Opening' : 'Closing';
            $bg = $row['Enable'] ? 'bg-success' : 'bg-danger';
            echo '<a id="posid' . $row['PositionID'] . '" class="list-group-item list-group-item-action cs-p" onclick="selectJob(' . $row['PositionID'] . ')" >';
            echo '<div class="row">';
            echo '<div class="col-9">' . $row["PositionName"] . '</div>';
            echo '<div class="col-3 ' . $bg . ' text-white">' . $status . '</div>';
            echo '</div>';
            echo '</a>';
          }
          echo '</div>';
        } else {
          echo "No positions available";
        }
        ?>




      </div>


      <div class="col-sm-6 col-md-5 offset-md-2 col-lg-8 offset-lg-0" style="background-color: #fff;">
        <div class="information">
          <div class="row justify-content-between">
            <div class="col-md-7">
              <h4 id="pname">UX/UI Designer</h4><br>
            </div>
            <div class="col-md-2">
              <button id="editBtn" class="btn btn-outline-primary" style="color: #444DDA; border:1px solid #444DDA;" onclick="enableEdit()">Edit</button>
            </div>
          </div>

          <h6 class="mb-4">Basic Information</h6>
          <div class="row">
            <div class="col-md-9">
              <div class="row mb-3">
                <div class="col-md-6">
                  <p class="text-muted mb-2">Position name</p>
                  <input id="pname2" class="form-control mb-0" type="text" disabled>
                  <a class="sv btn btn-primary d-none" role="button" onclick="saveData('pname2', 'PositionName')">save</a>
                </div>
                <div class="col-md-6">
                  <p class="text-muted mb-2">MRT station</p>
                  <input id="pmrt" class="form-control mb-0" type="text" disabled>
                  <a class="sv btn btn-primary d-none" role="button" onclick="saveData('pmrt', 'Station')">save</a>

                </div>
              </div>

              <div class="row mb-3">
                <div class="col-md-6">
                  <p class="text-muted mb-2">Work type</p>
                  <input id="pwtype" class="form-control mb-0" type="text" disabled>
                  <a class="sv btn btn-primary d-none" role="button" onclick="saveData('pwtype', 'WorkType')">save</a>

                </div>
                <div class="col-md-6">
                  <p class="text-muted mb-2">BTS station</p>
                  <input id="pbts" class="form-control mb-0" type="text" disabled>
                  <a class="sv btn btn-primary d-none" role="button" onclick="saveData('pbts', 'Station')">save</a>

                </div>
              </div>

              <div class="row mb-3">
                <div class="col-md-6">
                  <p class="text-muted mb-2">Status</p>
                  <input id="pstatus" class="form-control mb-0" type="text" disabled>
                  <a class="sv btn btn-primary d-none" role="button" onclick="saveData('pstatus', 'Enable')">save</a>

                </div>
                <div class="col-md-6">
                  <p class="text-muted mb-2">Location</p>
                  <input id="ploca" class="form-control mb-0" type="text" disabled>
                  <a class="sv btn btn-primary d-none" role="button" onclick="saveData('ploca', 'Location')">save</a>

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
                <textarea id="ptqt" class="form-control mb-4" rows="4" disabled></textarea>
                <a class="sv btn btn-primary d-none" role="button" onclick="saveData('ptqt', 'TestQuestion')">save</a>

                <div class="col-md-6">
                  <p class="text-muted mb-2">Test Period</p>
                  <input id="ptpd" class="form-control mb-0" type="text" disabled>
                  <a class="sv btn btn-primary d-none" role="button" onclick="saveData('ptpd', 'TestPeriod')">save</a>

                </div>
              </div>
              <div class="col-md-6">
                <p class="text-muted mb-2">Test assessment criteria</p>
                <div id="c1" class="mb-4">

                </div>
              </div>
            </div>
          </div>
          <hr>

          <h6 class="mb-4">Interview information</h6>
          <div class="col-md-6">
            <p class="text-muted mb-2">Interview assessment criteria</p>
            <div id="c2" class="mb-4">

            </div>
          </div>
        </div>
      </div>



    </div>


  </div>
  </div>

  <script>
    var pid = 0;

    function selectJob(posid) {
      pid = posid
      fetch(`../backend/CreatePosition/FetchPositionDetail.php?PositionID=${posid}`)
        .then(response => response.json())
        .then(data => {
          console.log(data)
          createC(data.testAssessmentCriteria, "c1")
          createC(data.interviewAssessmentCriteria, "c2")
          document.getElementById("pname").value = data.position.PositionName
          document.getElementById("pname2").value = data.position.PositionName
          document.getElementById("pmrt").value = data.position.Station
          document.getElementById("pwtype").value = data.position.WorkType
          document.getElementById("pbts").value = data.position.Station
          document.getElementById("pstatus").value = data.position.Enable == "0" ? "Closing" : "Openning"
          document.getElementById("ploca").value = data.position.Location
          document.getElementById("ptpd").value = data.position.TestPeriod
          document.getElementById("ptqt").value = data.position.TestQuestion
        })
        .catch(error => console.error('Error:', error));
    }


    function createC(data, t) {
      var n = 1;
      document.getElementById(t).innerHTML = "";
      for (const item of data) {
        document.getElementById(t).innerHTML +=
          `<input class="w-100 border  mb-2" value="${n}. ${item.Criteria}"></input>
          <a class="sv btn btn-primary d-none" role="button" onclick="saveData('5')">save</a>
          `
        n += 1;
      }
    }
  </script>

  <script>
    var fl = true;

    function enableEdit() {
      if (fl) {
        // Enable all input fields
        document.getElementById('pname2').disabled = false;
        document.getElementById('pmrt').disabled = false;
        document.getElementById('pwtype').disabled = false;
        document.getElementById('pbts').disabled = false;
        document.getElementById('pstatus').disabled = false;
        document.getElementById('ploca').disabled = false;
        document.getElementById('ptqt').disabled = false;
        document.getElementById('ptpd').disabled = false;
        const elements = document.getElementsByClassName("sv");
        for (let i = 0; i < elements.length; i++) {
          const element = elements[i];
          element.classList.remove("d-none");
          element.classList.add("d-block");
        }

      } else {
        document.getElementById('pname2').disabled = true;
        document.getElementById('pmrt').disabled = true;
        document.getElementById('pwtype').disabled = true;
        document.getElementById('pbts').disabled = true;
        document.getElementById('pstatus').disabled = true;
        document.getElementById('ploca').disabled = true;
        document.getElementById('ptqt').disabled = true;
        document.getElementById('ptpd').disabled = true;

        const elements = document.getElementsByClassName("sv");
        for (let i = 0; i < elements.length; i++) {
          const element = elements[i];
          element.classList.add("d-none");
          element.classList.remove("d-block");
        }

      }
      fl = !fl
    }

    function saveData(id, column) {
      let value = document.getElementById(id).value;

      // Create form data
      let formData = new FormData();
      formData.append('id', id);
      if (id == "pstatus") {
        value = value == "Openning" ? "1" : "0"
      }
      formData.append('column', column);
      formData.append('value', value);
      formData.append('pid', pid);

      // Send POST request
      fetch('../backend/CreatePosition/UpdatePositionDetail.php', {
          method: 'POST',
          body: formData
        })
        .then(response => response.text())
        .then(response => alert(response))
        .catch(error => console.error('Error:', error));
    }
  </script>
</body>

</html>