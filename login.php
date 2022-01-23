 <?php
session_start();
require_once "regdb.php";

 if (isset($_POST['submit'])) 
 {

   $username=$_POST['name'];
   $password=$_POST['password'];
   $error= array();
   $query="SELECT * FROM reg_info Where Name='$username' AND Password='$password'";
   $result= mysqli_query($link, $query);
   if($result->num_rows)
   {
      header("location:welcome.php");
   }
   else
{
      echo $error["error"]="username or password doesnot exists";
    
}
 }
 session_destroy();
 
?>



 <!DOCTYPE html>    
    <html>    
    <head>    
        <title>Login Form</title> 
        <link rel="stylesheet" type="text/css" href="style.css">  
        <script src="https://use.fontawesome.com/f8a647e764.js"></script>  
    </head>    
    <body>
    <center>    
            
        <div class="login">    
        <form id="login" method="get" action="login.php">    
           
<h1>Sign In</h1><br>
              
               <div class="Pass">
    <input type="text" placeholder="username" name="Uname" id="Pass" value=""  >
    </div>
    <div class="Pass">
       <input type="password" placeholder=" Password" name="Password" id="Pass" value="">
     </div>
      <a href=\"forgot-password.php\" style="font-size: 10px; float: right;
             ">Forgot password?</a><br>  
                
    <label>
      <input type="checkbox" checked="checked" name="remember me" style="margin-bottom:15px; font-family: verdana";> Remember me
    </label>

  
<center>
    <div class="clearfix">

      <button type="submit" class="signupbtn">Sign In</button>
      <br><br><br>
           Don't have an account yet? <a href=\"signin.php\" style="font-size: 10px" >sing up?</a><br> 
            </center>

    </div>
  </center>
  </div>
</form> 
</body>    
</html>