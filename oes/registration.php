<?php

if(!isset($_SESSION)){
    session_start();
}


if(isset($_POST['firstname'])){
    $_SESSION['firstname'] = $_POST['firstname'];
}
if(isset($_POST['lastname'])){
    $_SESSION['lastname'] = $_POST['lastname'];
}
if(isset($_POST['age'])){
    $_SESSION['age'] = $_POST['age'];
}
if(isset($_POST['contact_no'])){
    $_SESSION['contact_no'] = $_POST['contact_no'];
}
if(isset($_POST['fb_id'])){
    $_SESSION['fb_id'] = $_POST['fb_id'];
}
if(isset($_POST['email'])){
    $_SESSION['email'] = $_POST['email'];
}

if(isset($_SESSION['successreg'])){
    unset($_SESSION['firstname']);
    unset($_SESSION['lastname']);
    unset($_SESSION['age']);
    unset($_SESSION['contact_no']);
    unset($_SESSION['fb_id']);
    unset($_SESSION['email']);
    unset($_SESSION['successreg']);
}

require("PHPMailer/src/Exception.php");
require("PHPMailer/src/PHPMailer.php");
require("PHPMailer/src/SMTP.php");


include_once("connection/connect.php");
$conn = index();

if (isset($_POST['register'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $contact_no = $_POST['contact_no'];
    $fb_id = $_POST['fb_id'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $user_type = "user";
    $status = "pending";
    $otp = rand(100000,999999); // generate a random 6-digit OTP
    $mail = new PHPMailer\PHPMailer\PHPMailer();

    $mail->isSMTP();

    $mail->Host = "smtp.hostinger.com";
    $mail->SMTPAuth = true;

    $mail->Username = "b4enrollment@oes.bcpsms.com";
    $mail->Password = "B4enrollment@1";

    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->From = "b4enrollment@oes.bcpsms.com";
    $mail->FromName = "hey";

    $mail->addAddress($email, "hey");

    $mail->isHTML(true);

    if (strlen($password) < 8) {
        $_SESSION['errorreg'] = "Password must be at least 8 characters long!";
    } else if (!preg_match('/^(?=.*\d)(?=.*[a-zA-Z])(?=.*[^a-zA-Z\d]).{8,}$/', $password)) {
        $_SESSION['errorreg'] = "Password must contain at least 1 number, 1 letter, and 1 symbol!";
    } else if ($password != $cpassword) {
        $_SESSION['errorreg'] = "Password Doesn't Match!";
    } else {
        $check_email = "SELECT email FROM oes_user_acc WHERE email = '$email'";
        $result = $conn->query($check_email);

        if ($result->num_rows > 0){
            $_SESSION['errorreg'] = "Email already exists. Please choose another email.";
        } else {
            // insert the registration info into the database
            $insert_query = "INSERT INTO oes_user_acc (firstname, lastname, age, contact_no, fb_id, email, password, user_type, status, otp) VALUES ('$firstname', '$lastname', '$age', '$contact_no', '$fb_id', '$email', '$password', '$user_type', '$status', '$otp')";
            $conn->query($insert_query);
        
            // send OTP verification email
            $mail->Subject = "OTP Verification";
            $mail->Body = "Your OTP for verification is: $otp";
            $mail->send();
        
            // set success message in session
            $_SESSION['successreg'] = "Registration Successful! Please check your email for OTP verification.";
        }
    }
}
?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" href="image/logo.png" type="image/logo.png">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Document</title>
  </head>
  <body>
    <div class="loginContainer">
      <div class="d-lg-flex position-relative">
                <div class="d-flex logoContainer">
                    <div class="polygon1 position-relative">
                        <img class="logo" src="image/logo.png" alt="bcp-logo" />
                    </div>
                    
                    <div class="polygon2"></div>
                </div>
                    <div class="form-container d-flex justify-content-center w-100 p-3 p-lg-5">
                        <div class="m-auto d-flex justify-content-center">
                            <div class="col-lg-12">
                                <div class="form-header1 ps-2 mb-5">
                                    <h1 class="header1 fw-bold fs-1 m-0">BCP</h1>
                                    <h1 class="header2 fw-bold fs-1 m-0">ADMISSION</h1>
                                </div>

                                <form id="form-id" onSubmit="{SubmitHandler}" method="post">
                                        <span class="loginLineBreak my-4"></span>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label fw-semibold fs-6">
                                                    Firstname
                                                </label>
                                                <input type="text" class="inputField input-form form-control px-3 fs-6 fw-normal" 
                                                id="email" name="firstname" aria-describedby="emailHelp" placeholder="Enter Firstname..." 
                                                value="<?php if(isset($_SESSION['firstname'])){ echo $_SESSION['firstname']; } ?>" required/>
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label fw-semibold fs-6">
                                                    Lastname
                                                </label>
                                                <input type="text" class="inputField input-form form-control px-3 fs-6 fw-normal" 
                                                id="lastname" name="lastname" placeholder="Enter Lastname..." 
                                                value="<?php if(isset($_SESSION['lastname'])){ echo $_SESSION['lastname']; } ?>" required/>  
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="row">
                                        <div class="col-md-6">
                                                <label class="form-label fw-semibold fs-6">
                                                    Age
                                                </label>
                                                <input type="text" class="inputField input-form form-control px-3 fs-6 fw-normal" 
                                                id="age" name="age" placeholder="Age" 
                                                value="<?php if(isset($_SESSION['age'])){ echo $_SESSION['age']; } ?>" required>
                                        </div>

                                        <div class="col-md-6">
                                                <label class="form-label fw-semibold fs-6">
                                                    Contact No.
                                                </label>
                                                <input type="number" class="inputField input-form form-control px-3 fs-6 fw-normal" 
                                                id="contact_no" name="contact_no" placeholder="Contact No." 
                                                value="<?php if(isset($_SESSION['contact_no'])){ echo $_SESSION['contact_no']; } ?>" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label fw-semibold fs-6">
                                                    Facebook ID
                                            </label>
                                            <input type="text" class="inputField input-form form-control px-3 fs-6 fw-normal" 
                                            name="fb_id" id="fb_id" placeholder="Facebook Link ID" 
                                            value="<?php if(isset($_SESSION['fb_id'])){ echo $_SESSION['fb_id']; } ?>" required>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label fw-semibold fs-6">Email</label>
                                            <input type="email" class="inputField input-form form-control px-3 fs-6 fw-normal" 
                                            name="email" id="email" placeholder="Email Address" 
                                            value="<?php if(isset($_SESSION['email'])){ echo $_SESSION['email']; } ?>" required>
                                        </div> 
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label htmlFor="inputPassword" class="form-label fw-semibold fs-6">
                                                    Password
                                                </label>
                                            

                                                <div id="login">  
                                                    <div class="passwordContainer">
                                                        <input type="password" class="inputField input-form form-control px-3 fs-6 fw-normal" id="password1" name="password" placeholder="Password"/>
                                                            <i class="fa-solid fa-eye-slash" id="passwordIconId"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label htmlFor="inputPassword" class="form-label fw-semibold fs-6">
                                                    Confirm Password
                                                </label>
                                            

                                                <div id="login">  
                                                    <div class="passwordContainer">
                                                        <input type="password" class="inputField input-form form-control px-3 fs-6 fw-normal" id="password2" name="cpassword" placeholder="Confirm Password"/>
                                                            <i class="fa-solid fa-eye-slash" id="passwordIconId2"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                    Use 8 or more characters with a mix of letters, numbers & symbols
                                    </div>
                                    <button type="submit" class="buttonTemplate sumbit-button btn rounded-2 w-100 mt-3" name="register">Register</button>

                                    <div class="mb-3">
                                        <h6>By using this services, you understand and agree to the BCP Admission Services<a data-bs-toggle="modal" class="small" href="#modal-1"> Terms of Use and Policy Statement.</a></h6>
                                    </div>


                                    <div class="text-center">
                                        Already have an account?<a class="small" href="login.php"> Login Here!</a>
                                    </div>


                                    <!-- Vertically centered Modal -->
                                    <div class="modal fade" id="modal-1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">BCP OES Terms and Condition</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p> BESTLINK COLLEGE OF THE PHILIPPINES, INC .( BCP ) is committed to abide by and adhere to the provisions of Philippine Republic Act No. 10173, also known as, the Data Privacy Act of 
                                                    2012 and its Implementing Rules and Regulations. BCP commits itself to protect the privacy of its data subjects (individuals it deals with, current, past and prospective) as well as
                                                     to ensure that the personal data gathered as provided by such subjects shall be safeguarded and secured while under its control and custody. This data privacy policy will outline the 
                                                     manner by which the data gathered will be properly utilized and the process of doing so; the measures to be undertaken for purposes of keeping it secure, its appropriate use and disposal 
                                                     when no longer deemed necessary; and provide information to the data subjects about their rights under RA#10173. For the above purpose this Data Privacy Notice and Consent Form may be amended 
                                                     at any time without prior notice, and such amendments will be notified to you via BCP’s website or email.
                                                </p>
                                                <hr>
                                                <p>Privacy Notice</p>
                                                <p>Information Collected</p>
                                                <p>BCP collects, stores, and processes personal data from its current, past and prospective students, starting with the information provided at application through the information collected throughout the whole course of their study at the BCP. This will include:</p>
                                                <ul>
                                                    <li>Contact information, such as, name, addresses, telephone numbers, email addresses and other contact details;</li>
                                                    <li>Personal information, such as date and place of birth, nationality, immigration status, religion, civil status, student ID, government-issued IDs, web information, recommendations and assessment forms from previous schools, etc.;</li>
                                                    <li>Family background, including information on parents, guardians, siblings, etc.;</li>
                                                    <li>Photographic and biometric data, such as, photos, CCTV videos, fingerprints, handwriting and signature specimens;</li>
                                                    <li>Student's school works, including data gathered using third party online learning tools Health records, psychological evaluation results, disciplinary records, and physical fitness information;</li>
                                                    <li>Student Cumulative Guidance Folder, which includes interviews, guidance assessments, special needs, exclusions/behavioral information, etc.;</li>
                                                    <li>Permanent Student Academic Records, including transcripts and the academic history of the student in BCP;</li>
                                                    <li>Student extra-curricular activities, résumés, job interview forms; and,</li>
                                                    <li>Financial and billing information.</li>
                                                </ul>
                                                <p>Use of Information</p>
                                                <p>The collected personal data is used solely for the following purposes:</p>

                                                <ul>
                                                    <li>Processing of admission application and student selection (and to confirm the identity of prospective students and their parents);</li>
                                                    <li>Verifying authenticity of student records and documents;</li>
                                                    <li>Processing of scholarship applications and its on-going requirements;</li>
                                                    <li>Processing of enrollment and registration;</li>
                                                    <li>Supporting student learning, and validating students’ program of study based on curriculum requirements, and other activities and experiences forming part of the student’s formation and education;</li>
                                                    <li>Supporting the student’s well-being and providing medical services and guidance counselling;</li>
                                                    <li>Monitoring and reporting on student progress; processing of evaluations, exam results, and grades;</li>
                                                    <li>Monitoring and ensuring the safety of all students within the BCP campus;</li>
                                                    <li>Processing and generating statements of accounts;</li>
                                                    <li>Processing of application for graduation;</li>
                                                    <li>Evaluation for board examinations;</li>
                                                    <li>Documentation of students’ data;</li>
                                                    <li>For accreditation, professional development of teachers and staff, and research, e.g., evaluation studies by the research desk, action research by teachers, etc.;</li>
                                                    <li>Posting or displaying of academic and non-academic achievements within the BCP premises and/or its official website and social media accounts;</li>
                                                    <li>Marketing and promoting BCP, its students, employees, and other academic and non-academic and/or school activities inside and outside the campus; and,</li>
                                                    <li>Providing Library services, running an outreach program, family council purposes, job postings, practicums, internships, employment.</li>
                                                </ul>

                                                <p>Information Sharing</p>
                                                <p>Personal data under the custody of BCP shall be disclosed only to authorized recipients of such data. Otherwise, we will share your personal data with third parties, other than your parents and/or guardian on record for minors, only with your consent, or when required or permitted by our policies and applicable law, such as with:</p>
                                                <ul>
                                                    <li>Regulatory authorities, courts, and government agencies, e.g., Department of Education, Commission on Higher Education, etc.;</li>
                                                    <li>The Association of Christian Schools, Colleges and University Accrediting Agency (ACSCU-AAI), a service organization which accredits academic programs that meet commonly accepted standards of quality education;</li>
                                                    <li>Service Providers who perform services for us and help us support your learning, monitor and report on your progress, manage the operations of our school, and assess how well BCP is doing; and,</li>
                                                    <li>Business partners and other academic linkages who provide internships and job opportunities to our graduates.</li>
                                                </ul>

                                                <p>Data Transfer</p>
                                                <p>Where BCP consider it necessary or appropriate, for the purposes of data storage, processing, providing any service or product on our behalf to you, or implementing an academic linkage program, we may transfer your personal data to third parties within or outside of the Philippines, under conditions of confidentiality and similar levels of security safeguards.</p>
                                                <p>Security</p>
                                                <p>We continue to implement organizational, administrative, technical, and physical security measures to safeguard your personal data.</p>
                                                <ul>
                                                <li>Only authorized personnel have access to them, the exchange of which is facilitated through internal shared servers, email, and paper files.</li>
                                                <li>Should third parties need access to your personal data, we require some form of data sharing agreement with them, in compliance with the DPA and the DPA-IRR.</li>
                                                <li>Your paper and digital files are securely stored employing physical security to safeguard the paper files and technical security to protect the digital files.</li>
                                                </ul>

                                                <p>Retention of Information</p>
                                                <p>We keep your paper and digital files only for as long as necessary.</p>
                                                <p>a) The Permanent Student Academic Records are kept by the Basic Education (BED) Records Office or the Higher Education (HED) Registrar’s Office for 75 years after last graduation from BCP.</p>
                                                <p>b) The BED and HED Admission files are kept for five years.</p>
                                                <p>c) Application forms and documents of unsuccessful applicants are kept by the Admissions Office – five years for BED and two years for HED.</p>
                                                <p>d) Scholarship application forms and supporting documentation are kept by the HED Office of Student Affairs for four years, or until the scholar graduates.</p>
                                                <p>e) The Student Cumulative Guidance Folders are kept by the Guidance Office for five years after graduation.</p>
                                                <p>f) Student school works are kept for five years, but, in some cases, selected student works may be retained for ten years as exemplars.</p>
                                                <p>g) Student disciplinary records are stored by the Office of Student Affairs, for five years after graduation.</p>
                                                <p>h) The class records are kept for one year after graduation.</p>
                                                <p>i) Non-academic records, e.g., service records for HED scholars, extra-curricular activities, emergency contact forms, etc. are kept for five years.</p>
                                                <p>j) Financial and billing information are kept by the Finance Office for ten years.</p>
                                                <p>k) The Clinic retains health records for five years after graduation.</p>
                                                <p>l) CCTV cameras are the responsibility of Facilities; some cameras have memory for a month of CCTV videos, and older ones for less. The cameras run continuously on a rolling basis, where older videos are overwritten as the memory fills up.</p>

                                                <p>When your personal data is no longer needed, we take reasonable steps to securely destroy such information or permanently de-identify it. Paper files are securely shredded and electronic information is deleted applying Secure Erase so that this is no longer recoverable nor reproducible.</p>
