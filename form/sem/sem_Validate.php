<?php
session_start();







$conn = new mysqli('localhost', 'root', '', 'project_work');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $Reg = new Registration();
    $Reg->check_registered($conn);
}

class Registration
{
    function check_registered($conn)
    {
        $usn = $_SESSION["usn"];

        $sql = $conn->prepare("SELECT * FROM sem_registered WHERE USN= ? ");
        $sql->bind_param("s", $usn);



        $sql->execute();
        $sql->store_result();
        $count = $sql->num_rows();

        if ($count > 0) {
            echo "<script type='text/javascript'> 
        alert('You have already registered');
        window.location.href='../../Homepage/Student/studentpage.php';
        </script>";
            $sql->close();
            $conn->close();
        } else {
            $this->register($conn, $usn);
        }
    }

    function register($conn, $usn)
    {



        $stmt = $conn->prepare('INSERT INTO `sem_registered` (`USN`) VALUES (? )');

        $stmt->bind_param("s", $usn);




        $stmt->execute();
        echo "<script type='text/javascript'> 
alert('Registered Sucessfully!');
window.location.href='semht.php';
</script>";



        $stmt->close();
        $conn->close();
        return null;
    }
}
