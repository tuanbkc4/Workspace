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
						// $avt = $_FILE["avatar"];
						if(empty($mail) && empty($pass) /*&& isset($avt)*/){
							echo '<p style="color:#fff;">Vui lòng điền đầy đủ thông tin</p><br/>';
						}
						if($mail="info@vinaenter.edu.vn" && $pass="123456") {
							$name = $_FILES["file"]["name"];
							$tmp_name = $_FILES["file"]["tmp_name"];
							$tmp = explode('.',$name);
							$extension_file = end($tmp);
							$newName = "avt-".time().rand(1,100).'.'.$extension_file;
							$path_upload = "./" . $newName;
							move_uploaded_file($tmp_name, $path_upload);
						}else{
							echo 'Tài khoản hoặc mật khẩu sai, vui lòng nhập lại!!'
						}				
                        
                    
					}
				?>
				<form action="#" method="post" enctype="multipart/form-data" id="FormLogin">
					<p>Email (*)</p>
					<input type="text" placeholder="example@gmail.com" name="mail" >
					<p>Password (*)</p>
					<input type="password" placeholder="Password" name="Password" >
					<p>Avatar</p>
					<input type="file" name="avatar[]" multiple >
					<input type="submit" value="Login" name="submit">
				</form>
				<?php
					
				?>
			</div>
		</div> 
	</div>
	<script type="text/javascript" src="./js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="./js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="./js/code.js"></script>
</body>
</html>