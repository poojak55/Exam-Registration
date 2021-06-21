<?php


$IDErr;
$adm_passErr;
$adm_pass;
$ID = test_input($_POST["ID"]);


 
       


if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["ID"])) {
    $IDErr = "ID is required";
} else {
    

   
    if ( strlen($ID) <= 4) {
        $IDErr = "ID is  in invalid format";
    }
}
if (empty($_POST["adm_pass"])) {
    $adm_passErr = "Password is required";
}

}


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if(!isset($IDErr)) {
    $conn = new mysqli('localhost', 'root', '', 'project_work');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        
     

        
      
        $sql = $conn->prepare("SELECT * FROM admin_login_details WHERE Username=?");
        $sql->bind_param("s", $ID);



        $sql->execute();
        $sql->store_result();
        $count = $sql->num_rows();


    if($count == 1){
        $sql2 = $conn->prepare("SELECT Password FROM admin_login_details WHERE Username=?");
        $sql2->bind_param("s", $ID);
        $sql2->execute();
       $result=$sql2->store_result();
     //  $row=$result->fetch_assoc();
     $sql2->bind_result($Password);
    
     /* fetch values */
     while ($sql2->fetch()) {
        $adm_passErr;
        $pass = $_POST["adm_pass"];   
        if($pass == $Password){
           
            header("Location:admin_home.php");
            $sql->close();
            $sql2->close();
            $conn->close();
        }
        else{
            $adm_passErr= "Invalid password";
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



include('../home.php');