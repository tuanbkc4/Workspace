<?php
include_once('inc/header.php');
?>
<div class="contact">
	<div class="container">
		<div class="contact-head">
			<h3>Liên hệ</h3>
			<?php
				$name = "";
				$email = "";
				$phone = "";
				$message = "";
				$nameErr = "";
				$emailErr = "";
				$phoneErr = "";
				if(isset($_POST["submit"])){
					$name = $_POST["name"];
					$email = $_POST["email"];
					$phone = $_POST["phone"];
					$message = $_POST["message"];

					//validate 
					if($name == ""){
						$nameErr = "Vui lòng nhập name";
					}
					if($phone == ""){
						$phoneErr = "Vui lòng nhập phone";
					}
					if($email == ""){
						$emailErr = "Vui lòng nhập email";
					}

					//insert

					if($name != "" && $email != "" && $phone != ""){
						$sql = "INSERT INTO contact(name,email,phone,content) VALUES ('$name', '$email', $phone, '$message')";
						$connect -> query($sql);
						$connect -> close();
						?>
							<script>
								alert('Gửi thông tin thành công!');
							</script>
						<?php
						
					}
				}

			?>
			<form action="" method="post">
				<div class="col-md-6 contact-left">
					<input type="text" name="name" placeholder="Name" value="<?php echo $name;?>" >
					<span class="error"><?php echo $nameErr?></span>
					<input type="text" name="email" placeholder="E-mail" value="<?php echo $email;?>" >
					<span class="error"><?php echo $emailErr?></span>
					<input type="text" name="phone" placeholder="Phone" value="<?php echo $phone;?>" >
					<span class="error"><?php echo $phoneErr?></span>
				</div>
				<div class="col-md-6 contact-right">
					<textarea name="message" placeholder="Message"><?php echo $message;?></textarea>
					<input type="submit" name="submit" value="SEND">
				</div>
				<div class="clearfix"></div>
			</form>
		</div>
	</div>
</div>
<style>
	.error{
		font-style: italic;
		color: red;
		font-size: 16px;
		margin-bottom: 16px;
		margin-left: 4px;
		display:block;
	}
	input{
		margin-bottom: 12px !important;
	}
</style>
<?php
include_once('inc/footer.php');
?>