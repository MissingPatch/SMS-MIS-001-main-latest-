
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

?>    



                    <!-- Begin Page Content -->
                        <div class="container-fluid">

                        <div class="card-body">

                                <!-- Page Heading -->
                                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                    <h3 class="m-0 font-weight-bold text-primary">Home Page</h3>
                                </div>

                                <!-- Content Row -->
                                    <div class="row">

                                        <style>
                                            img.img-responsive {display: table-cell; width: 420%; max-height: 250px }     
                                        </style>  

                                        <img src="image/bg_user.png" class="img-responsive" alt="image/bg.png">
                                    
                                    </div>
                                    <hr >
                                    <div style="margin-top: 20px;"></div>
                                <!-- Home Page Body -->

                                <!-- Card Row -->
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <div class="card shadow mb-3">
                                                
                                                            
                                                <!-- Announcement -->
                                                <style>
                                                      hr {
                                                        border: 0;
                                                        height: 5px;
                                                        background-color: black;
                                                        width: 100%;
                                                        margin: 1rem auto;
                                                    }
                                                    .card-body {
                                                        background-color: white;
                                                        padding: 1.5rem;
                                                        border-radius: 10px;
                                                        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                                                        text-align: center;
                                                        position: relative;
                                                    }
                                                    
                                                    .card-title {
                                                        font-size: 1.5rem;
                                                        font-weight: bold;
                                                        text-align: center;
                                                        
                                                    }
                                                    
                                                    .card-text {
                                                        font-size: 1.2rem;
                                                        margin-bottom: 2rem;
                                                    }
                                                    
                                                    .card-icon {
                                                        position: absolute;
                                                        top: 50%;
                                                        left: 50%;
                                                        transform: translate(-50%, -50%);
                                                    }
                                                    
                                                    .card-icon i {
                                                        color: #f44336;
                                                    }
                                                </style>

                                                <div class="card-body">
                                                    <div class="column">
                                                                    
                                                            <h2> College New / Freshmen Requirements: </h2>
                                                            </div>
                                                            <div class="description">
                                                                <p> Original Copy of the following documents: <br>
                                                                    <br>•&nbsp; &nbsp; &nbsp; Form 138 (Report Card)
                                                                    <br>•&nbsp; &nbsp; &nbsp; Form 137
                                                                    <br>•&nbsp; &nbsp; &nbsp; Certificate of Good Moral
                                                                    <br>•&nbsp; &nbsp; &nbsp; PSA Authenticated Birth Certificate
                                                                </p>
                                                            </div>
                                                        <hr>
                                                        <a href="user_process.php">
                                                            <button type="button" class="btn btn-primary">Click this for Enrollment Process</button>
                                                        </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <div class="card shadow mb-3">
                                                
                                                            
                                                <!-- Announcement -->
                                                <div class="card-body">
                                                    <h3> Announcement </h3>
                                                <hr>
                                                <table class="table table-striped" id="example" width="100%" cellspacing="0">
                                                            <thead > 
                                                                <tr>
                                                                    <th></th>
                                                                    <th>Title</th>
                                                                    <th>Message</th>
                                                                    <th>Posted On</th>
                                                                </tr>

                                                            </thead>    
                                                                <tbody>
                                                                    <?php
                                                                        $sql = "SELECT * FROM oes_admin_announcement";
                                                                        $college = $conn->query($sql) or die($conn->error);
                                                                        $row = $college->fetch_assoc();
                                                                    ?>

                                                                    <?php do{
                                                                        if (!empty($row)) { ?> 
                                                                        <tr>
                                                                        <td><i class="bi bi-megaphone"></i></td>
                                                                        <td><strong> <?php echo $row['title'];?> </td>
                                                                        <td style="word-wrap: break-word; max-width: 300px; text-align: justify;"><strong> <?php echo $row['body'];?>  </td>
                                                                            <td><strong><i class="bi bi-clock-fill"></i>  <?php echo $row['added_on'];?></td>
                                                                        </tr>
                                                                    <?php }
                                                                    } while($row = $college->fetch_assoc()); ?>
                            
                                                                </tbody>
                                                        </table>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <style>
                                                        .about{
                                                            margin: 10px 0;

                                                        }

                                                        .about .column{
                                                            display: flex;
                                                            align-items: center;
                                                            justify-content: center;
                                                            flex-wrap: wrap;
                                                        }

                                                        .about .column .image{
                                                            flex:1 1 40rem;
                                                        }

                                                        .about .column .image img{
                                                            padding-left: 70px;
                                                            width:100%;
                                                        }

                                                        .about .column .content{
                                                            flex:1 1 40rem;
                                                        }

                                                        .about .column .content h3{
                                                            font-size: 3rem;
                                                            color:#666;
                                                        }

                                                        .about .column .content p{
                                                            font-size: 1.5rem;
                                                            color:#666;
                                                            padding:1rem 0;
                                                        }

                                                        .about .column .content .buttons a:last-child{
                                                            margin-left: 2rem;
                                                        }

                                                        .responsive-img {
                                                            max-width: 90%;
                                                            height: 50;
                                                        }
                                    </style>

                                    <div class="col-xl-12 col-lg-5">
                                        <div class="card shadow mb-4">
                                            <section class="about" id="about">
                                                <div class="column">

                                                    <div class="image">
                                                    <img src="images/user.jpg" alt="" class="responsive-img">
                                                    </div>

                                                    <div class="content">
                                                        <h4 class="heading"> Capstone Defense</h4>
                                                        <p style="margin-right: 20px; font-size: 15px; text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla placeat deserunt saepe repudiandae veniam soluta minima dolor hic aperiam iure.</p> 
                                                        
                                                        
                                                    </div>

                                                </div>
                                            </section>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-5">
                                        <div class="card shadow mb-4">
                                            <section class="about" id="about">
                                            <div class="column">
                                                <div class="content">
                                                <h4 style="margin-left: 20px;" class="heading"> BCP MISSION & VISION</h4>
                                                <p style="margin-left: 20px; font-size: 15px; text-align: justify;">Bestlink College of the Philippines’s mission and vision is committed in 
                                                providing quality education to our youth. BCP meets and provides adequate facilities and services not to mention the competent and qualified 
                                                instructors eagerly and enthusiastically extending and sharing their help for the welfare of the studentry.BCP vision aspires students to be 
                                                a synergy of diverse and highly qualified students interacting with dedicated scholars, teachers and practitioners in a dynamic and student-
                                                centered environment. BCP mission offers students a vibrant and dynamic environment from which to enter the legal professional. They encourage 
                                                students to be lifelong professionals who are actively engaged in the development of our society. Also they provide a strong foundation to fulfil 
                                                the dreams of their students. Bestlink College of the Philippines give students the opportunities to concentrate on specialty areas in order to 
                                                come up their skills, hands-on experienced in the classroom and through public service..</p> 
                                        
                                                </div>
                                                <div class="image">
                                                <img src="images/bg-bcp.jpg" alt="" class="responsive-img">
                                                </div>
                                            </div>
                                            </section>
                                        </div>
                                    </div>




                                <!-- End Card Row -->
                        </div>
                        </div>
                    <!-- End of Page Content -->
                    

        
    </div>

<?php
include('user_includes/scripts.php');
include('user_includes/footer.php');
?>
