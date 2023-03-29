<?php 
session_start();
 ?>
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="css/main.css" />
 

    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
    <title>Bestlink College of the Philippines</title>
    <link rel="icon" href="images/logo.png" type="image/png">
  </head>
  <body>
    <div class="loginContainer" >
      <div class="d-lg-flex position-relative">
      <div class="d-flex logoContainer">
          <div class="polygon1 position-relative">
            <img class="logo" src="images/newLogin/logo.png" alt="bcp-logo" />
          </div>
          <div class="polygon2"></div>
        </div>
        <div
          class="form-container d-flex justify-content-center w-100 p-3 p-lg-5" style="height:100vh;"
        >
          <div class="m-auto">
            <div class="form-header1 ps-2 mb-4">
              <h1 class="header1 fw-bold fs-1 m-0">BCP</h1>
              <h1 class="header2 fw-bold fs-1 m-0"> MANAGEMENT INFORMATION SYSTEM </h1>
            </div>

            <?php 
              if(isset($_POST['selectedValue']))  {
                $selectedValue = isset($_POST['selectedValue']) ? $_POST['selectedValue'] : '';
                switch($selectedValue) {
                  case 'Student':
                    include('student/student_login.php');
                    break;
                  case 'Teacher':
                    include('teacher_login.php');
                    break;
                  case 'Employee':
                    include ("accesslevelsuperadmin.php");
                    break;
                  default:
                  echo "<script>alert('Please select a valid option.');</script>";
                }
              }    
           ?>
        
            <form method="POST" action="login.php">
            <!-- Add a hidden input field to store the selected value -->
            <input type="hidden" id="selectedValue" name="selectedValue">
              <label htmlFor="dropdown" class="fw-semibold fs-6 mb-2">
                Select Role:
              </label>
              <div id="dropdown" name="dropdown" class="dropdown">
                <button
                  class="dropdownMenu px-3 fw-normal btn dropdown-toggle w-100 d-flex justify-content-between align-items-center dropDownBorder"
                  type="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                Select
                </button>
                <ul class="dropdown-menu w-100">
                  <li>
                    <button value="Employee" name="Employee" type="button" class="dropdown-item" onClick="handleDropdownClick('Employee')">
                      Employee
                    </button>
                  </li>
                  <li>
                    <button value="Teacher" name="Teacher" type="button" class="dropdown-item" onClick="handleDropdownClick('Teacher')">
                      Teacher
                    </button>
                  </li>
                  <li>
                    <button value="Student" name="Student" type="button" class="dropdown-item" onClick="handleDropdownClick('Student')">
                      Student
                    </button>
                  </li>
                </ul>
              </div>
      
              <span class="loginLineBreak my-4"></span>
              <div class="mb-3">
                <label
                  htmlFor="exampleInputEmail1"
                  class="form-label fw-semibold fs-6"
                >
                  Email
                </label>
                <input
                  type="email"
                  class="inputField input-form form-control px-3 fs-6 fw-normal"
                  id="email" name="email" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..."
                />
              </div>
              <div class="mb-3">
                <label
                  htmlFor="inputPassword"
                  class="form-label fw-semibold fs-6"
                >
                  Password
                </label>
                <div id="login">  
                  <div class="passwordContainer">
                    <input
                      type="password"
                      class="inputField input-form form-control px-3 fs-6 fw-normal"
                      id="password1" name="password" placeholder="Password"
                    />
                    <i class="fa-solid fa-eye-slash" id="passwordIconId"></i>
                  </div>
                </div>
              </div>
             
              <button
                type="submit" name="LOGIN" id="LOGIN"
                class="buttonTemplate sumbit-button btn rounded-2 w-100 mt-3"
              >
                Log in
                <!-- <i class="bx bx-log-in"></i> -->
              </button>
            
              <div class="text-center">
                          
              <a href="forgot_password.php">
                Forgot Password?
              </a>
              </div>
                            
            </form>
          </div>
        </div>
      </div>


    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
    <script>
      let showPassword = document.querySelector("#passwordIconId");
      const passwordField = document.querySelector("#password1");

      showPassword.addEventListener("click", function () {
        this.classList.toggle("fa-eye");

        const type =
          passwordField.getAttribute("type") === "password"
            ? "text"
            : "password";
        passwordField.setAttribute("type", type);
      });
    </script>

<?php 
if(isset($_SESSION['errorlogin']) && $_SESSION['errorlogin']!=''){
  ?>
  <script>
    swal({
      title:"<?php echo $_SESSION['errorlogin']?>",
      icon: "warning",
      button: "Ok",
    });
  </script>
  <?php
  unset($_SESSION['errorlogin']);
}
?>


<?php 
if(isset($_SESSION['successlogin1']) && $_SESSION['successlogin1']!=''){
  ?>
  <script>
    swal({
  title:"<?php echo $_SESSION['successlogin1']?>",
  icon: "success",
  showConfirmButton: false,
  timer: 1500
}).then(function() {
  window.location.href = "user_homepage.php";
});
  </script>
  <?php
  unset($_SESSION['successlogin1']);
}
?>


<?php 
if(isset($_SESSION['successlogin']) && $_SESSION['successlogin']!=''){
  ?>
  <script>
    swal({
  title:"<?php echo $_SESSION['successlogin']?>",
  icon: "success",
  showConfirmButton: false,
  timer: 1500
}).then(function() {
  window.location.href = "admin_dashboard.php";
});
  </script>
  <?php
  unset($_SESSION['successlogin']);
}
?>




  </body>
</html>
