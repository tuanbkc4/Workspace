<?php
	include_once('inc/header.php');
?>
<div class="content">
	<div class="container">
		<div class="content-grids">
			<div class="col-md-8 content-main">
				<h1 class="title">Những người bạn</h1>
				<?php
					$sql='SELECT * FROM friends';
					$result = $connect -> query($sql);
					while ($friends = $result->fetch_assoc()) {
						// $fl_id = $friends['fl_id'];
						$fid = $friends['fid'];
						$fname = $friends['fname'];
						$preview = $friends['preview'];
						$date = $friends['date_create'];
						$count_number = $friends['count_number'];
						$picture = $friends['picture'];
						?>
							<div class="content-grid-sec">
								<div class="content-sec-info">
									<h3><a href="chi-tiet.php?fid=<?php echo $fid?>"><?php echo $fname;?></a></h3>
									<h4>Đăng ngày: <?php echo $date;?>  -  Lượt xem: <?php echo $count_number;?></h4>
									<p><?php echo $preview;?></p>
									<img src="<?php echo 'images/'.$picture;?>" alt="" />
									<a class="bttn" href="chi-tiet.php?fid=<?php echo $fid?>">Chi tiết bạn tôi</a>
								</div>
							</div>
						<?php
					}
				?>	
				
			</div>

			<?php
				include_once('inc/right-bar.php');
			?>

			<div class="clearfix"></div>
		</div>
	</div>
</div>
<?php
	include_once('inc/footer.php');
	$connect -> close();
?>