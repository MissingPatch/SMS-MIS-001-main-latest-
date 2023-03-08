<?php


if(!isset($_SESSION)){
    session_start();
}


include_once("connection/connection.php");

include ("include/header.php");
include ("include/sidebar.php");
$con = connection();

$sql = "SELECT * FROM stud_info ORDER BY stud_num";
$stud = $con->query($sql) or die($con->error);
$row = $stud->fetch_assoc();

?>

  <body>
    <div class="container table-responsive mt-5">
      <table class="table rounded-2 overflow-hidden shadow-sm">
        <thead>
          <tr class="tableRowHeader align-top">
            <th scope="col">Number</th>
            <th scope="col">Full Name</th>
            <th scope="col">Course</th>
            <th scope="col">Section</th>
            <th scope="col">Address</th>
          </tr>
        </thead>
        <tbody class="tableBodyColor">
          <tr scope="row">
            <th scope="row">1</th>
            <td>
              <span class="text-secondary">John Doe</span>
            </td>
            <td>
              <span class="text-secondary">BSIT</span>
            </td>
            <td>
              <span class="text-secondary">4104</span>
            </td>
            <td>
              <span class="text-secondary">Caloocan City</span>
            </td>
          </tr>

          <tr scope=" row">
            <th scope="row">2</th>
            <td>
              <span class="text-secondary">John Doe</span>
            </td>
            <td>
              <span class="text-secondary">BSIT</span>
            </td>
            <td>
              <span class="text-secondary">4104</span>
            </td>
            <td>
              <span class="text-secondary">Caloocan City</span>
            </td>
          </tr>
          <tr scope="row">
            <th scope="row">3</th>
            <td>
              <span class="text-secondary">John Doe</span>
            </td>
            <td>
              <span class="text-secondary">BSIT</span>
            </td>
            <td>
              <span class="text-secondary">4104</span>
            </td>
            <td>
              <span class="text-secondary">Caloocan City</span>
            </td>
          </tr>

          <tr scope="row">
            <th scope="row">4</th>
            <td>
              <span class="text-secondary">John Doe</span>
            </td>
            <td>
              <span class="text-secondary">BSIT</span>
            </td>
            <td>
              <span class="text-secondary">4104</span>
            </td>
            <td>
              <span class="text-secondary">Caloocan City</span>
            </td>
          </tr>

          <tr scope="row">
            <th scope="row">5</th>
            <td>
              <span class="text-secondary">John Doe</span>
            </td>
            <td>
              <span class="text-secondary">BSIT</span>
            </td>
            <td>
              <span class="text-secondary">4104</span>
            </td>
            <td>
              <span class="text-secondary">Caloocan City</span>
            </td>
          </tr>

          <tr scope="row">
            <th scope="row">6</th>
            <td>
              <span class="text-secondary">John Doe</span>
            </td>
            <td>
              <span class="text-secondary">BSIT</span>
            </td>
            <td>
              <span class="text-secondary">4104</span>
            </td>
            <td>
              <span class="text-secondary">Caloocan City</span>
            </td>
          </tr>

          <tr scope="row">
            <th scope="row">7</th>
            <td>
              <span class="text-secondary">John Doe</span>
            </td>
            <td>
              <span class="text-secondary">BSIT</span>
            </td>
            <td>
              <span class="text-secondary">4104</span>
            </td>
            <td>
              <span class="text-secondary">Caloocan City</span>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </body>

  
<?php
include ("script/script.php");
?>