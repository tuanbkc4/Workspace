<?php
	ob_start();
    session_start();
	// session_destroy();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Form User | VinaEnter Edu</title>  
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all"/>
<style>
	.error{
		color: red;
		display: block;
		margin: 12px 0;
		font-style: italic;
	}
</style>
</head>
<body>
	<!-- login starts here -->
	<div class="login agile">
		<div class="w3agile-border">
			<h2>Login Form | VinaEnter Edu</h2>
			<div class="login-main login-agileits"> 
				<h1>Login</h1> 
				<?php
					if(isset($_POST["submit"])){
						$mail = trim($_POST["mail"]);
						$pass = trim($_POST["Password"]);
						$avt = $_FILE["avatar"]["name"];
						if(empty($mail) && empty($pass) && empty($avt)){
							echo '<p style="color:#fff;">Vui lòng điền đầy đủ thông tin</p><br/>';
						}
						if($mail=="info@vinaenter.edu.vn" && $pass=="123456") {
							//upload file
							$name = $_FILES["avatar"]["name"];
							$tmp_name = $_FILES["avatar"]["tmp_name"];
							$tmp = explode('.',$name);
							$extension_file = end($tmp);
							$newName = "avt-".time().rand(1,100).'.'.$extension_file;
							$path_upload = "avatar/" . $newName;
							move_uploaded_file($tmp_name, $path_upload);
							$_SESSION['email']=$mail;
							$_SESSION['nameAvt']=$newName;
							
						}else{
							$notification ="<p style='color:red;font-style:italic;text-align:center;'>Tài khoản hoặc mật khẩu sai, vui lòng nhập lại!!</p>";
						}	
						$_SESSION['email']=$mail;
						$_SESSION['nameAvt']=$newName;			
						header("location:success.php");
                    
					}
				?>
				<form action="#" method="post" enctype="multipart/form-data" id="FormLogin">
					<p>Email (*)</p>
					<input type="text" placeholder="example@gmail.com" name="mail" >
					<p>Password (*)</p>
					<input type="password" placeholder="Password" name="Password" >
					<p>Avatar</p>
					<input type="file" name="avatar"  >
					<input type="submit" value="Login" name="submit">
				</form>
				<?php
					if(isset($notification)){
						echo $notification;
					}
				?>
			</div>
		</div> 
	</div>
	<script type="text/javascript" src="./js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="./js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="./js/code.js"></script>
</body>
</html>
<?php
	ob_end_flush();
?>