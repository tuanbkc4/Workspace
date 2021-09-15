<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>VinaEnter EDU</title>
	    <script type="text/javascript" src="jquery-2.1.1.min.js"></script>

	</head>
	<body>
		<h1>JQuery - ajax</h1>	
		
		<div class="jquery-demo-input">
			Tên hoa: Hoa hồng <br />
			Đơn giá: 200.000 VNĐ<br />			
			Số lượng hoa: 
			<input type="text" value="" id="soluong1" />
			<a href="javascript:void(0)" title="" onclick="getInfo ()">Mua</a>	
		</div>	
		<div class='ajax_demo'></div>
		<script type='text/javascript'>
			function getInfo() {
				var soluong = $("#soluong1").val();
				var gia = 200000;
				$.ajax({
					url : "ajax.php",
					type : "POST",
					cache : false,
					data : {soluong : soluong, gia : gia},
					success : function (data){
						$(".ajax_demo").html(data);
					},
					error : function () {
						alert ("Đã có lỗi xảy ra");
					}
				});
			}
			
		</script>
		
	</body>
</html>