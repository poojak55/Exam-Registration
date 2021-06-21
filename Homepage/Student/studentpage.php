<?php
$conn = new mysqli('localhost', 'root', '', 'project_work');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {

  $sql = "SELECT date,id, announcement,file_name,pdf_doc from annoncements;";

  $result = $conn->query($sql);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Student Main Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
  .sembtn,
  .fastbtn {
    background: #c70039;
    color: white;
    width: 300px;
    height: 70px;
    font-size: 20px;

  }




  a {
    border-radius: 0 !important;
    color: black
  }

  a:hover {

    color: black;
  }

  .scroll {
    max-height: 500px;
    overflow-y: auto;
  }
</style>


<body>
  <div class="container">
    <div class="pt-3 mx-auto row">
      <h1 class="display-2 col " style="text-align: center;">Dept. Of Computer Science</h1>
    </div>
    <hr>

    <div class="row">
      <div class="col " id="announcements">

        <div class="card ">
          <div class="card-header display-4 " style="text-align: center;">Announcements</div>
          <div class="card-body scroll">


            <?php if ($result->num_rows > 0) {
              // output data of each row
              while ($row = $result->fetch_assoc()) {
                echo "<p> <font color=red>" . $row["date"] . "</p>
                      <p> <font color=black>" . $row["announcement"] . "</p><a  target='_blank' href='view.php?id=" . $row["id"] . "'>read more: " . $row["file_name"] . "</a> <hr>";
              }
            }
            ?>


          </div>

        </div>


      </div>


      <div class="col" id="navbar">
        <div class="d-flex mx-auto d-block">
          <ul class="nav   nav-tabs nav-justified" style="background-color:#ffd802;width:450px;">
            <li class="nav-item flex-fill">
              <a class="nav-link active" data-toggle="tab" href="#home">Exam Registration</a>
            </li>
            <li class="nav-item flex-fill">
              <a class="nav-link" data-toggle="tab" href="#menu1">Profile</a>
            </li>
            <li class="nav-item flex-fill">
              <a class="nav-link" data-toggle="tab" href="#menu2">Contact Us</a>
            </li>
          </ul>
        </div>

        <!-- Tab panes -->
        <div class="tab-content ">

          <div class="tab-pane container  active" id="home">
            <p class="mt-5" style="font-size: 30px;font-weight:600;text-align:center;">Select the Exam to Register:</p>
            <div style="  top:50%;">
              <button type="button" class="btn m-3 btn-block mx-auto d-block  sembtn " style="border-radius: 10px;" data-target="#semester" onclick="window.location.href='../../../Project/form/sem/sem.php';">Semester exam</button>
              <button type="button" class="btn m-3 btn-block mx-auto d-block  fastbtn " style="border-radius: 10px;" data-target="#fasttrack" onclick="window.location.href='../../../Project/form/fastracksem/fastsem.php';">Fast-Track Semester exam</button>
            </div>
          </div>


          <div class="tab-pane container fade  " id="menu1">

            <div class="card mx-auto d-block mt-3" style="width:400px">

              <div class="card-body  ">
                <img class="card-img-top mx-auto d-block" src="https://cdn1.vectorstock.com/i/thumb-large/22/05/male-profile-picture-vector-1862205.jpg" alt="Card image" style="width:156px;">

                <table class="table table-borderless font-weight-bold  ">

                  <tbody>
                    <tr>
                      <td>Name : </td>
                      <td>STUDENT</td>
                    </tr>

                    <tr>
                      <td>USN : </td>
                      <td>1BM19CS123</td>
                    </tr>


                    <tr>
                      <td>Semester : </td>
                      <td>5</td>
                    </tr>

                    <tr>
                      <td>Email-Id : </td>
                      <td>student.cs18@bmsce.ac.in</td>
                    </tr>



                    <tr>
                      <td>DOB : </td>
                      <td>29/02/2000</td>
                    </tr>


                  </tbody>
                </table>

                <div class=" p-1 login">
                  <button type="button" class="btn btn-block " href="#changepassword" data-toggle="modal" style="background-color: #0e918c;border-radius: 30px;color:white;">Change Password</button>
                  <a href="#" style=" text-decoration:none;">
                    <button type="button" class="btn  btn-block mt-2" onclick="window.location.href='std_logout.php';" style="background-color: #0e918c;border-radius: 30px;color:white;">Log Out</button>
                  </a>
                </div>




              </div>
            </div>
          </div>






          <div class="tab-pane container fade" id="menu2">


            <h1>CONTACT</h1>
            <p>e-mail: examreg@gmail.com<br>
              Phone no: 9741365928<br>
              Phone no:9886492383<br>
              Address:BMS College of Engneering<br> Bull Temple Rd, Basavanagudi, Karnataka, Bengaluru 560019</p>


          </div>
        </div>


      </div>

    </div>

</body>

</html>