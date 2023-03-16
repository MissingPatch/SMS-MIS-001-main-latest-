<?php
if(!isset($_SESSION)){
  session_start();
}
if(isset($_SESSION['role'])){
$_SESSION['role'];
}
else{
echo header("location:login.php");
}
include ("../student/student_login.php");
include ("../student/student_header.php");

?>

                    <div class="container">
                    <div class="main-body">
                    <!-- Content Row -->
                    <div class="row">
                    <div class="col-xl-12 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">

                    <div class="col-xl-12 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      
                      <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-1">
                    <p class="p mb-0 text-primary " style=" font-size: 20px; margin-top: 30px;">Student Dashboard</p>
                    <p class="p mb-0 " style=" font-size: 18px; margin-top: 30px;">
                        <?php
                        date_default_timezone_set('Asia/Manila');
                        echo "". date('F j, Y ');
                    ?>
                    <span id="dateTime">
                    </p>
                    </div>

                    </div>
                    </div>
                    </div>
                    </div>

                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#" style="margin-left:10px;"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="../student/student_dashboard.php"><b style="color:#07177a; float:center; width:100px;">Dashboard </b></a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="empprofile_activitylogs.php?ID=<?php echo $row["ID"];?>">Profile</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="empprofile_activitylogs.php?ID=<?php echo $row["ID"];?>">Announcement</a>
                        </li>

                        <li class="nav-item dropdown dropdown-hover">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Setting
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="empprofile_security.php?ID=<?php echo $row["ID"];?>">Security Setting</a>
                        </li>
                        </ul>
                    </div>
                    </nav>


                    <style>
                      .content .card:hover {
                      transform: scale(1.05);
                      transition: all 0.3s ease-in-out;
                    }
                    .card-header {
                      display: flex;
                      justify-content: center;
                      align-items: center;
                      margin-bottom:10px;
                    }

                    </style>
               
                <div class="row justify-content-center mt-3">
                <div class="col-md-7">
                <div class="content">
                <div class="card-header"style="background-color:#07177a; color:white; align-items:center;">
                  <h5><b>Department Menu</b></h5>
                </div>
                <div class="row">
                <div class="col">
                <div class="card" id="portal" style="  
                height: 12rem;
                width: 10rem;
                margin: 5px 5px ; 
                border-radius: 5px;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                transition: 0.3s;
               ">
                
                <div class="img-back" style=" 
                height: 70%;
                width: 100%;
                background: url(../images/stud_portal.png) no-repeat;
                background-size: 100% 100%;"></div>

                <div class="card-bottom" style="width: 100%;
                height: 30%;
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 0 0 5px 5px;
                background: #1B84D6;
                text-transform: uppercase;
                font-size: 0.8rem;
                color: #FFF;
                font-weight: 500;">Student Portal</div>
              </div>
              </div>

              <div class="col">
              <div class="card" id="lms" style="  
                height: 12rem;
                width: 10rem;
                margin: 5px 5px ;  
                border-radius: 5px;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                transition: 0.3s;
                background-color: #FFF;">
                
                <div class="img-back" style=" 
                height: 70%;
                width: 100%;
                background: url(../images/lms.png) no-repeat;
                background-size: 100% 100%;"></div>

                <div class="card-bottom" style="width: 100%;
                height: 30%;
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 0 0 5px 5px;
                background: #1B84D6;
                text-transform: uppercase;
                font-size: 0.8rem;
                color: #FFF;
                font-weight: 500;">LMS</div>
              </div>
              </div>

              <div class="col">
              <div class="card" id="Crad" style="  
                height: 12rem;
                width: 10rem;
                margin: 5px 5px ; 
                border-radius: 5px;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                transition: 0.3s;
                background-color: #FFF;">
                
                <div class="" style=" 
                height: 70%;
                width: 100%;
                background: url(../images/crad.png) no-repeat;
                background-size: 100% 100%;"></div>

                <div class="card-bottom" style="width: 100%;
                height: 30%;
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 0 0 5px 5px;
                background: #1B84D6;
                text-transform: uppercase;
                font-size: 0.8rem;
                color: #FFF;
                font-weight: 500;">Crad</div>
              </div>
              </div>
              </div>
              </div>
              </div>
           
           
              <br>
              <br>
              <br>
              <br>

        <div class="col-md-5">
        <div class="card">
        <div class="card-body">
        <div class="card-title">
        <h2>Is this your first time here?</h2>
        </div>
        <div>
        <p><b>INSTRUCTIONS</b></p>
        <p><i>Changing or resetting of password.</i></p>
        <p></p>
        <ol>
        <li>Reset password is available by clicking "<a href="https://bcpedushs.elearningcommons.com/login/forgot_password.php" target="_blank" rel="noreferrer noopener">Forget password or username</a>
        ."</li>
        <li>Make sure that you can access your <b>BCP email</b> in order to reset your LMS password.</li>
        <li>Download the instructional material <a href="https://dl.dropbox.com/s/iioe46csf4n7khn/stud_email.docx?dl=0" target="_blank" rel="noreferrer noopener">here</a>&nbsp;for more information.</li>
        <li>If you can not access your BCP email, contact&nbsp;<a href="https://www.facebook.com/bcpofficialpage" target="_blank" rel="noreferrer noopener">BCP MIS</a>.
        </li>
        </ol>
       <table>
       <caption>

      </caption>
      <thead>
        <tr>
          <th scope="col">Concern</th>
          <th scope="col">Who to approach</th>
        </tr>
      </thead>

    <tbody>
      <tr>
        <td>Reset password</td>
        <td><b>You</b> can change reset your password yourself thru the instructions above.</td>
      </tr>
      
      <tr>
        <td>Email account</td>
        <td><b>MIS department</b></td>
      </tr>
      
      <tr>
        <td>Restricted module</td>
        <td><b>eLearning Commons department</b></td>
      </tr>
      
      <tr>
        <td>Restricted activities</td>
        <td><b>Subject teacher</b></td>
      </tr>
      
      <tr>
        <td>Missing subject</td>
        <td><b>eLearning Commons department</b></td>
      </tr>
      
      <tr><td>Missing activities</td>
        <td><b>eLearning Commons department</b>
        </td>
      </tr>
  
      <tr>
        <td>Potential incorrect module content</td>
        <td><b>Subject teacher</b>. 
        <i>If indeed incorrect, the subject teacher must consult to subject writer and eLearning Commons department.</i></td>
      </tr>

      <tr>
        <td>Lost connection while taking exams or quizzes</td>
        <td>All<b> subject teachers</b> may reset quizzes or exams attempt.</td>
      </tr>

      <tr>
        <td>Incorrect subject loading</td>
        <td><b>Registrar.</b> Consult to BCP registrar if you've been placed in other strands.</td>
      </tr>

      <tr>
        <td>Incorrect information (name, section)</td>
        <td><b>Registrar.</b> Registrar shall request a change to the eLearning Commons department.</td>
      </tr>

      <tr>
        <td>Incorrect student ID number</td>
        <td><b>Registrar.</b> Registrar shall request a change to the eLearning Commons department.</td>
      </tr>

      </tbody>
      </table>
      </div>
      </div>
      </div>
      </div>
      </div>

       </div> 
       </div>
       </div> 
       </div>
        <?php
        include ("../footer.php");
        ?>
       </div>

       </div>
       </div>
    


<?php
include ("../script/script.php");
?> 