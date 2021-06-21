<?php
$conn = new mysqli('localhost', 'root', '', 'project_work');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
   
    $sql = "SELECT `date`, annoncement
            FROM annoncements;";
  
    $result = $conn->query($sql);



}