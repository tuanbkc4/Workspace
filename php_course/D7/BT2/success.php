<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>CPANEL | VinaEnter Edu</title>  
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>
	<!-- login starts here -->
	<div class="login agile">
		<div class="w3agile-border">
			<h2>TRANG QUẢN TRỊ VIÊN</h2>
			<div class="login-main login-agileits"> 
				<p>Chúc mừng <?php echo $_SESSION['email']; ?> đã đăng nhập thành công</p>
				<p>Avatar của bạn: </p>
				<img src="<?php echo 'avatar/'.$_SESSION['nameAvt'];?>" width="50px" height="50px"  />
			</div>
		</div> 
	</div>
	<?php
		
	?>
</body>
</html>