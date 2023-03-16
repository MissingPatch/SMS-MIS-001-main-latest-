<?php 
session_start();
include ("accesslevelsuperadmin.php");

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
    <title>Management Information System</title>
    <link rel="icon" href="images/logo.png" type="image/png">
  </head>
  <body>
    <div class="loginContainer">
      <div class="d-lg-flex position-relative">
        <div class="d-flex logoContainer">
          <div class="polygon1 position-relative">
            <img class="logo" src="images/newLogin/logo.png" alt="bcp-logo" />
          </div>
          <div class="polygon2"></div>
        </div>
        <div
          class="form-container d-flex justify-content-center w-100 p-3 p-lg-5"
        >
          <div class="m-auto">
            <div class="form-header1 ps-2 mb-5">
              <h1 class="header1 fw-bold fs-1 m-0">BCP</h1>
              <h1 class="header2 fw-bold fs-1 m-0"> MANAGEMENT INFORMATION SYSTEM </h1>
            </div>
        
              
              <span class="loginLineBreak my-4"></span>
              <form class="user" action="accesslevelsuperadmin.php" method="POST">
              <div class="mb-3">
                <label
                  htmlFor="exampleInputEmail1"
                  class="form-label fw-semibold fs-6"
                >
                  Email:
                </label>
                <input
                  type="email" name="email" id="email" 
                  class="inputField input-form form-control px-3 fs-6 fw-normal"
                  placeholder="Email"                
                  aria-describedby="emailHelp"
                  required
                />
              </div>
              <div class="mb-3">
                <label
                  htmlFor="inputPassword"
                  class="form-label fw-semibold fs-6"
                >
                  Password:
                </label>
                <div id="login">
                  <div class="passwordContainer">
                    <input
                      type="password" name="password" id="password1" 
                      class="inputField input-form form-control px-3 fs-6 fw-normal"
                      placeholder="Password"
                      
                                                 required
                    />
                    <i class="fa-solid fa-eye-slash" id="passwordIconId" hidden=""></i>
                  </div>
                </div>
              </div>

              <div class="mb-3">
              <?php 
                                        // Display the alert box
                                        if (isset($_GET['error'])) {
                                          echo "<p style='color:red;'>" . ("Invalid login, please try again")  . "</p>";
                                        
                                        } ?>   
              
              </div>
              
              <button
                type="submit"
                name="LOGIN" id="LOGIN" class="buttonTemplate sumbit-button btn rounded-2 w-100 mt-3"
              >
                Log in
                <!-- <i class="bx bx-log-in"></i> -->
              </button>
            </form>
          
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
