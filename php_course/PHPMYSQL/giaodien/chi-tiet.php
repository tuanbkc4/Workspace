<?php
	include_once('inc/header.php');
?>
<div class="content">
	<div class="container">
		<div class="content-grids">
			<div class="col-md-8 content-main">
				<div class="content-grid">
					<?php
					$fid = $_GET['fid'];
					//-------------
					$sql1 = "SELECT * FROM friends WHERE fid = $fid";
					$result1 = $connect->query($sql1);
					$friend = $result1->fetch_assoc();
					//-------------
					$flid = $friend['fl_id'];
					$sql2 = "SELECT * FROM friend_list WHERE fl_id = $flid";
					$result2 = $connect->query($sql2);
					$friend_list = $result2->fetch_assoc();

					?>
					<div class="content-grid-head">
						<h3 style="text-transform:uppercase;"><?php echo $friend_list['fl_name']; ?></h3>
						<h4><?php echo 'Đăng ngày: ' . $friend['date_create'] . ' - Lượt xem: ' . $friend['count_number']; ?></h4>
						<div class="clearfix"></div>
					</div>
					<div class="content-grid-single">
						<h3><?php echo $friend['fname']; ?></h3>
						<div class="detail_text">
							<img class="single-pic" src="<?php echo 'images/' . $friend['picture']; ?>" alt="">
							<p><?php echo $friend['detail']; ?></p>
						</div>
						<div class="comments">
							<h3>Bạn thân khác của tôi</h3>
							<?php
							$sql3 = "SELECT * FROM friends WHERE fid <> $fid LIMIT 2";
							$result3 = $connect->query($sql3);
							while ($friends = $result3->fetch_assoc()) {
								$fid = $friends['fid'];
							?>
								<div class="comment-grid">
									<img src="<?php echo 'images/' . $friends['picture']; ?>" alt="">
									<div class="comment-info">
										<h4><a href="chi-tiet.php?fid=<?php echo $fid ?>"><?php echo $friends['fname']; ?></a></h4>
										<p><?php echo $friend['preview']; ?></p>
									</div>
									<div class="clearfix"></div>
								</div>
							<?php
							}
							?>

						</div>
					</div>

				</div>
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
