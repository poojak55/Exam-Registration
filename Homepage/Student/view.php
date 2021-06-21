<?php 

$conn = new mysqli('localhost', 'root', '', 'project_work');
                // Check connection
                $id=$_GET['id'];

                    $sql = "SELECT type,pdf_doc from annoncements where id=$id;";
                    
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    header('Content-Type:'.$row["type"]);
                    echo $row["pdf_doc"];
                

                
                
                
                
