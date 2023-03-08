  
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
      <div class="container-fluid">
      <div class="main-body">
      <div class="col-xl-12 col-md-6 mb-4">
      <div class="modal-body">
    <form action="" method="post" enctype="multipart/form-data">
      <label for="to">To:</label>
      <input type="email" name="to" id="to" required><br>
      <label for="subject">Subject:</label>
      <input type="text" name="subject" id="subject" required><br>
      <label for="message">Message:</label><br>
      <textarea name="message" id="message" rows="5" cols="53"></textarea>
     <label>Upload File:</label><br>
                <div class="drop-zone">
                <form action="" method="POST" enctype="multipart/form-data"> 
                
                  <input type="file" name="fileToUpload" multiple class="form-control-file text-primary font-weight-bold" 
                        id="inputFile" onchange="readUrl(this)" data-title="Drag & Drop File Upload" hidden>
                  <label for="inputFile" class="input-icon">
                    <i class="fas fa-file-upload"></i>
                    <span>Choose a file or drag it here</span>
                  </label>
                </div>
    </form>


                  <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" name="submit" value="Upload" id="viewfile" class="btn btn-primary">Save changes</button>
                  </form>  
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>

