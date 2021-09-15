<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>VinaEnter EDU - Đã học là làm được</title>
	<meta name="description" content="Thiet ke website, dao tap lap trinh">
	<meta name="keywords" content="thiet ke website, dao tap lap trinh">
	<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="main">
		<div class="page">
			<?php
			include_once 'pages/header.php';
			?>

			<div class="content">
				<?php
				include_once 'pages/left_bar.php';
				?>
				<?php
					if(isset($_GET['page'])){
						$page = $_GET['page'];
					}else{
						$page = 'home';
					}
					if(file_exists('pages/'.$page.'.php')){
						include_once 'pages/'.$page.'.php';
					}else{
						echo 'Lỗi tải trang';
					}
				?>
			</div>
			<?php
				include_once 'pages/footer.php';
			?>
		</div>
	</div>
</body>

</html>
