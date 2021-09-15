<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>VinaEnter Edu - Web tin tức</title>
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="robots" content="index, follow" />
	<meta name="keywords" content="tin tuc viet nhat, tin tức việt nhật, tin nhật bản, tin nhat ban" />
	<meta name="description" content="Tin tức Việt - Nhật, cập nhật liên tục hằng ngày" />
	<link href="styles.css" type="text/css" rel="stylesheet" />

</head>

<body>
	<a name="totop"></a>
	<div class="wrapper">
		<?php
			include_once 'pages/header.php';
		?>

		<div id="main-body">
			<div class="main-content">
				<?php
					include_once 'pages/left_bar.php';
				?>
				<?php
					if (isset($_GET['page'])) {
						$page = $_GET['page'];
					} else {
						$page = 'home';
					}

					if (file_exists('pages/'.$page.'.php')) {
						include_once('pages/'.$page.'.php');
					} else {
						echo 'Trang không tồn tại';
					}
				?>

				<div class="clr"></div>
			</div>
		</div>
		<?php
			include_once 'pages/footer.php';
		?>

	</div>
</body>

</html>