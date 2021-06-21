<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sem form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<style>
  .scroll,
  .profile {

    height: 700px;
    background: linear-gradient(to top right, #575757 5%, #a3a3a3 41%);


  }

  .profile .btn:hover {

    box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
  }


  .sembtn,
  .fastbtn {
    background: #c70039;
    color: white;

  }

  .exam .btn {
    font-size: 30px;
    height: 100px;
  }

  .login .btn {

    height: 50px;
    font-size: 24px;
  }

  html {
    margin: 0;
  }

  #submit,
  #submitsem {
    background-color: #cc0e74;
    height: 70px;
    width: 270px;
    font-size: 30px;
    color: white;
    margin-top: 40px;
    margin-bottom: 30px;
  }

  label {
    font-weight: bold;
    margin-top: 10px;
  }

  .day,
  .month {
    color: #660569;
  }

  .sub {
    background-color: #cc0e74;
    height: 80px;
    font-size: 30px;
    color: white;

  }

  .with-arrow .nav-link.active {
    position: relative;
  }

  .with-arrow .nav-link.active::after {
    content: '';
    border-left: 6px solid transparent;
    border-right: 6px solid transparent;
    border-top: 6px solid #ff6666;
    position: absolute;
    bottom: -6px;
    left: 50%;
    transform: translateX(-50%);
    display: block;
  }



  .lined .nav-link {
    border: none;
    border-bottom: 3px solid transparent;
    background-color: transparent !important;
  }

  .lined .nav-link:hover {
    border: none;
    border-bottom: 3px solid transparent;
  }

  .lined .nav-link.active {
    background: none;
    color: #555;
    border-color: whitesmoke;
  }

  .paypal,
  .gpay,
  .applepay,
  .amazonpay {
    background-color: #cc0e74;
    color: white;
    margin: 2px;
  }

  .form-check-label {

    font-weight: 400;



  }

  #contact {
    font-size: 20px;
    font-weight: 500;
  }

  a:hover {
    text-decoration: none;
  }

  @media (min-width:320px) and (max-width:425px) {

    .scroll,
    .profile {

      height: 700px;
      background: linear-gradient(to top right, #575757 5%, #a3a3a3 41%);
      overflow-y: scroll;
      overflow-x: scroll;

    }
  }

  @media (min-width:320px) and (max-width:768px) {
    h1 {
      text-align: center;
    }
  }
</style>

<body>

  <div class="container">

    <div class="row m-3 ">
      <div class="col">


        <form method="POST" action="sem_Validate.php">


          <label for="name">Name:</label>

          <?php if (isset($nameErr)) { ?>
            <span class="text-danger">*<?php echo $nameErr; ?></span>
          <?php } ?>

          <input type="text" class="form-control" name="name" value="<?php echo isset($_POST["name"]) ? $_POST["name"] : ''; ?>">





          <label for="USN">USN:</label>
          <?php if (isset($usnErr)) { ?>
            <span class="text-danger">*<?php echo $usnErr; ?></span>
          <?php } ?>
          <input type="text" class="form-control" name="usn" id="usn_s" value="<?php echo isset($_POST["usn"]) ? $_POST["usn"] : ''; ?>">





          <label for="email2">Email-Id:</label>
          <?php if (isset($emailErr)) { ?>
            <span class="text-danger">*<?php echo $emailErr; ?></span>
          <?php } ?>
          <input type="text" class="form-control" id="email_s" name="email" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>">


          <label for="birthday">DOB:</label>
          <?php if (isset($dobErr)) { ?>
            <span class="text-danger">*<?php echo $dobErr; ?></span>
          <?php } ?>
          <input type="date" class="form-control" id="birthday_s" name="dob" value="<?php echo isset($_POST["dob"]) ? $_POST["dob"] : ''; ?>">





          <div class="form-group">
            <label for="sel1">Semester:</label>


            <select class="form-control" id="sel1_s" name="sem">
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
            </select>
          </div>


          <label for="sec">Section:</label>
          <?php if (isset($secErr)) { ?>
            <span class="text-danger">*<?php echo $secErr; ?></span>
          <?php } ?>

          <input type="text" class="form-control" name="section" id="sec_s" value="<?php echo isset($_POST["section"]) ? $_POST["section"] : ''; ?>">











          <br><br>
          <button type="submit" class=" btn  btn-block  shadow-sm mx-auto" id="submitsem"> SUBMIT </button>
        </form>
      </div>
    </div>



  </div>


</body>


</html>