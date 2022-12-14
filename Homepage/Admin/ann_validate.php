<?php
include("admin_home.php"); ?>
<?php

if (isset($_POST['submit']) && !empty($_FILES['pdf_file']['name'])) {
    //a $_FILES 'error' value of zero means success. Anything else and something wrong with attached file.
    if ($_FILES['pdf_file']['error'] != 0) {
        echo 'Something wrong with the file.';
    } else { //pdf file uploaded okay.
        //project_name supplied from the form field
        $announcement = htmlspecialchars($_POST['announcement']);

        //attached pdf file information
        $file_name = $_FILES['pdf_file']['name'];
        $ID = $_SESSION['ID'];
        $file_type = $_FILES['pdf_file']['type'];
        $date = date("d-m-Y", time());
        $pdf_blob = file_get_contents($_FILES['pdf_file']['tmp_name']);

        $conn = new mysqli('localhost', 'root', '', 'project_work');
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {


            $stmt = $conn->prepare("INSERT INTO `annoncements` (`date`, `id`, `announcement`, `type`, `file_name`, `pdf_doc`,`adm_id`)  VALUES (?,NULL, ?, ?, ?,?,?)");
            $stmt->bind_param('ssssss', $date, $announcement, $file_type, $file_name, $pdf_blob, $ID);


            if ($stmt->execute() === FALSE) {
                echo 'Could not save information to the database';
            } else {
                $to_email = "puneethk.cs19@bmsce.ac.in";
                $subject = "Announcement!!";
                $body = $announcement . ".......Please visit our portal for more details regarding the announcement.\n" . " http://localhost/Project/Homepage/home.php ";
                $headers = "From: examreg123@gmail.com";

                mail($to_email, $subject, $body, $headers);
                echo "<script type='text/javascript'> 
    alert('Announcement posted sucessfully!!!!');
    
    </script>";
            }



            $conn->close();
        }
    }
} else {
    //submit button was not clicked. No direct script navigation.
    header('Location: choose_file.php');
}