<p><strong>Your rights</strong></p>
<p>You have the right to be informed, to object processing, access and rectification, to suspend or to withdraw your personal data, including, any such information held by third parties, with whom BCP has data sharing agreement; and be indemnified in case of damages pursuant to the provisions of the DPA and the DPA-IRR.</p>
<p>If you want to exercise any of your rights, or if you have any question about how we process your personal data, please contact BCP’s Data Protection Officer, through the following channels:</p>
<ul>
    <li>Email to <a href="mailto:dpo@bcp.edu.ph">dpo@bcp.edu.ph</a></li>
    <li>Call the Trunkline (417-4355)</li>
    <li>Write to:<br>
    The Data Protection Officer<br>
    BESTLINK COLLEGE OF THE PHILIPPINES, INC<br>
    #1071 Brgy. Kaligayahan, Quirino Highway Novaliches Quezon City, Philippines 1123</li>
</ul>
<p>If you have concern or complaint about the way we are collecting or using your personal data, you should raise your concern with us in the first instance.</p>







                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">I Agree</button>
                                            </div>
                                            </div>
                                        </div>
                                        </div>

                                    <!-- End Vertically centered Modal-->
                                </form>
                            </div>
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

      let showPassword2 = document.querySelector("#passwordIconId2");
    const passwordField2 = document.querySelector("#password2");

    showPassword2.addEventListener("click", function () {
    this.classList.toggle("fa-eye");

        const type =
            passwordField2.getAttribute("type") === "password"
            ? "text"
            : "password";
    passwordField2.setAttribute("type", type);
  });

    </script>
<?php 
if(isset($_SESSION['errorreg']) && $_SESSION['errorreg']!=''){
  ?>
  <script>
    swal({
      title:"<?php echo $_SESSION['errorreg']?>",
      icon: "warning",
      button: "Ok",
    });
  </script>
  <?php
  unset($_SESSION['errorreg']);
}
?>

    <?php 
    if(isset($_SESSION['successreg']) && $_SESSION['successreg']!=''){
    ?>
    <script>
        swal({
        title:"<?php echo $_SESSION['successreg']?>",
        icon: "success",
        button: "Ok",
        timer: 1500
        }).then(function() {
        window.location.href = "verifyotp.php";
        });
    </script>
    <?php
    unset($_SESSION['successreg']);
    }
    ?>
    <script>document.getElementById("form-id").reset();</script>
  </body>
</html>
