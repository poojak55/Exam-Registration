<?php
$con = new mysqli('localhost', 'root', '', 'project_work');
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT r.USN,r.Name,r.Semester,r.Section from registered_students r inner join sem_registered s on r.USN=s.usn");
?>




<!DOCTYPE html>
<html>
<title>SEE exam details</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
h3
{
text-align:center;
background-color:#d1d1e0;
padding:20px;

}
h4{
margin:10px;
color:#52527a;
}

button{
 float :right;
 margin-bottom: 8px;
}
</style>
<body>

<div class="w3-container">
   <title>SEE details!</title>
<link rel="stylesheet" type="text/css" href="style2.css">
  </head>
  <body>
    <h3> Semester end examination</h3><br>
<h4> Student details:</h4>
<button type="button" class=" btn btn-outline-primary   "   onclick='window.location.href="admin_home.html";'>Back to Admin Home page.</button>
  
  <p>Search for a name in the input field.</p>
  
  <input class="w3-input w3-border w3-padding" type="text" placeholder="Search for USN.." id="myInput" onkeyup="myFunction()">
<?php
  echo "<table class='w3-table-all w3-margin-top' id='myTable'>
<tr>
<th>USN</th>
<th>Name</th>
<th>Class</th>
<th>Section</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['USN'] . "</td>";
echo "<td>" . $row['Name'] . "</td>";
echo "<td>" . $row['Semester'] . "</td>";
echo "<td>" . $row['Section'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

  
</div>

<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

</body>
</html>
