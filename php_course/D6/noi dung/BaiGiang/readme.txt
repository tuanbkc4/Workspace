<script type="text/javascript">
function getProductInfo(soluong, ten, gia){
	$.ajax({
		url: 'ajaxcomment.php',
		type: 'POST',
		cache: false,
		data: {asoluong: soluong, aten: ten, agia: gia},
		success: function(data){
			$('.jquery-demo-ajax').html(data);
		},
		error: function (){
			alert('Có lỗi xảy ra');
		}
	});
	return false;
}
</script>