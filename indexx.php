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

include ("accesslevelsuperadmin.php");
include ("include/header.php");
include ("include/sidebar.php");


?>

<style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .form-group {
            margin-bottom: 0.5rem;
        }

        .form-control-icon {
            position: absolute;
            right: 0.75rem;
            top: 50%;
            transform: translateY(-50%);
            z-index: 2;
        }

        .file-input {
            position: relative;
        }

        .file-input input[type="file"] {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
        }

        .file-input-icon {
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            z-index: 2;
        }
    </style>
    <style>                                    
                                      .drop-zone {
                                        border: 2px dashed #ccc;
                                        padding: 1em;
                                        margin-bottom: 1em;
                                        text-align: center;
                                      }

                                      .drop-zone.active {
                                        border-color: #007bff;
                                      }

                                      .drop-zone label {
                                        display: block;
                                        margin-bottom: 1em;
                                      }

                                      .drop-zone input[type="file"] {
                                        display: none;
                                      }

                                      .drop-zone span {
                                        color: #555;
                                      }

                                      .drop-zone .input-icon {
                                        color: #007bff;
                                        border: 1px solid #007bff;
                                      }

                                      .drop-zone .input-icon:hover {
                                        color: #fff;
                                        background-color: #007bff;
                                      }

                                      .drop-zone .input-icon i {
                                        font-size: 1.5em;
                                      }
                                      </style>   
        <div class="container-fluid">
        <div class="main-body">
        <!-- Content Row -->
        <div class="row">
        <div class="col-xl-12 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
        <div class="row no-gutters align-items-center">

    <div class="container py-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <h5 class="card-title mb-4"><i class="far fa-envelope"></i> Send Request</h5>
                    <form action="send-email.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="recipient"><i class="far fa-user"></i> To:</label>
                            <input type="email" class="form-control" id="recipient" name="recipient" required>
                        </div>
                        <div class="form-group">
                            <label for="subject"><i class="fas fa-heading"></i> Subject:</label>
                            <input type="text" class="form-control" id="subject" name="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="message"><i class="far fa-comment"></i> Message:</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <div class="drop-zone">
                <form action="" method="POST" enctype="multipart/form-data"> 
                
                  <input type="file" name="fileToUpload" multiple class="form-control-file text-primary font-weight-bold" 
                        id="inputFile" onchange="readUrl(this)" data-title="Drag & Drop File Upload" hidden>
                  <label for="inputFile" class="input-icon">
                    <i class="fas fa-file-upload"></i>
                    <span>Choose a file or drag it here</span>
                  </label>
                  </form>
                </div>
    
                        <button type="submit" class="btn btn-primary"><i class="far fa-paper-plane"></i> Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
include ("script/script.php");
include ("footer.php");
?>