<?php 
session_start();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_work";
$sem=$_SESSION["sem"];
$sql;
$date;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
if($sem==3){
  $sql = "SELECT * FROM `third_sem_sub`";
}
if($sem==4){
  $sql = "SELECT * FROM `fourth_sem_sub`";
}
if($sem==5){
  $sql = "SELECT * FROM `fifth_sem_sub`";
}
if($sem==6){
  $sql = "SELECT * FROM `sixth_sem_sub`";
}
if($sem==7){
  $sql = "SELECT * FROM `seventh_sem_sub`";
}
if($sem==8){
  $sql = "SELECT * FROM `eigth_sem_sub`";
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
    <title>SEM HALL TICKET</title>
</head>

<style>
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width:10%;
}
.title {
  color: grey;
  font-size: 18px;
}
table, th, td {
 text-align:center;
 border:2px solid black;
 border-collapse:collapse;
}
th {
  font-size:20px;
  background-color: white;
  color: black;
}

 
	
      .demo-wrap {
  overflow: hidden;
  position: relative;
}

.demo-bg {
  opacity: 0.2;
  height:300px;
  width: 300px;
  position: absolute;
 left:200px;
   background-repeat: no-repeat;
   background-size: contain;

}

.table {
  position: relative;
}

</style>
    <!-- Bootstrap CSS -->
    
   
  
  <body>
    <div class="card">
      <img src="https://www.pngitem.com/pimgs/m/325-3253130_logo-bms-college-of-engineering-bangalore-hd-png.png" alt="logo">
      <div class="card-body">
        <h2 style="text-align:center;background-color:#9fd1cd; font-weight: 800;color:black;" >B.M.S.COLLEGE OF ENGINEERING, BENGALURU-560 019</h2>
      <h5 style="text-align:center; font-weight: 800;color:black;" > (Autonomous College under VTU)</h5>
      </div>
    </div>
<hr />
    <h2 style="text-align:center;background-color:#d19fa4; font-weight: 600;color:black;">HALL TICKET FOR SEMESTER EXAMINATIONS</h2>
<hr/>


<div class='tab'>


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
     while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["Date"]."</td><td>".$row["Name"]."</td><td>".$row["Code"]."</td><td></td></tr>";
      }
      
     
        $result->close();
        $conn->close();
  ?>
  </tbody>
</table>









	

<button type="button" class="btn btn-outline-success btn-block" id="btnprint" onclick="print_page()">PRINT THIS PAGE</button>

<button type="button" class=" btn btn-outline-primary   btn-block "   id="stupg" onclick="student_page()">Back to Student Home page.</button>



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
            window.location.href="../../Homepage/Student/studentpage.php";
          
        }
</script>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  
    
  </body>
</html>