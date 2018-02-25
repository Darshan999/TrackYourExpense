<?php

    session_start();

?>
 <?php
 
            $password=$_POST["txtpass"];
            $email=$_POST["txtemail"]; 
            require 'database.php';
            $obj=new database();
            $res=$obj->login($email,$password);
            $cnt=mysql_num_rows($res);
           // echo $email;
           // echo $password;
            if($cnt==1)
            {

                while($row=mysql_fetch_array($res))
                {
                    $user_email_id=$row["user_email_id"];
                    $_SESSION["user_email_id"]=$user_email_id;
                	  
                    header('location:main.php');
                      
                   
                }

            }
            else
            {
                echo '<script langauge="javascript">;
                                    alert("Invalid Username Or Password");
                                    window.location.href="index.php";
                                    </script>';
             
            }
            
    
 ?>
