
<?php


$_SESSION["amount"] = $_POST["examfee"];
$radioErr;
$credErr;




if ($_SERVER["REQUEST_METHOD"] == "POST") {




    if (!isset($_POST['radio'])) {
        $radioErr = "Select a semester";
    }

    if (empty($_POST['Credits'])) {
        $credErr = "Select Subjects and Calculate your fees";
    }
}


if (!isset($radioErr) && !isset($credErr)) {
    $conn = new mysqli('localhost', 'root', '', 'project_work');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {


        $Reg = new Registration();
        $Reg->check_registered($conn);
    }
}
class Registration
{
    function check_registered($conn)
    {
        $usn = $_SESSION["usn"];

        $sql = $conn->prepare("SELECT * FROM fastsem_registered WHERE USN= ? ");
        $sql->bind_param("s", $usn);



        $sql->execute();
        $sql->store_result();
        $count = $sql->num_rows();

        if ($count > 0) {
            echo "<script type='text/javascript'> 
        alert('You have already registered');
        
        </script>";
            $sql->close();
            $conn->close();
        } else {
            $this->register($conn, $usn);
        }
    }

    function register($conn, $usn)
    {





        foreach ($_POST['checkArr'] as $selected) {
            $ins = $conn->prepare('INSERT INTO `fastsem_registered` (`USN`, `selected_subjects`) VALUES (?, ?)');

            $ins->bind_param("ss", $usn, $selected);
            $ins->execute();
        }
        echo "<script type='text/javascript'> 
        alert('Registered Sucessfully!');
        window.location.href='Payment/pay.php';
        </script>";





        $ins->close();
        $conn->close();
    }
}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
