<?php
session_start();
if (!isset($_SESSION['ID'])) {
  header("Location:../home.php");
}
if(isset($_POST["change"])){
include("adm_change.php");
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script src="https://smtpjs.com/v3/smtp.js">
  </script>
  </script>
  <style>
    a:hover {
      text-decoration: none;
    }

    .upload {
      text-align: left;
      margin: 20px;
    }

    .post {
      text-align: center;
    }

    h1.heading {
      text-align: center;
      font-family: Garamond, serif;
      font-weight: 700;
      background-color: #F8F8FF;
    }

    h3 {
      background-color: pink;
      color: purple;
      text-align: center;
      padding: 25px;
    }

    .log {
      float: right;
    }

    .det {

      text-align: center;
      font-size: 17px;
      color: #e6b800;

    }

    .form-group {
      text-align: center;
      color: green;
      margin: 20px;
    }

    .sembtn,.fastbtn {
      
      margin-bottom: 8px;
    }

    .img-thumnail{
    border-radius: 50%;
    position: relative;
    left: 90px;
  }
    .details{
    position:relative;
    left :10px;
  }
  
  </style>

</head>

<body>





  <title>admin home page</title>


  <h1 class="heading">Admin home page</h1>


  <!--button type="button" class="btn btn-primary    mx-auto" onclick="window.location.href='adm_logout.php';">Log Out</button-->
  <div class="row">
  <div class="col " id="Profile card">


  <div class="card mx-auto d-block mt-3  profile" style="width:400px;   ">

  <div class="card-body details"  >
   

    <table class="table table-borderless font-weight-bold  " >
    <tody>
    <?php

          $conn = new mysqli('localhost', 'root', '', 'project_work');

           if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
           }
           $ID=$_SESSION['ID'];   
          

             $sql= " SELECT  name, ID, designation, email_id, date_format(DOB, '%m/%d/%Y')as dob ,Profile_pic from admin_details where ID = '$ID' ";
           $result = $conn-> query($sql);

            if($result-> num_rows > 0){
              
             while ($row = $result-> fetch_assoc()){
              echo '<tr><img src="'.($row['Profile_pic'] ).'" height="150" width="150"  class="img-thumnail" /></tr>';
               echo "<tr><td>Name :</td><td>".$row["name"]."</td></tr>";
               echo "<tr><td>ID :</td><td>".$row["ID"]."</td></tr>";
               echo "<tr><td>Designation:</td><td>".$row["designation"]."</td></tr>";
               echo "<tr><td>Email-ID :</td><td>".$row["email_id"]."</td></tr>";
               echo "<tr><td>DOB :</td><td>".$row["dob"]."</td></tr>";
                 
             }
            }
            else{
              echo "0 result ";
            }
           
          
           $conn-> close();
          
           ?>
        </tbody>
          </table>






                <div class=" p-1 login">
                  <button type="button" class="btn btn-block " href="#changepassword" data-toggle="modal" style="background-color: #0e918c;border-radius: 30px;color:white;">Change Password</button>
                  <a href="#" style=" text-decoration:none;">
                    <button type="button" class="btn  btn-block mt-2" onclick="window.location.href='adm_logout.php';" style="background-color: #0e918c;border-radius: 30px;color:white;">Log Out</button>
                  </a>
                </div>




              </div>
            </div>
          </div>

           <!--change password-->

           <div id="changepassword" class="modal fade">

<div class="modal-dialog modal-login">
  <div class="modal-content">
    <div class="modal-header">
         
      <h4 class="  modal-title">Change Password</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"  >&times;</button>
    </div>
    <div class="modal-body">
      <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
        <div class="form-group">
          <span id="oldp1" class="text-danger "></span >
          <input type="password" class="form-control" name="old_password" id="oldp" placeholder="  Old Password" id="usn" >	
            
        </div>
        <div class="form-group">
          <span id="newp1" class="text-danger "></span >
          <input type="password" class="form-control" name="new_password" id="newp" placeholder=" New password"  id="pass">
         
          
        </div>
        <div class="form-group">
          <span id="renewp1" class="text-danger "></span >
          <input type="password" class="form-control" name="renew_password" id="renewp" placeholder="Retype New password"  id="pass">
         
          
        </div>           
        <div class="form-group">
           
          <button type="submit" class="btn btn-outline-dark btn-block" id ="change"  name="change">Change password</button>
              
        </div>
      </form>
    </div>
   
  </div>
</div>
</div> 

      <div class="col " id="announcements">

  <form method="POST" action="ann_validate.php" enctype="multipart/form-data">

    <div class="form-group">
      <br>
      <label for="announcement" style="font-family: Garamond, serif;"><b>ANNOUNCEMENT</b></label>
      <textarea type="text" class="form-control textarea" name="announcement" id="exampleFormControlTextarea1" rows="7" style="width:100%;" placeholder="type the announcement here"></textarea>
    </div>

    <div class="form-group">
      <label for="exampleFormControlFile1">Upload announcement file</label>
      <input type="file" name="pdf_file" />
      <input type="hidden" name="MAX_FILE_SIZE" value="67108864" />
    </div>
    <input value="Post and send email" type="submit" name="submit" class="btn btn-success btn-lg btn-block" id="post" />
  </form>
  <p class="mt-5" style="font-size: 30px;font-weight:600;text-align:center; ">Details of registred students:</p>
  <a href="semreg_table.php">
    <button type="button" class="btn btn-warning btn-lg btn-block sembtn" >Semester end examination</button>
  </a>

  <br>
  <a href="fastsem_table.php">
    <button type="button" class="btn btn-warning btn-lg btn-block  fastbtn" > Fast Track examination</button>
  </a>
  <br>

  
      </div>
     
       

  <!-- Tab panes -->
  <div class="tab-content ">

<div class="tab-pane container  active" id="home">
  
  <div style="  top:50%;">
  
  
  </div>
</div>


<!--profile card-->






    </div>




</body>

</html>