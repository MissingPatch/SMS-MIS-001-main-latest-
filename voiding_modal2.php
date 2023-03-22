
<?php
$ql = "SELECT * FROM mis_payment_method ORDER BY OR_number DESC";
$pay = $con->query($ql) or die($con->error);
while ($row = $pay->fetch_assoc()) {
?>
             <div class="modal fade" id="void<?php echo $row['OR_number']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title"><b>Payment Receipt</b></h5>
                <hr>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
              
      
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                    <img
                class="ms-5 ms-sm-3 my-auto"
                src="./images/logo.png"
                width="130"
                height="100"
                alt="bcp-logo"
                />
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                
                    <p>
                        <b><em>Date:</b> <?php echo $row['date']; ?></em>
                    </p>
                    <p>
                    <b><em>Receipt #:</b> <?php echo $row['OR_number']; ?></em>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <h5>Official Receipt</h5>
                </div>
                </span>
                <table class="table table-hover">
                    <thead>
                        <tr>

                            <th>Payment Description</th>
                            <th>Stud #.</th>
                            <th class="text-center">Amount</th>
                            <th class="text-center">Balance</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-md-9"><em><?php echo $row['payment_desc']; ?></em></h4></td>
                            <td class="col-md-1" style="text-align: center"> <em><?php echo $row['student_num']; ?> </td>
                            <td class="col-md-1 text-center"><?php echo $row['amount']; ?></td>
                            <td class="col-md-1 text-center"><?php echo $row['bal']; ?></td>
                        </td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-hover">
                    <thead>
                        <tr>

                            <th>Name</th>
                            <th>Year</th>
                            <th class="text-center">Program</th>
                            <th class="text-center">Semester</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-md-9"><em><?php echo $row['name']; ?></em></h4></td>
                            <td class="col-md-1" style="text-align: center"> <em><?php echo $row['yearlevel']; ?> </td>
                            <td class="col-md-1 text-center"><?php echo $row['course']; ?></td>
                            <td class="col-md-1 text-center"><?php echo $row['semester']; ?></td>
                        </td>
                        </tr>
                    </tbody>
                </table>
                </div>

                  <div class="modal-footer">
                  <button type="button" class="btn btn-primary"  onclick="printModalContent('void<?php echo $row['OR_number']; ?>')">Print</button> 
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    
                                    <script>
                                    function printModalContent(modalId) {
                                    // Get the modal element
                                    var modal = document.getElementById(modalId);

                                    // Create a new element to hold the printable content
                                    var printContent = document.createElement('div');

                                    // Copy the modal content into the print element, omitting the button
                                    var modalContent = modal.querySelector('.modal-body').cloneNode(true);
                                    modalContent.removeChild(modalContent.lastElementChild); // Remove the "Print Receipt" button
                                    printContent.appendChild(modalContent);

                                    // Create a new window to print the content
                                    var printWindow = window.open('', 'Print', 'height=1500,width=1600');

                                    // Append the printable content to the print window document
                                    printWindow.document.body.appendChild(printContent);

                                    // Print the window
                                    printWindow.print();

                                    // Close the print window
                                    printWindow.close();
                                    }
                                    </script>
                           
                           <?php } ?>