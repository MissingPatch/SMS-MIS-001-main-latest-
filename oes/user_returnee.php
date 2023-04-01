<?php 

if(!isset($_SESSION)){
    session_start();
}
if(isset($_SESSION['userinfo'])){
    $_SESSION['userinfo'];
}
else{
    echo header("location:login.php");
}
include('user_includes/header.php');
include('user_includes/sidebar.php');
include_once("connection/connect.php");
$conn = index();
require("PHPMailer/src/Exception.php");
require("PHPMailer/src/PHPMailer.php");
require("PHPMailer/src/SMTP.php");
if (isset($_POST['returnee'])){

  $stud_no = $_POST['stud_no'];
  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $contact_no = $_POST['contact_no'];
  $address = $_POST['address'];
  $prev_school = $_POST['prev_school'];
  $prev_course = $_POST['prev_course'];
  $credits = $_POST['credits'];
  $status= "Pending";
  $timestamp = time(); // get the current timestamp
  $submitted_on = date('Y-m-d', $timestamp); // format the timestamp as a date string
  $random_number = rand(1000, 9999); // generate a random 4-digit number
  $track_id = str_replace('-', '', $submitted_on) . $random_number;
  
  $mail = new PHPMailer\PHPMailer\PHPMailer();
  $mail->isSMTP();
  $mail->Host = "smtp.hostinger.com";
  $mail->SMTPAuth = true;
  $mail->Username = "b4enrollment@oes.bcpsms.com";
  $mail->Password = "B4enrollment@1";
  $mail->SMTPSecure = 'tls';
  $mail->Port = 587;
  $mail->From = "b4enrollment@oes.bcpsms.com";
  $mail->FromName = "OES Admission";
  $mail->addAddress($email);
  
  // Check if the user already exists in the database
  $sql = "SELECT * FROM oes_returnee WHERE email = '$email'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
      // User already exists, do not insert new record
      $_SESSION['error'] = "We already sent an tracking number in your email.";
  } else {
      // User does not exist, insert new record
      $sql = "INSERT INTO oes_returnee (stud_no, fullname, email, contact_no, address, prev_school, prev_course, credits, status,track_id)
      VALUES ('$stud_no', '$fullname', '$email', '$contact_no', '$address', '$prev_school', '$prev_course', '$credits', '$status', '$track_id')";
      
      //Perform the query
      if(mysqli_query($conn, $sql)) {
          $mail->Subject = "Hi $fullname";
          $mail->Body = "Congratulations! We already received your application for admission. Please save this code as your Tracking Number 
          $track_id and present this letter of acceptance.";
          
          $mail->send();
          $_SESSION['success'] = "Your request has been received by Admin. Please check your email.";
      } else {
          $_SESSION['error'] = "Request Failed";
      }
  }
}   

?>


<section class="home-section mx-3 bg-light rounded shadow">
    <div class="container-fluid">
    <form method="POST" enctype="multipart/form-data">
    <br>
    <h3 class="text-muted" id="exampleModalLabel">Student Information</h3>
    <div class="row">
        <div class="col-md-4">
            <label>Student No.</label>
            <input type="text" class="form-control" name="stud_no" id="firstname" placeholder="Student No. ">
        </div>
        <div class="col-md-4">
            <label>Full Name</label>
            <input type="text" class="form-control" name="fullname" id="firstname" placeholder="First Name">
        </div>
        <div class="col-md-4">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="@Email">
        </div>
        
    </div>
    <div class="row">

        <div class="col-md-3">
            <label>Phone No.</label>
            <input type="number" class="form-control" name="contact_no" id="" placeholder="Contact No.">
        </div>

        <div class="col-md-3">
            <label>Address</label>
            <input type="text" class="form-control" name="address" id="address" placeholder="Address">
        </div>
        
    </div>
    <br>

    <h3 class="text-muted" id="exampleModalLabel">Previous Academic Information:</h3>
      <div class="row">
          <div class="col-md-5 mb-3">
              <label for="validationCustom03">Year Last Enrolled</label>
              <input type="text" class="form-control" id="validationCustom03" placeholder="Last School Attended" name="prev_school">
          </div>

          <div class="col-md-3">
              <label for="inputState">Program/Course</label>
                  <select name="prev_course" id="prev_course" class="form-control">
                          <option selected>Choose...</option>
                          <option>IT</option>
                      <option>IT</option>
                  </select>
          </div>

          <div class="col-md-3 mb-3">
              <label for="validationCustom04">Number of Credits Completed</label>
              <input type="text" class="form-control" placeholder="S.Y" name="credits">
          </div>
      </div>
    <br>

    <div class="form-group">
        <label for="confirmation">
        <input type="checkbox" id="confirmation" name="confirmation" required>
        By submitting this form, I confirm that the information provided is accurate and complete to the best of my knowledge.
        I understand that submitting this form does not guarantee enrollment in the requested course and that I am responsible for checking my email for confirmation and further instructions.
        </label>
    </div>

  <button type="submit" name="returnee" class="btn btn-primary">Submit</button>
</form>

    </div>
</section>   


<?php 
if(isset($_SESSION['success']) && $_SESSION['success']!=''){
  ?>
  <script>
    swal({
  title:"<?php echo $_SESSION['success']?>",
  icon: "success",
  showConfirmButton: false,
 
});
  </script>
  <?php
  unset($_SESSION['success']);
}
?>

<?php 
if(isset($_SESSION['error']) && $_SESSION['error']!=''){
  ?>
  <script>
    swal({
  title:"<?php echo $_SESSION['error']?>",
  icon: "warning",
  showConfirmButton: false,
 
});
  </script>
  <?php
  unset($_SESSION['error']);
}
?>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
