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
<div class="container-fluid">

<style>
	.card {
		margin-top: 20px;
	}

	h1 {
		margin: 0;
		padding: 0;
		font-size: 36px;
	}

	p {
		margin-bottom: 10px;
		font-size: 20px;
	}

	a {
		color: #0072C6;
		text-decoration: none;
	}
</style>
<div class="container">
	
		<div class="col-md-12" style="text-align: center;">
			<div class="card">
				<div class="card-body">
                <h1 style="text-align: center;">About Us</h1>
					At Bestlink College of the Philippines, We provide and promote quality education with modern and unique techniques to able to enhance the skill and the knowledge of our dear students to make them globally competitive and productive citizens.
				</div>
			</div>
		</div>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h1>Contact Us</h1>
                        <p><i class="bi bi-geo-alt-fill"></i>#1071 Brgy. Kaligayahan, Quirino Highway</p>
                        <p>Novaliches Quezon City, <br> Philippines 1123</p>
                        <p><i class="bi bi-telephone-fill"></i>Contact #: 417-4355</p>
                        <p><i class="bi bi-envelope-fill"></i>Email: bcp-inquiry@bcp.edu.ph</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h1>Follow Us</h1>
                        <p><i class="bi bi-facebook"></i><a href="https://www.facebook.com/">Facebook</a></p>
                        <p><i class="bi bi-twitter"></i>Twitter</p>
                        <p><i class="bi bi-instagram"></i>Instragram</p>
                        
                    </div>
                </div>
            </div>
        </div>

</div>
<?php 
include('includes/footer.php');
include('includes/scripts.php');
?>