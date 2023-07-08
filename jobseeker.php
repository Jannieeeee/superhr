<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Job seeker</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="jobseeker.css">
</head>

<body>
  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="img/logo.png" alt="" height="40px" width="272.85711669921875px" class="d-inline-block align-text-top" onclick="window.location.href='index.php'">
      </a>
    </div>
  </nav>




  <form action="" method="POST" id="signUpForm">
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
          <input type="text" oninput="this.className = ''" class="form-control" name='fullnameTH' placeholder="Thai name" aria-describedby="fullname2">
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
          <label for="nationality" class="form-label">Position 1</label>
          <select class="form-select" name="nationality" aria-label="Default select example">
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
          <label for="id" class="form-label">Expected salary</label>
          <input type="text" oninput="this.className = ''" class="form-control" name='salary' placeholder="Expected salary" aria-describedby="id">
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
          <label for="area" class="form-label">Comfort area</label>
          <select class="form-select" name="area" aria-label="area">
            <option value="area">Select by area</option>
            <option value="bts">Select by BTS station range</option>
            <option value="mrt">Select by MRT station range</option>
          </select>
        </div>
      </div>

      <!--row5-->
      <div class="row mb-3">
        <div class="col">
          <label for="birthday" class="form-label">Date of Birthday</label>
          <input type="date" oninput="this.className = ''" class="form-control" name='birthday' aria-describedby="birthday">
        </div>
        <div class="col">
          <label for="from" class="form-label">From</label>
          <input type="text" oninput="this.className = ''" class="form-control" name='areafrom' placeholder="BTS/MRT station name selector" aria-describedby="from">
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
          <label for="areato" class="form-label">To</label>
          <input type="text" oninput="this.className = ''" class="form-control" name='areato' placeholder="BTS/MRT station name selector" aria-describedby="to">
        </div>
      </div>
    </div>


    <div class="step">

      <div class="row align-items-center pt-4 pb-3">
        <div class="col-auto col-md-3 ps-5">
          <label for="phone" class="col-form-label">Phone Number</label>
        </div>
        <div class="col-auto col-md-8 pe-5">
          <input type="text" id="inputPassword6" class="form-control" name='phone' placeholder="PhoneNumber" aria-describedby="passwordHelpInline">
        </div>
      </div>
      <div class="row align-items-center py-3">
        <div class="col-auto col-md-3 ps-5">
          <label for="email" class="col-form-label">Email</label>
        </div>
        <div class="col-auto col-md-8 pe-5">
          <input type="email" id="inputPassword6" class="form-control" name='email' placeholder="Email" aria-describedby="passwordHelpInline">
        </div>
      </div>

      <div class="row align-items-center py-3">
        <div class="col-auto col-md-3 ps-5">
          <label for="inputPassword6" class="col-form-label">House registration address</label>
        </div>
        <div class="col-auto col-md-8 pe-5">
          <input type="text" id="inputPassword6" class="form-control" name='house' placeholder="House registration address" aria-describedby="passwordHelpInline">
        </div>
      </div>
      <div class="row align-items-center py-3">
        <div class="col-auto col-md-3 ps-5">
          <label for="inputPassword6" class="col-form-label">Current address</label>
        </div>
        <div class="col-auto col-md-8 pe-5">
          <input type="text" id="inputPassword6" class="form-control" name='add' placeholder="Current address" aria-describedby="passwordHelpInline">
        </div>
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
          <input type="text" name="inputuni" class="form-control" name='inputuni' oninput="this.className = ''" placeholder="University name" aria-describedby="uniHelpInline">
        </div>
      </div>
      <div class="row align-items-center py-3">
        <div class="col-auto col-md-3 ps-5">
          <label for="inputfuc" class="col-form-label">Faculty</label>
        </div>
        <div class="col-auto col-md-8 pe-5">
          <input type="text" name="inputfuc" class="form-control" name='inputfuc' oninput="this.className = ''" placeholder="Faculty name" aria-describedby="fucHelpInline">
        </div>
      </div>
      <div class="row align-items-center py-3">
        <div class="col-auto col-md-3 ps-5">
          <label for="inputmaj" class="col-form-label">Major</label>
        </div>
        <div class="col-auto col-md-8 pe-5">
          <input type="text" name="inputmaj" class="form-control" name='inputmaj' oninput="this.className = ''" placeholder="Major name" aria-describedby="majHelpInline">
        </div>
      </div>
      <div class="row align-items-center py-3">
        <div class="col-auto col-md-3 ps-5">
          <label for="gpa" class="col-form-label">GPA</label>
        </div>
        <div class="col-auto col-md-8 pe-5">
          <input type="text" name="inputgpa" class="form-control" name='gpa' oninput="this.className = ''" placeholder="GPA" aria-describedby="gpaHelpInline">
        </div>
      </div>
    </div>

    <!--step4 file-->
    <div class="step">
              <div class="file-upload">
                <div class="row row align-items-center  justify-content-between">
                  <div class="col-auto col-md-4">
                      <label for="file-input mb-3"> Resume</label>
                    </div>
                    <div class="col-auto col-md-6">
                      <input id="file-input" type="file"/>
                    </div>
              </div>

              <div class="row row align-items-center  justify-content-between">
                <div class="col-auto col-md-4">
                    <label for="file-input mb-3">Cartificate(optional)</label>
                  </div>
                  <div class="col-auto col-md-6">
                    <input id="file-input" type="file"/>
                  </div>
            </div>

            <div class="row row align-items-center  justify-content-between">
              <div class="col-auto col-md-4">
                  <label for="file-input mb-3"> House registration </label>
                </div>
                <div class="col-auto col-md-6">
                  <input id="file-input" type="file"/>
                </div>
          </div>

          <div class="row row align-items-center  justify-content-between">
            <div class="col-auto col-md-4">
                <label for="file-input mb-3"> ID card</label>
              </div>
              <div class="col-auto col-md-6">
                <input id="file-input" type="file"/>
              </div>
          </div>

          <div class="row row align-items-center  justify-content-between">
            <div class="col-auto col-md-4">
                <label for="file-input mb-3"> Photo</label>
              </div>
              <div class="col-auto col-md-6">
                <input id="file-input" type="file"/>
              </div>
          </div>
        </div>
      </div>
    <!-- start previous / next buttons -->
    <div class="form-footer d-flex justify-content-end ">
      <a href="account.php" role="button" class="btn btn-outline-primary" id="prevBtn">Cancel</a>
      <a onclick="nextPrev(1)" role="button" class="btn btn-outline-primary" style="background-color: #444DDA; color: #ffffff;" id="nextBtn">Cancel</a>
    </div>
    <!-- end previous / next buttons -->
  </form>

  <script>
    function CreateJobSeeker() {
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
      fetch('./backend/createAccount/createAccountJob.php', {
          method: 'POST',
          body: formData
        })
        .then(
          response => response.text()
        )
        .then(result => {
          console.log(result);
          window.location.href = 'redirect.php';
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
      // This function will display the specified tab of the form...
      var x = document.getElementsByClassName("step");
      x[n].style.display = "block";
      if (n == 0) {
        document.getElementById("prevBtn").innerHTML = "Cancle";
      } else {
        document.getElementById("prevBtn").innerHTML = "Back";
      }

      if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
        document.getElementById("nextBtn").onclick = CreateJobSeeker;
      } else {
        document.getElementById("nextBtn").innerHTML = "Next";
      }
      //... and run a function that will display the correct step indicator:
      fixStepIndicator(n)
    }

    function validateIDPassport() {
      var idPassport = document.getElementsByName('id' && 'salary')[0].value;
      var pattern = /^[0-9]+$/;
      if (!pattern.test(idPassport)) {
        alert('ID/Passport or Expexted Salary should contain only numeric digits.');
        return false;
      }
      return true;
    }

    function validatePhoneNumber() {
      var phoneNum = document.getElementsByName('phone')[0].value;
      var pattern = /^[0-9]+$/;
      if (!pattern.test(phoneNum)) {
        alert('Phone Number or Phone Number Contact Person should contain only numeric digits.');
        return false;
      }
      return true;
    }

    function validateGPA() {
      var GPA = document.getElementsByName('inputgpa')[0].value;
      var pattern = /^[0-9]+$/;
      if (!pattern.test(GPA)) {
        alert('GPA should contain only numeric digits.');
        return false;
      }
      return true;
    }

    function nextPrev(n) {
      var x = document.getElementsByClassName("step");

      if (currentTab == 0) {
        var isIDPassportValid = validateIDPassport();
        if (!isIDPassportValid) {
          return;
        }
      } else if (currentTab == 1) {
        var isPhoneNumberValid = validatePhoneNumber();
        if (!isPhoneNumberValid) {
          return;
        }
      } else if (currentTab == 2) {
        var isGPAValid = validateGPA();
        if (!isGPAValid) {
          return;
        }
      }

      if (n == 1 && !validateForm()) {
        return false;
      }

      x[currentTab].style.display = "none";
      currentTab = currentTab + n;

      if (currentTab >= x.length) {
        CreateIntern();
        return false;
      }

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