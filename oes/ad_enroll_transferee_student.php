
<?php 

if(!isset($_SESSION)){
    session_start();
}
if(isset($_SESSION['userlogin'])){
    $_SESSION['userlogin'];
}
else{
    echo header("location:login.php");
}
include('includes/header.php');
include('includes/sidebar.php');
include_once("connection/connect.php");
$conn = index();

if(isset($_POST['addnew'])){
      if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
    }
    // generate student ID
    $id_prefix = "230";
    $student_count_query = "SELECT COUNT(*) as count FROM oes_student_application";
    $result = $conn->query($student_count_query);
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $student_count = $row["count"] + 1;
    } else {
        $student_count = 1;
    }
    $id_suffix = str_pad($student_count, 4, "0", STR_PAD_LEFT);
    $id = $id_prefix . $id_suffix;
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $suffix = $_POST['suffix'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $birth_date = $_POST['birth_date'];
    $course = $_POST['course'];
    $major = $_POST['major'];
    $citizenship = $_POST['citizenship'];
    $contact_number = $_POST['contact_number'];
    $guardian_info = $_POST['guardian_info'];
    $guardian_contact = $_POST['guardian_contact'];
    $address = $_POST['address'];
    $province = $_POST['province'];
    $zip = $_POST['zip'];
    $last_school_att = $_POST['last_school_att'];
    $school_yr = $_POST['school_yr'];
    $school_type = $_POST['school_type'];
    $status = "Pending";
    $payment_status="Unpaid";
    $student_type = "Transferee";
    $student_status= "Active";
    $medical_status="N/A";
    $year_level = $_POST['year_level'];
    $sql = "INSERT INTO `oes_student_application` (`firstname`, `middlename`, `lastname`, `suffix`, `email`, `gender`, 
    `age`, `birth_date`, `course`,`major`, `citizenship`, `contact_number`, `guardian_info`, `guardian_contact`,
    `address`, `province`, `zip`, `last_school_att`, `school_yr`, `school_type`, `status`, `payment_status`,`student_type`,`student_status`,`medical_status`, `year_level`,`user_id`)
    VALUES ('$firstname', '$middlename', '$lastname', '$suffix', '$email', '$gender', '$age', '$birth_date', '$course','$major', '$citizenship',
    '$contact_number', '$guardian_info', '$guardian_contact', '$address', '$province', '$zip', '$last_school_att', '$school_yr', '$school_type', 
    '$status', '$payment_status','$student_type','$student_status','$medical_status', '$year_level','$user_id')";

        //Perform the query
        if(mysqli_query($conn, $sql)) {
            $_SESSION['success']="Data Inserted Successfully";
        }else{
            $_SESSION['error'] = "Data Failed to Insert";
        }
    } 

?>    

      

