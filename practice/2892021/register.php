<?php
    ob_start();
    session_start();
?>	
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./assets/css/register.css">
</head>
<body>
    <div class="wrapper">
        <div class="heading">CREATER ACOUNT</div>
        <?php
            $userErr ="";
            $passErr ="";
            $confirmPassErr ="";
            $avtErr ="";
            if(isset($_POST["submit"])){
                $user = trim($_POST["username"]);
                $pass = trim($_POST["password"]);
                $confirmPass = trim($_POST["confirm_password"]);

                if (empty($user)){
                    $userErr ="* username is required";
                }
                if (empty($pass)){
                    $passErr ="* password is required";
                }
                if (empty($confirmPass)){
                    $confirmPassErr ="* confirm password is required";
                } elseif($confirmPass != $pass ) {
                    $confirmPassErr ="* the password confirmation does not match";
                }
                if (empty($_FILES["avt"]["name"])){
                    $avtErr ="* avt is required";
                    
                }else{
                    $name = $_FILES["avt"]["name"];
                    $tmp_name = $_FILES["avt"]["tmp_name"];
                    $tmp = explode(".", $name);
                    $extension_file = end($tmp);
                    $newName = "avt-".time().".".$extension_file;
                    $path_upload = "assets/img/avt/".$newName;
                    move_uploaded_file($tmp_name, $path_upload);
                    $_SESSION["avt"] = $newName;
                }
                if( $userErr == "" && $passErr == "" && $confirmPassErr == "" && $avtErr =="") {
                    $_SESSION["user"] = $user;
                    $_SESSION["pass"] = $pass;
                    
                    header("Location:login.php");
                }
                
                
            }
        ?>	
        <form action="" method="post" class="form_input" enctype="multipart/form-data">
            <div class="form-row">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" >
            </div>
                <span class="error"><?php echo $userErr; ?></span>
            <div class="form-row">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" >
            </div>
                <span class="error"><?php echo $passErr; ?></span>
            <div class="form-row">
                <label for="confirm_password">Confirm password</label>
                <input type="password" name="confirm_password" id="confirm_password" >
            </div>
                <span class="error"><?php echo $confirmPassErr; ?></span>
            <div class="form-row">
                <label for="avt">Avatar</label>
                <input type="file" name="avt" id="avt" class="avt" >
            </div>
                <span class="error"><?php echo $avtErr; ?></span>
            <div class="form-row">
                <input type="submit" value="sign up" name="submit">
            </div>
            <p>have already an acount? <a href="login.php">login here</a></p>
    
        </form>
        
    </div>
</body>
</html>
<?php
    ob_end_flush();
?>	