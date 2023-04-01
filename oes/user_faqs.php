
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

<style>
    
    .accordion-button{
        margin-bottom: 10px;
    }
    .accordion-body {
        margin-top: 15px;
        padding: 25px;
        background: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 25px -3px rgba(0, 0, 0, 0.1);
        margin-bottom: 10px;
    }
    
    .circle-icon {
        height: 50px;
        width: 50px;
        border-radius: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #2b4eff;
        border: 5px solid #b2bfff;
        color: #fff;
        margin-left: -20px;
        margin-right: 10px;
        transform: scale(1.2);
    }
    .accordion-item{
        border: 0px!important;
    }
    .accordion-button:not(.collapsed){
        border: 0px!important;
        color: #0c63e4;
        background-color: #ffffff;
        box-shadow: inset 0 0px 0 rgb(0 0 0 / 13%);
    }
   

                 .card-body {
                                                        background-color: #ADD8E6;
                                                        padding: 1.5rem;
                                                        border-radius: 10px;
                                                        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                                           
                                                        position: relative;
                                                    }

</style>

    <!-- Begin Page Content -->
    <div class="container-fluid">
    <div class="card-body">
          <br><br><br>
            <div class="card shadow mb-4">  
                    <div class="card-body">
                <h2 style="text-align:center; " >FREQUENTLY ASKED QUESTIONS </h2>
            </div></div>
            
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <div class="circle-icon"> <i class="fa fa-question"></i> </div>
                        <span>Lorem Ipsum 1</span> </button>
                    </h2>

                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body"> <strong>This is the first item's accordion body.</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            <div class="circle-icon"> <i class="fa fa-question"></i> </div>
                            <span>Lorem Ipsum 2</span>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the second item's accordion body.</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </div>
                    </div>
                </div>

<div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
            <div class="circle-icon"> <i class="fa fa-question"></i> </div>
            <span>Lorem Ipsum 3</span>
        </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <strong>This is the third item's accordion body.</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
    </div>
</div>









            </div>
       
    
</div>
</section>
        <!-- /.container-fluid -->
<?php 
include('includes/footer.php');
include('includes/scripts.php');
?>