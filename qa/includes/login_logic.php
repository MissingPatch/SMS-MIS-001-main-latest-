<?php

// Set session timeout to 30 minutes
// $timeout = 60; // 1 minutes
// ini_set('session.gc_maxlifetime', $timeout);
// session_set_cookie_params($timeout);
// error_reporting(0);
// Connect to the database
include("database.php");
// log_activity($user_id, "User logged in");
// Check if the login form has been submitted
if (isset($_POST['login'])) {
    // assume $user_id and $new_profile_data are defined
    

    // Get the username and password from the form
    $user_email = mysqli_real_escape_string($conn, $_POST['user_email']);
    $user_password = mysqli_real_escape_string($conn, $_POST['user_password']);

    // Query the database to check if the username and password are valid
    $query = "SELECT * FROM qa_user_table WHERE user_email = '$user_email' AND user_password = '$user_password'";
    $result = mysqli_query($conn, $query);

    // If the query returned one row, the username and password are valid
    // if (mysqli_num_rows($result) == 1) {
        // session_start();
        // $_SESSION['auth'] = true;
        // $_SESSION['start'] = time();
        // $_SESSION['expire'] = $_SESSION['start'] + (60);
        // // Get the user type from the database
        $row = mysqli_fetch_assoc($result);
        $user_type = $row['user_type'];

        // Set the user type in the session
        $_SESSION['user_type'] = $user_type;

        // Redirect the user to their respective dashboard based on their user type
        if ($user_type == '1') {
            header('Location:../admin/admin_dashboard.php');
            exit;
        }   if ($user_type == '2') {
            header('Location:../pmed/pmed_dashboard.php');
            exit;
        }
            if ($user_type == '3') {
        header('Location:../vp/vp_dashboard.php');
        exit;
         }
         else if ($user_type == '4') {
        header('Location:../superadmin/superadmin_dashboard.php');
        exit;
         }
     else {
        
        echo "Invalid username or password.";

        header("location:../index.php?error=incorrect username or password");
        $error = "Invalid username or password.";
        echo "<script>
      // Show the modal window with the error message
      document.getElementById('login-error-message').innerHTML = '$error';
      document.getElementById('login-error-modal').style.display = 'block';

      // Close the modal window when the close button is clicked
      document.getElementsByClassName('close')[0].onclick = function() {
        document.getElementById('login-error-modal').style.display = 'none';
      };
    </script>";
            }
        }
    
// // Check if the session has expired
// if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > $timeout)) {
//     // Session expired, destroy the session and redirect to login page
//     session_unset();
//     session_destroy();
//     header('Location: ../index.php');
//     exit;
// }

// // Update last activity time stamp
// $_SESSION['LAST_ACTIVITY'] = time();
?>