<section class="home-section mx-3 bg-light rounded shadow">
    <div class="container-fluid">
        <form method="POST">
            </br>
            <h3 class="text-muted" id="exampleModalLabel">Student Information</h3>
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label>Firstname</label>
                            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name" required>
                        </div>

                        <div class="form-group col-md-3">
                            <label>Middlename</label>
                            <input type="text" class="form-control" name="middlename" id="middlename" placeholder="Middlename" required>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="inputEmail4">Last Name</label>
                            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Lastname"required>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="inputPassword4">Suffix Name</label>
                            <input type="text" class="form-control" name="suffix" id="suffix" placeholder="(e.g Jr.)" >
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="@Email" required>
                            
                        </div>

                        <div class="form-group col-md-3">
                            <label for="inputState">Gender</label>
                                <select name="gender" id="gender" class="form-control" required>
                                    <option selected>Choose...</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                        </div>

                        <div class="form-group col-md-3">
                            <label >Age</label>
                            <input type="number" class="form-control" name="age" id="age" placeholder="Age" required>
                        </div>

                        <div class="form-group col-md-3">
                            <label>Date of Birth</label>
                            <input type="date" class="form-control" name="birth_date" id="birth_date" placeholder="Date of Birth" max="2007-12-31" required>
                        </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-md-3">
                              <label for="course">Course</label>
                                  <select name="course" id="course" class="form-control" required>
                                      <option selected>Choose...</option>
                                      <option value="BS Information Technology">BS Information Technology</option>
                                      <option value="BS Hotel and Restaurant Management">BS Hotel and Restaurant Management</option>
                                      <option value="BS Education">BS Education</option>
                                      <option value="BS Tourism">BS Tourism</option>
                                  </select>
                          </div>

                          <div class="form-group col-md-3">
                                  <label for="major">Major</label>
                                  <select name="major" id="major" class="form-control" disabled>
                                      <option selected>Choose...</option>
                                  </select>
                          </div>

                        <div class="form-group col-md-2">
                                <label for="inputState">Year Level</label>
                                    <select name="year_level" id="year_level" class="form-control" required>
                                        <option selected>Choose...</option>
                                        <option>1st Year</option>
                                        <option>2nd Year</option>
                                        <option>3rd Year</option>
                                        <option>4th Year</option>
                                    </select>
                        </div>

                        <div class="form-group col-md-2">
                            <label>Citizenship</label>
                            <input type="text" class="form-control" name="citizenship" id="citizenship" placeholder="Citizenship" required>
                        </div>
                    
                        <div class="form-group col-md-2">
                            <label>Contact Number</label>
                            <input type="number" class="form-control" name="contact_number" id="contact_number" placeholder="Contact Number" required>
                        </div>
                    </div>

                    </br>

                    <hr>
                    <h3 class="text-muted" id="exampleModalLabel">Guardian Details</h3>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Guardian Full Name</label>
                            <input type="text" class="form-control" name="guardian_info" id="guardian_info" placeholder="Guardian Full Name" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Guardian Contact</label>
                            <input type="number" class="form-control" name="guardian_contact" id="guardian_contact" placeholder="Guardian Contact Number" required>
                        </div>
                    </div>


                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="validationCustom03">Full Address</label>
                            <input type="text" class="form-control" id="validationCustom03" placeholder="City" name="address" required>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="validationCustom04">Region</label>
                            <input type="text" class="form-control" id="validationCustom04" placeholder="Region" name="province" required>
                        </div>

                        <div class="form-group col-md-3">
                                <label for="validationCustom05">Zip Code</label>
                                <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" name="zip" required>
                        </div>
                    </div>  

                    <hr>
                    </br>
                        <h3 class="text-muted" id="exampleModalLabel">Last School Attended</h3>
                    
                    <div class="row">
                        <div class="form-group col-md-6">
                                <label for="validationCustom03">Last School Attended</label>
                                <input type="text" class="form-control" id="validationCustom03" placeholder="Last School Attended" name="last_school_att" required>
                        </div>

                        <div class="form-group col-md-3">
                                <label for="validationCustom04">School Year</label>
                                <input type="text" class="form-control" id="validationCustom04" placeholder="S.Y" name="school_yr" required>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="inputState">School Type</label>
                                <select id="inputState" name="school_type" class="form-control" required>
                                    <option Selected>Select School Type</option>
                                    <option>Public</option>
                                    <option>Private</option>
                                    <option>Other</option>
                                </select>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" name="addnew" class="btn btn-primary">Submit</button>
                    </div>
                    </br>

        </form>
        <style>


.form-group {
  margin-bottom: 1rem;
}

.form-group label {
  display: block;
  margin-bottom: 0.5rem;
  font-weight: bold;
}

/* Make image draggable */
.drag-area img {
    max-height: 100px;
    cursor: move;
}

</style>
<script>
  const courseSelect = document.getElementById('course');
  const majorSelect = document.getElementById('major');

  courseSelect.addEventListener('change', (event) => {
    // clear previous options
    majorSelect.innerHTML = '<option selected>Choose...</option>';

    if (event.target.value === 'BS Information Technology') {
      majorSelect.disabled = false;
      const bsitMajors = ['Computer Science', 'Information Technology', 'Information Systems'];
      bsitMajors.forEach(major => {
        const option = document.createElement('option');
        option.value = major;
        option.text = major;
        majorSelect.add(option);
      });
    } else if (event.target.value === 'BS Hotel and Restaurant Management') {
      majorSelect.disabled = false;
      const bshrmMajors = ['Hotel and Restaurant Management', 'Cruise Line Operations in Hotel Services', 'Tourism Management'];
      bshrmMajors.forEach(major => {
        const option = document.createElement('option');
        option.value = major;
        option.text = major;
        majorSelect.add(option);
      });
    } else if (event.target.value === 'BS Education') {
      majorSelect.disabled = false;
      const bsedMajors = ['Early Childhood Education', 'Elementary Education', 'Secondary Education', 'Special Education'];
      bsedMajors.forEach(major => {
        const option = document.createElement('option');
        option.value = major;
        option.text = major;
        majorSelect.add(option);
      });
    } else if (event.target.value === 'BS Tourism') {
      majorSelect.disabled = false;
      const bstourismMajors = ['Tourism Management', 'Hospitality Management', 'Ecotourism', 'Cultural Tourism'];
      bstourismMajors.forEach(major => {
        const option = document.createElement('option');
        option.value = major;
        option.text = major;
        majorSelect.add(option);
      });
    } else {
      majorSelect.disabled = true;
    }
  });
</script>
        <?php 
if(isset($_SESSION['success']) && $_SESSION['success']!=''){
  ?>
  <script>
    swal({
  title:"<?php echo $_SESSION['success']?>",
  icon: "success",
  showConfirmButton: false,
  timer: 1500
}).then(function() {
  window.location.href = "ad_student_application.php";
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
      button: "Ok",
    });
  </script>
  <?php
  unset($_SESSION['error']);
}
?>

    </section>   
</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
