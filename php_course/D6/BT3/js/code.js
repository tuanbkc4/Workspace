var getItems = document.querySelectorAll('.item-link');
console.log(getItems);

getItems.forEach(function(item, index) {
    item.onclick = function() {
        // console.log(item, index);
        $.ajax({
            url: 'ajax.php',
            type: 'POST',
            cache: false,
            data: { index: index },
            success: function(data) {
                $('#video-youtube').html(data);
            },
            error: function() {
                alert('Đã có lỗi xảy ra');
            }
        });
    };
});