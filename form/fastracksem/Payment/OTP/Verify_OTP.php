<?php
session_start();
if (isset($_POST['verify'])) {
    $verified = $_POST['otp'];
    if ($verified == $_SESSION['otp']) {
        $conn = new mysqli('localhost', 'root', '', 'otp');
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {



            $stmt = $conn->prepare('delete  FROM `otp_gen` WHERE otp=?');

            $stmt->bind_param("i", $verified);
            $stmt->execute();






            echo "<script type='text/javascript'> 
            alert('OTP Verified!,Payment Sucess!');
          window.location.href='../../fastht.php';
        </script>";
            $stmt->close();
            $conn->close();
        }
    } else {
        echo "<script type='text/javascript'> 
        alert('Wrong OTP please enter the correct one');
     
    </script>";
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>







    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>OTP Verification</title>
</head>
<style>

</style>

<body>
    <div class="container">

        <div class="row d-flex justify-content-center">
            <div class="col-lg-4 d-flex flex-wrap  align-self-center exam " id="otp">

                <form method="POST" action="Verify_OTP.php">
                    <label>Enter the OTP sent to your Email</label>
                    <input type=text class="form-control" id="otp" name="otp">
                    <button type="submit" class="  btn-primary  btn  shadow-sm my-3 mx-auto d-block" id="otp" name="verify"> Verify OTP </button>
                </form>
            </div>
        </div>


    </div>
</body>

</html>