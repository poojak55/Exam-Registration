<?php

$conn = new mysqli('localhost', 'root', '', 'project_work');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else
{
    $usn=$_SESSION["usn"];
    $old_pass=$_POST["old_password"];
    $sql_std = "SELECT Password FROM login_details WHERE USN='$usn'";
    $result_std = $conn-> query($sql_std);

         if($result_std-> num_rows > 0){
                           while ($row = $result_std-> fetch_assoc()){
                               if($old_pass==$row["Password"]){
                                    $new_pass=$_POST["new_password"];
                                    $renew_pass=$_POST["renew_password"];
                                   if($new_pass==$renew_pass){
                                       $sql2_std="UPDATE `login_details` SET `Password`='$new_pass' WHERE `USN`='$usn'";
                                      if( $result2_std = $conn-> query($sql2_std)){
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
                        $conn->close();
}