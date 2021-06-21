<?php
session_start();

$_SESSION["amount"] = $_POST["examfee"];
$_SESSION["email"] = $_POST["email"];
$_SESSION["usn"] = $_POST["usn"];
$_SESSION["radio"] = (int)$_POST["radio"];


$nameErr;
$usnErr;
$dobErr;
$secErr;
$phoneErr;
$alt_phoneErr;
$emailErr;
$radioErr;
$credErr;
$name = $usn  = $sec = $phone = $alt_phone = $dob = $email = $radio = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }



    if (empty($_POST["usn"])) {
        $usnErr = "USN is required";
    } else {
        $usn = test_input($_POST["usn"]);

        $sub1 = $usn . substr(1, 3);
        $sub2 = $usn . substr(5, 7);
        if ($sub1 != "BM" && $sub2 != "CS" && $usn !== "" && strlen($usn) != 10) {
            $usnErr = "USN is  in invalid format";
        }
    }



    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Email is in invalid format";
        }
    }





    if (empty($_POST["dob"])) {
        $dobErr = "DOB  is required";
    } else {
        $dob = test_input($_POST["dob"]);
    }








    if (empty($_POST["section"])) {
        $secErr = "Section  is required";
    } else {
        $sec = test_input($_POST["section"]);
        if ($sec != "a" && $sec != "b" && $sec != "c" && $sec != "d" && $sec != "A" && $sec != "B" && $sec != "C" && $sec != "D") {
            $secErr = "Enter a valid section ";
        }
    }

    if (!isset($_POST['radio'])) {
        $radioErr = "Select a semester";
    }

    if (empty($_POST['Credits'])) {
        $credErr = "Select Subjects and Calculate your fees";
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if (!isset($nameErr) && !isset($usnErr) && !isset($emailErr) && !isset($dobErr) && !isset($phoneErr) && !isset($alt_phoneErr) && !isset($secErr) && !isset($radioErr) && !isset($credErr)) {
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
        $usn = $_POST["usn"];
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
            $this->register($conn);
        }
    }

    function register($conn)
    {
        $usn = $_POST["usn"];
        $name = $_POST["name"];
        $semester = (int)$_POST["radio"];
        $sec = $_POST["section"];
        $dob = $_POST["dob"];
        $email = $_POST["email"];

        if (!empty($_POST['checkArr'])) {


            $subject_sel = implode(",", $_POST['checkArr']);
        }


        $stmt = $conn->prepare('INSERT INTO `fastsem_registered` (`USN`, `Name`, `Semester`, `Section`, `DOB`, `Email-ID`)  VALUES (?, ?, ?, ?, ?,? )');

        $stmt->bind_param("ssisss", $usn, $name, $semester, $sec, $dob, $email);
        $stmt->execute();

        foreach ($_POST['checkArr'] as $selected) {
            $ins = $conn->prepare('INSERT INTO `fast_ticket` (`USN`, `Subjects`) VALUES (?, ?)');

            $ins->bind_param("ss", $usn, $selected);
            $ins->execute();
        }
        echo "<script type='text/javascript'> 
        alert('Registered Sucessfully!');
        window.location.href='Payment/pay.php';
        </script>";



        $stmt->close();

        $ins->close();
        $conn->close();
    }
}

include('fastsem.php');
