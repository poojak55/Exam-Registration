<?php




$conn = new mysqli('localhost', 'root', '', 'project_work');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {





    $result = $conn->query("SELECT * FROM `registered_students` WHERE USN='$usn'");








    if ($result->num_rows > 0) {
        $result2 = $conn->query("SELECT Password FROM login_details WHERE USN='$usn'");




        /* fetch values */
        while ($row = $result2->fetch_assoc()) {
            $std_passErr;
            $pass = $_POST["std_pass"];
            if ($pass == $row["Password"]) {

                header("Location:./Student/studentpage.php");

                $conn->close();
            } else {
                $std_passErr = "Invalid password";
            }
        }
    } else {
        echo "<script type='text/javascript'> 
    alert('You have not registered');
    
    </script>";
    }
}
