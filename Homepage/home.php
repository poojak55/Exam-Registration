<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="134058878824-olbeek9ntkor00pc8v8h54clqdpkkjf3.apps.googleusercontent.com">
    <title>Home Page</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script>


    </script>
</head>

<body>
    <style>
        .login-container {
            margin-top: 5%;
            margin-bottom: 5%;
        }

        .login-form-1 {
            padding: 5%;
            box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
        }

        .login-form-1 h3 {
            text-align: center;
            color: black;
            padding-bottom: 10px;
        }

        .login-form-2 {
            padding: 5%;
            background: white;
            box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
        }

        .login-form-2 h3 {
            text-align: center;
            color: black;
            padding-bottom: 10px;
        }

        .login-container form {
            padding: 3%;
        }

        .btnSubmit {
            width: 50%;
            border-radius: 1rem;
            padding: 1.5%;
            border: none;
            cursor: pointer;
        }

        .login-form-1 .btnSubmit {
            font-weight: 600;
            color: white;
            background: linear-gradient(180deg, rgba(2, 0, 36, 1) 0%, rgba(9, 83, 121, 1) 52%, rgba(0, 212, 255, 1) 100%);
        }

        .login-form-2 .btnSubmit {
            font-weight: 600;
            color: white;
            background: linear-gradient(0deg, rgba(226,16,16,1) 3%, rgba(162,10,10,1) 78%);
        }

        .login-form-2 .ForgetPwd {
            color:#a20a0a;
            font-weight: 600;
            text-decoration: none;
        }

        .login-form-1 .ForgetPwd {
            color: #044782;
            font-weight: 600;
            text-decoration: none;
        }

        html {
            margin: 0;
        }

        body {
            height: 100vh;
            width: 100%;


            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;



        }

        th {

            text-align: center;
            padding: 8px;
        }

        table {
            position: relative;
            left: 250px;
        }

        .login-form-1 {
            background: white;
            border-left-style: solid;
            border-color: #044782;
            border-width: 20px;

        }

        .login-form-2 {
            background: white;
            border-left-style: solid;
            border-color: #a20a0a;
            border-width: 20px;

        }

        .btnSubmit:hover {
            color: black;
        }

        #click:hover {
            color: black;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <img src="https://img.collegepravesh.com/2017/02/BMSCE-Logo.png" class="rounded float-left" alt="BMSCE-Logo" width="150" height="150">

                <h2 class="display-1 text-md-center pt-3 " style="font-weight:500;">BMSCE Exam Portal</h2>



            </div>
        </div>

    </div>



    <div class="container login-container">
        <div class="row">
            <div class="col-md-6  login-form-1">
                <h3>Student Login</h3>
                <form method="POST" action="Student/stulogin_Validate.php">
                    <div class="form-group ">

                        <?php if (isset($usnErr)) { ?>
                            <span class="text-danger">*<?php echo $usnErr; ?></span>
                        <?php } ?>
                        <input type="text" class="form-control mb-4" placeholder="USN" name="usn" value="<?php echo isset($_POST["usn"]) ? $_POST["usn"] : ''; ?>" />

                    </div>
                    <div class="form-group">

                        <?php if (isset($std_passErr)) { ?>
                            <span class="text-danger">*<?php echo $std_passErr; ?></span>
                        <?php } ?>
                        <input type="password" class="form-control mb-4" placeholder=" Password " value="<?php echo isset($_POST["std_pass"]) ? $_POST["std_pass"] : ''; ?>" name="std_pass" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Log in" />
                    </div>
                    <div class="form-group">
                        <a href="#" class="ForgetPwd">Forgot Password?</a>
                    </div>
                </form>

            </div>
            <div class="col-md-6 login-form-2">
                <h3>Admin Login</h3>
                <form method="POST" action="Admin/admlogin_validate.php">
                    <div class="form-group">
                        <?php if (isset($IDErr)) { ?>
                            <span class="text-danger">*<?php echo $IDErr; ?></span>
                        <?php } ?>
                        <input type="text" class="form-control mb-4" placeholder="ID" name="ID" value="<?php echo isset($_POST["ID"]) ? $_POST["ID"] : ''; ?>" name="ID" />
                    </div>
                    <div class="form-group">
                        <?php if (isset($adm_passErr)) { ?>
                            <span class="text-danger">*<?php echo $adm_passErr; ?></span>
                        <?php } ?>
                        <input type="password" class="form-control mb-4" placeholder=" Password " name="adm_pass" value="<?php echo isset($_POST["adm_pass"]) ? $_POST["adm_pass"] : ''; ?>" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Log in" />
                    </div>
                    <div class="form-group">

                        <a href="#" class="ForgetPwd" value="Login">Forgot Password?</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <a class="site " id="click" target="new tab" href="https://campus.bmsce.ac.in/" style="color: black;font-weight: 600">Visit Campus Portal</a>
        </div>
    </div>

    </div>


</body>

</html>