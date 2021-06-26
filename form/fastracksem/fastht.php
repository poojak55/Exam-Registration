<?php
session_start();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_work";
$usn = $_SESSION["usn"];
$sem = $_SESSION["sem"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {


  if ($sem == 3) {
    $sql = "SELECT  date_format(s.Date, '%m/%d/%Y')as Date,s.Name,s.Code from fastsem_registered f INNER JOIN third_sem_sub s on f.selected_subjects=s.Name where f.USN='$usn'";
  }
  if ($sem == 4) {
    $sql = "SELECT  date_format(s.Date, '%m/%d/%Y')as Date,s.Name,s.Code from fastsem_registered f INNER JOIN fourth_sem_sub s on f.selected_subjects=s.Name where f.USN='$usn'";
  }
  if ($sem == 5) {
    $sql = "SELECT  date_format(s.Date, '%m/%d/%Y')as Date,s.Name,s.Code from fastsem_registered f INNER JOIN fifth_sem_sub s on f.selected_subjectss=s.Name where f.USN='$usn'";
  }
  if ($sem == 6) {
    $sql = "SELECT  date_format(s.Date, '%m/%d/%Y')as Date,s.Name,s.Code from fastsem_registered f INNER JOIN sixth_sem_sub s on f.selected_subjects=s.Name where f.USN='$usn'";
  }
  if ($sem == 7) {
    $sql = "SELECT  date_format(s.Date, '%m/%d/%Y')as Date,s.Name,s.Code from fastsem_registered f INNER JOIN sevnth_sem_sub s on f.selected_subjects=s.Name where f.USN='$usn'";
  }
  if ($sem == 8) {
    $sql = "SELECT  date_format(s.Date, '%m/%d/%Y')as Date,s.Name,s.Code from fastsem_registered f INNER JOIN eighth_sem_sub s on f.selected_subjects=s.Name where f.USN='$usn'";
  }
  $result = $conn->query($sql);
}


?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>FAST-TRACK SEM HALL TICKET</title>
</head>

<style>
  img {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 10%;
  }

  .title {
    color: grey;
    font-size: 18px;
  }

  table,
  th,
  td {

    text-align: center;
    border: 2px solid black;
    border-collapse: collapse;
  }

  th {
    font-size: 20px;
    background-color: white;
    color: black;


  }

  .demo-wrap {
    overflow: hidden;
    position: relative;
  }

  .demo-bg {
    opacity: 0.2;
    height: 300px;
    width: 300px;
    position: absolute;
    left: 200px;
    background-repeat: no-repeat;
    background-size: contain;

  }

  .table {
    position: relative;
  }
  .img-thumnail{
    margin-right: 100px;
    width:150px;
    height:150px;
  }
  td.img-thumnail{
    padding-top: 35px;
  }
  td.sign{
    text-align: center;
  }
  td.info{
    padding-left: 50px;
    text-align: left;
    width: 50%;
  }
</style>
<!-- Bootstrap CSS -->



<body>
  <div class="card">
    <img src="https://img.collegepravesh.com/2017/02/BMSCE-Logo.png" alt="logo">
    <div class="card-body">
      <h2 style="text-align:center;background-color:#9fd1cd; font-weight: 800;color:black;">B.M.S.COLLEGE OF ENGINEERING, BENGALURU-560 019</h2>
      <h5 style="text-align:center; font-weight: 800;color:black;"> (Autonomous College under VTU)</h5>
    </div>
  </div>
  <hr />
  <h2 style="text-align:center;background-color:#d19fa4; font-weight: 600;color:black;">HALL TICKET FOR FAST-TRACK SEMESTER EXAMINATIONS</h2>
  <hr />

  <!--Student details-->
<table class="table table-borderless font-weight-bold  " >
                <tbody>
                <?php

                      $conn = new mysqli('localhost', 'root', '', 'project_work');

                       if ($conn->connect_error) {
                          die("Connection failed: " . $conn->connect_error);
                       }
                           
                     $usn=  $_SESSION["usn"];

                         $sql= " SELECT  Name, USN, Semester,  date_format(DOB, '%m/%d/%Y')as DOB ,Profile_pic from registered_students where USN = '$usn' ";
                       $result1 = $conn-> query($sql);

                        if($result1-> num_rows > 0){
                          
                         while ($row = $result1-> fetch_assoc()){
                          
                         
                          echo "<tr><td class='info'><p>USN :" . $row["USN"] . "</p><p>Name :" . $row["Name"] . "</p><p>Semester :" . $row["Semester"] . "</p><p>DOB :" . $row["DOB"] . "<p>Branch : CSE</p></td>";
                          echo '<td class= "img-thumnail"><img src="'.($row['Profile_pic'] ).'" height="120" width="100"   class="img-thumnail" /></td></tr>';
                          
                             
                         }
                        }
                        else{
                          echo "0 result ";
                        }

                       ?>
                    </tbody>
                      </table>


  <div class='tab '>


    <div>
      <table class="table">

        <tr>
          <th scope="col">DATE</th>
          <th scope="col">SUBJECT</th>
          <th scope="col">SUBJECT CODE</th>
          <th scope="col">INVIGILATOR SIGN</th>

        </tr>

        <tbody>
          <?php
          while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["Date"] . "</td><td>" . $row["Name"] . "</td><td>" . $row["Code"] . "</td><td></td></tr>";
          }



          $conn->close();
          ?>
        </tbody>
      </table>
      </table>
      <table   class="table table-borderless font-weight-bold  ">
      <tr >
      <td>    </td><td>    </td></tr>
      <td>    </td><td>    </td></tr>
      <td>    </td><td>    </td></tr>
        <td class="sign">Candidate Signature</td>
        <td  class="sign">Controller of Examinations</td>
      </tr>
      </table>











      <button type="button" class="btn btn-outline-success btn-block" id="btnprint" onclick="print_page()">PRINT THIS PAGE</button>

      <button type="button" class=" btn btn-outline-primary   btn-block " id="stupg" onclick="student_page()">Back to Student Home page.</button>



      <script type="text/javascript">
        function print_page() {
          var ButtonControl1 = document.getElementById("btnprint");
          var ButtonControl2 = document.getElementById("stupg");
          ButtonControl1.style.visibility = "hidden";
          ButtonControl2.style.visibility = "hidden";
          window.print();
          ButtonControl1.style.visibility = 'visible';
          ButtonControl2.style.visibility = 'visible';
        }

        function student_page() {
          var ButtonControl2 = document.getElementById("stupg");
          window.location.href = "../../Homepage/Student/studentpage.php";

        }
      </script>

      <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->


</body>

</html>