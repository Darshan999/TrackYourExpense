<?php

    if(isset($_POST["signup"]))
    {

              $user_email_id=$_POST["email"];
              $user_name=$_POST["username"];    
              $user_password=$_POST["password"];   
              $user_cpassword=$_POST["password2"];      
              $user_photo='null';         
              $user_mobile_no='null';         
              $gender='null';                  
             

    
          if($user_password==$user_cpassword)
          {
        include 'database.php';
        $res=new  database();
        $res->insertuser($user_email_id,$user_name,$user_password,$user_mobile_no,$user_photo,$gender);
        
       header('location:main.php');
          }   
         

        else
        {
            
      echo '<script language="javascript">;
                    alert("Your Password And Confirm Password Not Match");
                    window.location.href="signup.php";
                    </script>';
        }



    
 }   
    
?>


