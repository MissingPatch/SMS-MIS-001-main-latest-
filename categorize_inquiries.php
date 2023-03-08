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

include_once("connection/connection.php");
include ("include/header.php");
include ("include/sidebar.php");
include("categorize_inquiries_modal.php");

$con = connection();
@$id = $_GET['inq_num'];
$sql = "SELECT * FROM mis_categorize_inq ORDER BY inq_num='$id'";
$res = $con->query($sql) or die($con->error);
$row = $res->fetch_assoc();

?>
                <div class="container-fluid">
                    <div class="col-xl-12 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">

                    
                    <h5 _ngcontent-gwg-c228="" 
                    class="text-3xl md:text-4xl font-extrabold tracking-tight leading-7 sm:leading-10 truncate"> 
                    <b>Categorize Inquiries </h5>

                    
                    <div class="col-xl-12 col-md-6 mb-4">
                    <div class="card border-left-primary">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                   
                    <p> </p>
                    
                    
                   
                    <!-- DataTales Example -->
                    <?php
                        
                        include_once("connection/connection.php");
                        $con = connection();
                        
                  
                        if (isset($_FILES['sub'])) {
                            echo "Error: " . $_FILES["fileToUpload"]["error"] . "<br>";
                        } else {
                            $target_dir = "uploads/";
                            @$target_file = @$target_dir . basename($_FILES["fileToUpload"]["name"]);
                            $uploadOk = 1;
                            $fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                        
                            // Check if file already exists
                            if (file_exists($target_file)) {
                                echo "Sorry, file already exists.";
                                $uploadOk = 0;
                            }
                        
                            // Check file size
                            if (@$_FILES["fileToUpload"]["size"] > 500000) {
                                echo "Sorry, your file is too large.";
                                $uploadOk = 0;
                            }
                        
                            // Allow certain file formats
                            if($fileType != "xlsx" && $fileType != "xls") {
                                echo "Sorry, only Excel files are allowed.";
                                $uploadOk = 0;
                            }
                        
                            if ($uploadOk == 0) {
                                echo "Sorry, your file was not uploaded.";
                            } else {
                                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                                    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                                    // Code to send email notification to the admission department
                                    $mis_pdf = file_get_contents($target_pdf);
                                    $mis_pdf = base64_encode($mis_pdf);
                        
                                    $sql = "UPDATE mis_categorize_inq SET file_name = '$mis_pdf' WHERE inq_num = '$id'";
                                    //Perform the query
                                    if(mysqli_query($con, $sql)) {
                                        // Store $mis_pdf in session variable
                                        $_SESSION['mis_pdf'] = $mis_pdf;
                                        // Redirect to other file
                                        header("Location: otherfile.php");
                                        exit;
                                    } else {
                                        echo "Error: ". mysqli_error($con);
                                    }
                                } else {
                                    echo "Failed to upload PDF file";
                                }
                       
                                $body = "Please find attached the Enrollment Fee Paid List for today.";
                                $headers = "From: enrollment@school.edu" . "\r\n" .
                                    "Reply-To: enrollment@school.edu" . "\r\n" .
                                    "X-Mailer: PHP/" . phpversion();
                                $attachment = chunk_split(base64_encode(file_get_contents($target_file)));
                                $filename = basename($target_file);
                                $headers .= "MIME-Version: 1.0\r\n";
                                $headers .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";
                                $message = "--".$uid."\r\n";
                                $message .= "Content-type:text/plain; charset=iso-8859-1\r\n";
                                $message .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
                                $message .= $body."\r\n\r\n";
                                $message .= "--".$uid."\r\n";
                                $message .= "Content-Type: application/octet-stream; name=\"".$filename."\"\r\n";
                                $message .= "Content-Transfer-Encoding: base64\r\n";
                                $message .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n\r\n";
                                $message .= $attachment."\r\n\r\n";
                                $message .= "--".$uid."--";
                                mail($to, $subject, $message, $headers);
                            }
                        }
                        ?>
                        
                           
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
       
                    <fieldset>
                    <div class="drop-zone">
                    <form action="" method="POST" enctype="multipart/form-data"> 
                        <input type="file" name="fileToUpload" multiple class="form-control-file text-primary font-weight-bold" 
                            id="inputFile" onchange="readUrl(this)" data-title="Drag & Drop File Upload" hidden>
                        <label for="inputFile" class="input-icon">
                        <i class="fas fa-file-upload"></i>
                        <span>Choose a file or drag it here</span>
                        </label>
                        <button type="submit" name="sub" value="Upload" class="btn btn-primary">upload</button>
                    </div>
                    </fieldset>

                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" value="Upload" id="viewfile" class="btn btn-primary">Save changes</button>
                        </form>  
                    
                        <script>
                        var dropZone = document.querySelector('.drop-zone');
                        var input = document.getElementById('inputFile');
                        var label = dropZone.querySelector('label');

                        input.addEventListener('change', function() {
                        var fileCount = this.files.length;
                        var text = fileCount > 1 ? fileCount + ' files selected' : this.files[0].name;
                        label.querySelector('span').innerHTML = text;
                        });

                        dropZone.addEventListener('dragover', function(e) {
                        e.preventDefault();
                        dropZone.classList.add('active');
                        });

                        dropZone.addEventListener('dragleave', function(e) {
                        e.preventDefault();
                        dropZone.classList.remove('active');
                        });

                        dropZone.addEventListener('drop', function(e) {
                        e.preventDefault();
                        dropZone.classList.remove('active');
                        var files = e.dataTransfer.files;
                        input.files = files;
                        var fileCount = files.length;
                        var text = fileCount > 1 ? fileCount + ' files selected' : files[0].name;
                        label.querySelector('span').innerHTML = text;
                        });
                        </script>
                           
                              
                                
                                   
                                    </div>
                                    </div>
                                    </div>    
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                        
                    
                             <!-- /.container-fluid -->

</body>
</html>
<?php
include ("script/script.php");
include ("footer.php");
?>