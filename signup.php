<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Sign up</title>
  
  
  
      <link rel="stylesheet" href="css/signup.css">

  <!--validation -->
<script language="JavaScript">
<!--
function email_validate(u_email_id)
{

var regMail = /^([_a-zA-Z0-9-]+)(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,3})$/;

if(regMail.test(u_email_id) == false)
{

//document.getElementById("status").innerHTML = "Email address is not valid yet.";
alert("Email address is not valid yet.");
}
else
{

//document.getElementById("status").innerHTML = "You have entered a valid Email address!";
//alert(" valid");
}
}
-->
</script>

<script type="text/javascript">
$(document).ready(function(){
$("#test4").keyup(function() {
    var val = $("#test4").val();
    if (parseInt(val) < 0 || isNaN(val)) {
        alert("Please Enter Only Numeric Values");
        $("#test4").val("");
        $("#test4").focus();
    }
});
});
</script>

<script type="text/javascript">
  
  function allLetter(u_name)
{
  var letters=/^[A-Za-z]+$/;
  if(u_name.value.match(letters))
  {
      return true;
  }
  else
  {
      
      u_name.value="";
      u_name.focus();
      alert(' Name must have Alphabetic characters only');
      return false;
  }
}

</script>

<script type="text/javascript">
  
  function allNumeric(u_mobile_no)
{
  var letters=/^[0-9-+]+$/;
  if(u_mobile_no.value.match(letters))
  {
      return true;
  }

  else
  {
      
      u_mobile_no.value="";
      u_mobile_no.focus();
      alert(' Mobile Number must have Numerics only');
      return false;
  }

}

</script>


<script type="text/javascript">
function validation()
{
var a = document.form.pass.value;
if(a=="")
{
alert("Please Enter Your Password");
document.form.pass.focus();
return false;
}
if ((a.length < 4) || (a.length > 8))
{
alert("Your Password must be 4 to 8 Character");
document.form.pass.select();
return false;
}
}
</script>

<script>
function passid_validation(passid,mx,my)
{
  mx=5;
  my=12;
  var pl=passid.value.length;
  if(pl==0 || pl>my || pl<mx)
  {
    alert("Password should be of 5-12 digits only ");
    passid.value="";
    passid.focus();
    return false;
  }
  return true;
}
</script>

<script>
function passid_validation1(passid,mx,my)
{
  mx=5;
  my=12;
  var pl=passid.value.length;
  if(pl==0 || pl>my || pl<mx)
  {
    alert("Password should be of 5-12 digits only ");
    passid.value="";
    passid.focus();
    return false;
  }
  return true;
}
</script>


  
</head>

<body>

  <div id="login-box">
  <div class="left">
    <form action="register.php" method="post" enctype="multipart/form-data">
    <h1>Sign up</h1>
    
    <input type="text" name="username" placeholder="Name " onblur="return allLetter(username);" required="" />
    <input type="text" name="email" onblur="email_validate(this.value);" placeholder="Email_Id " required="" />
    <input type="password" name="password" onblur="return passid_validation(password);" placeholder="Password"  required=""  />
    <input type="password" name="password2" onblur="return passid_validation(password2);" placeholder="Re-Enter Password" required="" />
    
    <input type="password" name="password2" onblur="return passid_validation(password2);" placeholder="Re-Enter Password" required="" />
    
    <input type="submit" name="signup" value="Sign me up" />
    </form>
  </div>
  
  <div class="right">
    <span class="loginwith">Sign in with<br />social network</span>
    
    <button class="social-signin facebook">Log in with facebook</button>
    <button class="social-signin twitter">Log in with Twitter</button>
    <button class="social-signin google">Log in with Google+</button>
  </div>
  <div class="or">OR</div>
</div>
  
  

</body>

</html>
