
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
	.card-body {
                                                        background-color: white;
                                                        padding: 1.5rem;
                                                        border-radius: 10px;
                                                        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                                           
                                                        position: relative;
                                                    }
	header {
		background-color: #0072C6;
		color: #FFF;
		text-align: center;
		padding: 20px;
	}

	h1 {
		margin: 0;
		padding: 0;
		font-size: 36px;
	}

	h2 {
		margin-top: 40px;
		font-size: 28px;
		color: #0072C6;
		border-bottom: 1px solid #ccc;
		padding-bottom: 10px;
	}

	section {
		margin-bottom: 40px;
	}

	p {
		line-height: 1.5;
		font-size: 18px;
	}

	footer {
		background-color: #F1F1F1;
		text-align: center;
		padding: 10px;
	}
</style>
<!-- Begin Page Content -->
<div class="container-fluid">
<div class="card-body">
	<header>
		<h1>Admission School Process</h1>
	</header>
	<main>
		<section>
			<h2>Step 1: Submit an Application</h2>
			<p>Fill out and submit the school's online application. The application will ask for basic information about the student and their family, as well as any academic and extracurricular achievements and submit the softcopy of the requirements
				such as PSA, Form 138 (Report Card), Form 137, Certificate of Good Moral.
			</p>
		</section>
		<section>
			<h2>Step 2: Wait for Admin Approval by Checking Your Email</h2>
			<p>After submitting the application, the student will receive a confirmation message from the admission office.</p>
		</section>
		<section>
			<h2>Step 3: Pay the Enrollment Fee</h2>
			<p>After receiving the confirmation message, the student must pay the specified amount to the school cashier or through AUB Bank or their Hello Money App.</p>
		</section>
		<section>
			<h2>Step 4: Schedule Assignment</h2>
			<p>Once the school has confirmed that the student has paid the enrollment fee, the student will receive an email from the registrar assigning their schedule and section.</p>
		</section>
	</main>

                
                <footer>
                    <p>&copy; 2023 Admission School Process</p>
                </footer>
              
                </div>
				

        <!-- /.container-fluid -->
<?php 
include('includes/footer.php');
include('includes/scripts.php');
?>