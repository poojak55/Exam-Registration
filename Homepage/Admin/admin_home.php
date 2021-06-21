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
    <script src= 
	"https://smtpjs.com/v3/smtp.js"> 
</script> 
</script> 
<style>
    a:hover{
      text-decoration: none;
    }
    
.upload
{
text-align:left;
margin:20px;
}
.post
{
text-align:center;
}
h1{
  text-align: center;
  font-family: Garamond, serif;
  font-weight: 700;
  background-color: #F8F8FF;
}

h3{
background-color:pink;
color:purple;
text-align:center;
padding:25px;
}
.log
{
float:right;
}

.det
{

text-align:center;
font-size:17px;
color:#e6b800;

}
.form-group
{
text-align:center;
color:green;
margin:20px;
}
button{
 float :right;
 margin-bottom: 8px;
}
 </style>
  
  </head>
  <body>
    
  

    

    <title>admin home page</title>
    
    
    <h1>Admin home page</h1> 
    <button type="button" class="btn btn-primary    mx-auto" onclick='window.location.href="../home.php";'>Log Out</button> 
 <form method="POST" action="ann_validate.php"   enctype="multipart/form-data">
   
    <div class="form-group">
   <br>
       <label for="announcement" style="font-family: Garamond, serif;"><b>ANNOUNCEMENT</b></label>
        <textarea type="text" class="form-control textarea" name="announcement" id="exampleFormControlTextarea1" rows="10" placeholder="type the announcement here" ></textarea>
   </div>

    <div class="form-group">
       <label for="exampleFormControlFile1">Upload announcement file</label>
       <input type="file" name ="pdf_file" />
       <input type="hidden" name="MAX_FILE_SIZE" value="67108864"/>
    </div>
  

  
      
      <input value="Post and send email" type="submit" name="submit" class="btn btn-success btn-lg btn-block" id="post"/>
   

 </form>
<br>

<br><br>

<p for="exampleForm2" class="det"><b>DETAILS OF STUDENTS REGISTERED</b></p>
   <a href="semtable.html">
      <button type="button" class="btn btn-warning btn-lg btn-block">Semester end examination</button>
   </a>

<br>
   <a href="fasttable.html">
      <button type="button" class="btn btn-warning btn-lg btn-block"> Fast Track Semester  examination</button>
  </a>
<br>





  </body>
</html>