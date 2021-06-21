<?php
session_start();
$_SESSION["usn"]=$_POST["usn"];
$_SESSION["password"]=$_POST["std_pass"];
$usnErr;
$std_passErr;
$std_pass;
$usn = test_input($_POST["usn"]);


 
       


if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["usn"])) {
    $usnErr = "USN is required";
} else {
    

    $sub1 = $usn . substr(1, 3);
    $sub2 = $usn . substr(5, 7);
    if ($sub1 != "BM" && $sub2 != "CS" && $usn !== "" && strlen($usn) != 10) {
        $usnErr = "USN is  in invalid format";
    }
}
if (empty($_POST["std_pass"])) {
    $std_passErr = "Password is required";
}

}


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if(!isset($usnErr)) {
    $conn = new mysqli('localhost', 'root', '', 'project_work');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        
     

        
      
        $sql = $conn->prepare("SELECT * FROM login_details WHERE USN=?");
        $sql->bind_param("s", $usn);



        $sql->execute();
        $sql->store_result();
        $count = $sql->num_rows();


    if($count == 1){
        $sql2 = $conn->prepare("SELECT Password FROM login_details WHERE USN=?");
        $sql2->bind_param("s", $usn);
        $sql2->execute();
       $result=$sql2->store_result();
     //  $row=$result->fetch_assoc();
     $sql2->bind_result($Password);
    
     /* fetch values */
     while ($sql2->fetch()) {
        $std_passErr;
        $pass = $_POST["std_pass"];   
        if($pass == $Password){
           
            header("Location:studentpage.php");
            $sql->close();
            $sql2->close();
            $conn->close();
        }
        else{
            $std_passErr= "Invalid password";
            /*echo "<script type='text/javascript'> 
            alert('Invalid Password');
            
            </script>";*/
        }
    

   
}
    }
else{
    echo "<script type='text/javascript'> 
    alert('You have not registered');
    
    </script>";
    
}
    }
}
 

include('home.php');
