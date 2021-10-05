
<?php
    session_start();
    ob_start();
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            display: inline-block;
        }
        label{
            min-width: 50px;
            display: inline-block;
        }
        .form_input{
            margin-bottom: 8px;
        }
        input[type="submit"]{
            display:block;
            margin-left: 64px;
        }
        .error{
            color: red;
            font-style: italic;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <?php
        $userErr ="";
        $passErr ="";
        $user="";
        $pass="";
        $notification="";
        if(isset($_POST['submit'])){
            $user = $_POST['username'];
            $pass = $_POST['password'];
            if(empty($user)){
                $userErr ="* username is required";
            }
            if(empty($pass)){
                $passErr ="* password is required";
            }
            if($user!="" && $pass!=""){
                $notification = "Tài khoản hoặc mật khẩu không đúng";
            } 
            if($user == "vinaenter.edu.vn" && $pass == "12344321"){
                $_SESSION['user']= array('username' => $user, 'password' => $pass );
                header("location:https://www.24h.com.vn/");
            }
               
            
        }
        
        
    ?>
    <form action="" method="post">
    <div class="form_input">
        <label for="">username</label>
        <input type="text" name="username" value="<?php echo $user;?>" >
        <span class="error"><?php echo $userErr ?></span>
    </div>
    <div class="form_input">
        <label for="">password</label>
        <input type="text" name="password" value="<?php echo $pass;?>" >
        <span class="error"><?php echo $passErr ?></span>

    </div>
    <input type="submit" name="submit" value="submit">
    <span class="error"><?php echo $notification ?></span>    	
    </form>
    
</body>
</html>
<?php
 ob_end_flush();
?>
