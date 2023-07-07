<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Internship</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="intern.css">
</head>

<body>
  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="img/logo.png" alt="" height="40px" width="272.85711669921875px" class="d-inline-block align-text-top" onclick="window.location.href='index.php'">
      </a>
    </div>
  </nav>

  <form id="signUpForm" action="#!">
    <!--start step indicators-->
    <div class="form-header d-flex mb-4">
      <span class="stepIndicator">Personal information</span>
      <span class="stepIndicator">Contact information</span>
      <span class="stepIndicator">Education information</span>
      <span class="stepIndicator">Document upload</span>
    </div>

    <!--step 1-->
    <div class="step">
      <!--row1-->
      <div class="row mb-3">
        <div class="col">
          <label for="fullname2" class="form-label">Full Name TH</label>
          <input type="text" oninput="this.className = ''" name='fullnameTH' placeholder="Thai name" aria-describedby="fullname2">
        </div>
        <div class="col">
          <label for="nationality" class="form-label">Nationality</label>
          <select class="form-select" name="nationality" aria-label=".form-select-lg example">
            <option value="thai">Thai</option>
            <option value="others">Others</option>
          </select>
        </div>
      </div>


      <!--row2-->
      <div class="row mb-3">
        <div class="col">
          <label for="fullname2" class="form-label">Full Name ENG</label>
          <input type="text" oninput="this.className = ''" class="form-control" name='fullnameENG' placeholder="English name" aria-describedby="fullname2">
        </div>
        <div class="col">
          <label for="pos1" class="form-label">Position 1</label>
          <select class="form-select" name="pos1" aria-label="Default select example">
            <option value="thai"></option>
            <option value="others"></option>
          </select>
        </div>
      </div>
      <!--row3-->
      <div class="row mb-3">
        <div class="col">
          <label for="id" class="form-label">ID/Passport</label>
          <input type="text" oninput="this.className = ''" class="form-control" name='id' placeholder="English name" aria-describedby="id">
        </div>
        <div class="col">
          <label for="pos2" class="form-label">Position 2</label>
          <select class="form-select " name="pos2" aria-label="Default select example">
            <option value="thai"></option>
            <option value="others"></option>
          </select>
        </div>
      </div>

      <!--row4-->
      <div class="row mb-3">
        <div class="col">
          <label for="gender" class="form-label">Gender</label>
          <select class="form-select" name="gender" aria-label="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="others">Others</option>
          </select>
        </div>
        <div class="col">
          <label for="from" class="form-label">From</label>
          <input type="date" oninput="this.className = ''" class="form-control" name="from" placeholder="Intern start date" aria-describedby="id">
        </div>
      </div>

      <!--row5-->
      <div class="row mb-3">
        <div class="col">
          <label for="birthday" class="form-label">Date of Birthday</label>
          <input type="date" oninput="this.className = ''" class="form-control" name='birthday' aria-describedby="birthday">
        </div>
        <div class="col">
          <label for="to" class="form-label">To</label>
          <input type="date" oninput="this.className = ''" class="form-control" name='to' placeholder="Internn end date" aria-describedby="to">
        </div>
      </div>

      <!--row6-->
      <div class="row mb-3">
        <div class="col">
          <label for="religion" class="form-label">Religion</label>
          <select class="form-select" name="religion" aria-label="religion">
            <option value="buddhist">Buddhist</option>
            <option value="others">Others</option>
          </select>
        </div>
        <div class="col">
          <label for="reason" class="form-label">Reason</label>
          <input type="text" oninput="this.className = ''" class="form-control" name="reason" placeholder="Application reason" aria-describedby="to">
        </div>
      </div>
    </div>

    <!--step 2-->
    <div class="step">
      <div class="row mb-3">
        <div class="col">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" oninput="this.className = ''" placeholder="Email" aria-describedby="email">
        </div>
        <div class="col">
          <label for="phone" class="form-label">Phone Number</label>
          <input type="text" name="phone" oninput="this.className = ''" placeholder="Your phone number" aria-describedby="phone">
        </div>
      </div>

      <div class="row mb-3">
        <div class="col">
          <label for="house" class="form-label">House registration address</label>
          <input type="text" name="house" oninput="this.className = ''" placeholder="House registration address" aria-describedby="house">
        </div>
        <div class="col">
          <label for="add" class="form-label">Current address</label>
          <input name="add" type="text" oninput="this.className = ''" placeholder="Current address" aria-describedby="add">
        </div>
      </div>

      <div class="row mb-3">
        <div class="col">
          <label for="cont" class="form-label">Contact person</label>
          <input type="text" name="cont" oninput="this.className = ''" placeholder="Contact person" aria-describedby="cont">
        </div>
        <div class="col">
          <label for="phonecont" class="form-label">Phone Number</label>
          <input name="phonecont" type="text" oninput="this.className = ''" placeholder="Contact person phone number" aria-describedby="phonecont">
        </div>
      </div>
    </div>

    <!--step3-->
    <div class="step">
      <div class="row align-items-center py-3">
        <div class="col-auto col-md-3 ps-5">
          <label for="elevel" class="col-form-label">Education Level</label>
        </div>
        <div class="col-auto col-md-8 pe-5">
          <select name="elevel" class="form-select">Education Level
            <option value="bachelor">Bachelor Degrees</option>
            <option value="master">Master Degrees</option>
            <option value="doctor">Doctoral Degrees</option>
          </select>
        </div>
      </div>
      <div class="row align-items-center py-3">
        <div class="col-auto col-md-3 ps-5">
          <label for="inputuni" class="col-form-label">University</label>
        </div>
        <div class="col-auto col-md-8 pe-5">
          <input type="text" name="inputuni" class="form-control" oninput="this.className = ''" placeholder="University name" aria-describedby="uniHelpInline">
        </div>
      </div>
      <div class="row align-items-center py-3">
        <div class="col-auto col-md-3 ps-5">
          <label for="inputfuc" class="col-form-label">Faculty</label>
        </div>
        <div class="col-auto col-md-8 pe-5">
          <input type="text" name="inputfuc" class="form-control" oninput="this.className = ''" placeholder="Faculty name" aria-describedby="fucHelpInline">
        </div>
      </div>
      <div class="row align-items-center py-3">
        <div class="col-auto col-md-3 ps-5">
          <label for="inputmaj" class="col-form-label">Major</label>
        </div>
        <div class="col-auto col-md-8 pe-5">
          <input type="text" name="inputmaj" class="form-control" oninput="this.className = ''" placeholder="Major name" aria-describedby="majHelpInline">
        </div>
      </div>
      <div class="row align-items-center py-3">
        <div class="col-auto col-md-3 ps-5">
          <label for="years" class="col-form-label">Year</label>
        </div>
        <div class="col-auto col-md-8 pe-5">
          <select name="years" class="form-select">Year
            <option value="one">1</option>
            <option value="two">2</option>
            <option value="three">3</option>
            <option value="four">4</option>
          </select>
        </div>
      </div>
      <div class="row align-items-center py-3">
        <div class="col-auto col-md-3 ps-5">
          <label for="inputgpa" class="col-form-label">GPA</label>
        </div>
        <div class="col-auto col-md-8 pe-5">
          <input type="text" name="inputgpa" class="form-control" oninput="this.className = ''" placeholder="GPA" aria-describedby="gpaHelpInline">
        </div>
      </div>
    </div>

    <!--step4 file-->
    <div class="step">
      <div class="file-upload">
        <div class="row row align-items-center pt-4 pb-3">
          <div class="col-auto col-md-3 ps-5">
            <label for="file-resume"> Resume</label>
          </div>
          <div class="col-auto col-md-8 pe-5">
            <input id="file-resume" name="file-resume" type="file" />
          </div>
        </div>

        <div class="row row align-items-center pt-4 pb-3">
          <div class="col-auto col-md-3 ps-5">
            <label for="file-certi"> Certificate(optional) </label>
          </div>
          <div class="col-auto col-md-8 pe-5">
            <input id="file-certi" name="file-certi" type="file" />
          </div>
        </div>

        <div class="row row align-items-center pt-4 pb-3">
          <div class="col-auto col-md-3 ps-5">
            <label for="file-hr"> House registration </label>
          </div>
          <div class="col-auto col-md-8 pe-5">
            <input id="file-hr" name="file-hr" type="file" />
          </div>
        </div>

        <div class="row row align-items-center pt-4 pb-3">
          <div class="col-auto col-md-3 ps-5">
            <label for="file-idcard"> ID card </label>
          </div>
          <div class="col-auto col-md-8 pe-5">
            <input id="file-idcard" name="file-idcard" type="file" />
          </div>
        </div>

        <div class="row row align-items-center pt-4 pb-3">
          <div class="col-auto col-md-3 ps-5">
            <label for="file-photo"> Photo </label>
          </div>
          <div class="col-auto col-md-8 pe-5">
            <input id="file-photo" name="file-photo" type="file" />
          </div>
        </div>
      </div>
    </div>


    <!-- start previous / next buttons -->
    <div class="form-footer d-flex justify-content-end ">
      <button type="cancel" id="prevBtn" onclick="nextPrev(-1)">Cancel</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>

    </div>
    <!-- end previous / next buttons -->
  </form>

  <script>
    function CreateIntern() {
      saveFilesToLocalStorage()
      console.log(9999)
      var signUpForm = document.getElementById("signUpForm");
      var formData = new FormData(signUpForm);
      for (var i = 0; i < localStorage.length; i++) {
        var key = localStorage.key(i);
        var value = localStorage.getItem(key);
        formData.append(key, value);
      }
      // console.log(formData)
      fetch('./backend/createAccount/createAccount.php', {
          method: 'POST',
          body: formData
        })
        .then(
          response => response.text()
        )
        .then(result => {
          console.log(result);
          window.location.href = 'index.php';
        })
        .catch(error => console.log('Error:', error));
    }

    function saveFilesToLocalStorage() {
      // Retrieve file inputs
      const resumeFileInput = document.getElementById('file-resume');
      const certiFileInput = document.getElementById('file-certi');
      const hrFileInput = document.getElementById('file-hr');
      const idcardFileInput = document.getElementById('file-idcard');
      const photoFileInput = document.getElementById('file-photo');


      // Save file data to local storage
      saveFileToLocalStorage(resumeFileInput, 'resumeData');
      saveFileToLocalStorage(certiFileInput, 'certiData');
      saveFileToLocalStorage(hrFileInput, 'hrData');
      saveFileToLocalStorage(idcardFileInput, 'idcardData');
      saveFileToLocalStorage(photoFileInput, 'photoData');
    }

    function saveFileToLocalStorage(fileInput, storageKey) {
      const file = fileInput.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = (readerEvent) => {
          const base64Data = readerEvent.target.result;
          localStorage.setItem(storageKey, base64Data);
        };
        reader.readAsDataURL(file);
      }
    }


    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
      var x = document.getElementsByClassName("step");
      x[n].style.display = "block";
      if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
        document.getElementById("nextBtn").onclick = CreateIntern;
      } else {
        document.getElementById("nextBtn").innerHTML = "Next";
      }
      //... and run a function that will display the correct step indicator:
      fixStepIndicator(n)
    }

    function nextPrev(n) {
      // This function will figure out which tab to display
      var x = document.getElementsByClassName("step");
      // Exit the function if any field in the current tab is invalid:
      if (n == 1 && !validateForm()) return false;
      // Hide the current tab:
      x[currentTab].style.display = "none";
      // Increase or decrease the current tab by 1:
      currentTab = currentTab + n;
      // if you have reached the end of the form...
      if (currentTab >= x.length) {
        CreateIntern()
        return false;
      }
      // Otherwise, display the correct tab:
      showTab(currentTab);
    }

    function validateForm() {
      var x, y, i, selectElements, valid = true;
      x = document.getElementsByClassName("step");
      y = x[currentTab].querySelectorAll("input, select");
      for (i = 0; i < y.length; i++) {
        if (y[i].value == "") {
          y[i].className += " invalid";
          valid = false;
        }
      }
      if (valid) {
        document.getElementsByClassName("stepIndicator")[currentTab].className += " finish";
        saveToLocalStorage(y);
      }
      return valid; // return the valid status
    }

    function saveToLocalStorage(items) {
      for (var i = 0; i < items.length; i++) {
        localStorage.setItem(items[i].name, items[i].value);
      }
    }



    function fixStepIndicator(n) {
      // This function removes the "active" class of all steps...
      var i, x = document.getElementsByClassName("stepIndicator");
      for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
      }
      //... and adds the "active" class on the current step:
      x[n].className += " active";
    }
  </script>
</body>

</html>