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
    <title>Login</title>
    <link rel="stylesheet" href="./assets/css/register.css">
</head>
<body>
    <div class="wrapper">
        <div class="heading">Login</div>
        <?php
            $userErr ="";
            $passErr ="";
            $notification="";
            

            if(isset($_POST["submit"])){
                $user = trim($_POST["username"]);
                $pass = trim($_POST["password"]);
                echo $_SESSION['user'];
                echo $_SESSION['pass'];
                echo $user;
                echo $pass;
                // echo strlen($pass);
                
                // echo strlen($_SESSION['pass']);
                
                if (empty($user)){
                    $userErr ="* username is required";
                }
                if (empty($pass)){
                    $passErr ="* password is required";
                }                
                if($user == $_SESSION['user'] && $pass == $_SESSION['pass']){
                    header("Location:home.php");
                }else{
                    $notification="account or password is not wrong";
                }
                
                
            }
        ?>	
        <form action="" method="post" class="form_input" enctype="multipart/form-data">
            <div class="form-row">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" value="<?php echo $_SESSION['user']?>	" >
            </div>
                <span class="error"><?php echo $userErr; ?></span>
            <div class="form-row">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" >
            </div>
                <span class="error"><?php echo $passErr; ?></span>
            
            <div class="form-row">
                <input type="submit" value="Login" name="submit">
            </div>
            <?php
                if($notification != ""){
                    echo "<span class='errNotification'> $notification </span>";
                }
            ?>
            <p>not a member? <a href="login.php">Sign up</a></p>
    
        </form>
        
    </div>
</body>
</html>
<?php
    ob_end_flush();
?>	