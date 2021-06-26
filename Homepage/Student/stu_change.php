<?php

$conn = new mysqli('localhost', 'root', '', 'project_work');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else
{
    $usn=$_SESSION["usn"];
    $old_pass=$_POST["old_password"];
    $sql = "SELECT Password FROM login_details WHERE USN='$usn'";
    $result = $conn-> query($sql);

         if($result-> num_rows > 0){
                           while ($row = $result-> fetch_assoc()){
                               if($old_pass==$row["Password"]){
                                    $new_pass=$_POST["new_password"];
                                    $renew_pass=$_POST["renew_password"];
                                   if($new_pass==$renew_pass){
                                       $sql2="UPDATE `login_details` SET `Password`='$new_pass' WHERE `USN`='$usn'";
                                      if( $result2 = $conn-> query($sql2)){
                                        echo "<script type='text/javascript'> 
                                        alert('Password changed Sucessfully!!!!');
                                        
                                        </script>"; 
                                      }
                                      else{
                                        echo "<script type='text/javascript'> 
                                        alert('Something is wrong in server side!!!!');
                                        
                                        </script>";
                                      }
                                   }
                                   else{

                                    echo "<script type='text/javascript'> 
                                    alert('Passwords do not match!!!!');
                                    
                                    </script>";
                                   }
                               }
                               else{
                                echo "<script type='text/javascript'> 
                                alert('Old Password is incorrect!!!!');
                                
                                </script>";
                               }
                            }
                        }
}