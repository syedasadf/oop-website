<?php
session_start();
require_once "regdb.php";
 
$username = $password = $confirm_password  = $email =  "";
$username_err = $password_err = $confirm_password_err =  $email_err  = "";
 

if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    
    if(empty(trim($_POST["name"]))){
        $username_err = "Please enter a name.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["name"]))){
        $username_err = "Name can only contain letters, numbers, and underscores.";
    } else{
        
        $sql = "SELECT id FROM reg_info WHERE Name = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
        
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            
            $param_username = trim($_POST["name"]);
            
        
            if(mysqli_stmt_execute($stmt)){
            
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["name"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

    
            mysqli_stmt_close($stmt);
        }
    }
    
    
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }

    

    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter a email.";     
    } 
     else{
        $email = trim($_POST["email"]);
    }

    

    if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($email_err)){
        
        
        $sql = "INSERT INTO reg_info (Name, Password ,Email ) VALUES (?, ? , ? )";
         
        if($stmt = mysqli_prepare($link, $sql)){
            
            mysqli_stmt_bind_param($stmt, "sssss", $param_username, $param_password, $param_email );
            
            
            $param_username = $username;
            $param_email= $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT); 
            
            if(mysqli_stmt_execute($stmt)){
            
                header("location: successfuly.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            mysqli_stmt_close($stmt);
        }
    }
    
    
    mysqli_close($link);
}
?>


 <html>    
<head>    
    <title>Login Form</title>    
    <link rel="stylesheet" type="text/css" href="style.css">    
</head>    
<body>    
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  <div class="login">
    <h1>Sign Up</h1>

    <div class="Pass">
    <input type="text" placeholder="Full name" name="name" id="Pass" value="" ></div>


    <div class="Pass">
    <input type="text" placeholder=" Email" name="email" id="Pass" value=""><div>


    <div class="Pass">
    <input type="password" placeholder=" Password" name="password" id="Pass" value=""></div>

    <div class="Pass">
    <input type="password" placeholder="confirm Password" name="confirm_password" id="Pass" value=""></div>

    <label>
      <input type="checkbox" checked="checked" name="I agree the term and conditions" style="margin-bottom:15px; font-family: verdana";> I agree the term and conditions
    </label>

  
<center>
    <div class="clearfix">
      <button type="submit" class="cancelbtn" onclick="Login.php">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </center>
  </div>
</form> 
</body>    
</html>