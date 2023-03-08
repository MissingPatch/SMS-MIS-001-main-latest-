
<!-- Modal -->


<div class="modal fade" id="inq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b>Department Inquiries</b></h5>
        <hr>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

          <style> 
          textarea {
            width: 450px;
            height: 100px;
            padding: 12px 20px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            background-color: #f8f8f8;
            font-size: 16px;
            resize: none;
          }

          .col-form-label {
            padding-bottom: .5rem!important;
            font-size: 17px;
            resize: none;
          }


          </style>

        <?php
        // Connect to database and fetch inquiry details
            @$id = $_POST['inq_num'];
            $sql = "SELECT * FROM mis_categorize_inq ORDER BY inq_num='$id'";
            $inq = $con->query($sql);
            $row = $inq->fetch_assoc();
        
        ?>

     
      <div class="container-fluid">
      <div class="main-body">
      <div class="col-xl-12 col-md-6 mb-4">
      <div class="modal-body">
      
      <div class="col-md-6">
	    <form action="" method="POST">
      <label class="col-form-label"><b>Inquries_ID:</b> <?php echo @$row["inq_num"];?></label><br>
      <label class="col-form-label"><b>Department:</b> <?php echo @$row["department"];?> </label><br>
      <label class="col-form-label"><b>Date Requested:</b> <?php echo @$row["date_req"];?> </label><br>
      <label for="recipient-name" class="col-form-label"><b>Inquiries:</b></label><br>
          <textarea id="message" name="message" readonly> <?php echo @$row["inq_type"];?> </textarea>
          <br>
     
      <label for="recipient-name" class="col-form-label" ><b> Your Response:</b></label><br>
      </div> 


  
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
                                                 $to = "admission@school.edu";
                                                 $subject = "Enrollment Fee Paid List - " . date("Y-m-d");
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
                                             } else {
                                                 echo "Sorry, there was an error uploading your file.";
                                             }
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
                  