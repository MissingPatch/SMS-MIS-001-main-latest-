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

include ("connection/connection.php");
include ("include/header.php");
include ("include/sidebar.php");

?>

  <!-- Main Content -->

  <div class="container-fluid">
        <div class="main-body">
                <div class="col-xl-12 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#" style="margin-left:10px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link disabled"  href="" > <b> Control Settings → Settings </b></a>
                  </li>
                  </ul>
                  </div>
                  </nav>

                <div class="card-body">
                  
                <div class="row no-gutters align-items-center">

                <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                <div class="card">
                <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                        
                  </div>
                  <p style="font-size: 30px;"> <b><i class="bx bx-cog"></i> Settings </b></p>
                  <a style="text-decoration: none;" href=""><li> Data Privacy Act </li></a>
                  <a style="text-decoration: none;" href=""><li> Privacy & Policy </li></a>
                  <a style="text-decoration: none;" href=""><li> Developers Contacts </li></a>
								  </div>
                     </div>



            </div>
            

            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                <div class="row">
                    <div class="col-sm-12" >
                    <input type="hidden" name="" > 
                    </div>
                    </div>
                <fieldset><legend> <b>Data Privacy</b></legend></fieldset>
               <p style="color: grey; word-wrap: break-word;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>
               Republic Act No. 10173, otherwise known as the Data Privacy Act is a law that seeks to protect all forms of information, be it private, personal, or sensitive. It is meant to cover both natural and juridical persons involved in the processing of personal information. </b></p>
                    <hr>
                  
                    
                    </div>
                    </div>
              </div>

                    <div class="col-xl-12 col-md-6 mb-4">
                    <div class="card h-100">
                    <div class="card-body">
                    
                    <fieldset><legend><b><i style="font-size: 30px;" class="bx bxs-check-shield"> Privacy and Policy</i></b></legend></fieldset>
                    <hr>

                    <div class="row">

                    <h6 class="mb-0" style="color: grey;"><b>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Privacy Policy Our Privacy Policy was last updated on March 25 2023.
This Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your information when You use the Service and tells You about Your privacy rights and how the law protects You.
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
We use Your Personal data to provide and improve the Service. By using the Service, You agree to the collection and use of information in accordance with this Privacy Policy.</b>
</h6>





                    </div>
                    <div class="col-sm-9 text-secondary"> 
                    </div>
                    </div>
                        </div>

                        
                        </div>
                        </div>
                        
                    <div class="col-xl-12 col-md-6 mb-4">
                    <div class="card h-100">
                    <div class="card-body">
                    <center>
                    <fieldset><legend><b><i style="font-size: 30px;" class="bx bx-user-check"> Developers Contacts</i></b></legend></fieldset>
                    </center>
                    <hr>

                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<center>
<a style="color: red; font-size: 40px;" target="main" href="https://mail.google.com/"><i class="bx bxl-google"></i></a>
&nbsp;&nbsp;
<a style="color: blue; font-size: 40px;" target="main" href="https://www.facebook.com/"><i class="bx bxl-facebook-circle"></i></a>
&nbsp;&nbsp;
<a style="color: black; font-size: 40px;" target="main" href="https://github.com/login"><i class="bx bxl-github"></i></a>
&nbsp;&nbsp;
<a style="font-size: 40px;" target="main" href="https://telegram.org/"><i class="bx bxl-telegram"></i></a>
</center>
                        </div>
                       

                          </div>                  
                          </div>
                          </div>
                          </div>
                          </div>
                          </div>
                          </div>
                          </div>
</body>
</html>
<?php
include ("script/script.php");
include ("footer.php");
?>
