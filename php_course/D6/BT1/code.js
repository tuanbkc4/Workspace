$(document).ready(function() {
    $('#formBuyFL').validate({
        rules: {
            id_flower: {
                required: true,
                digits: true
            },
            name_flower: {
                required: true,
            },
            quantity: {
                required: true,
            },
            price: {
                required: true,
                number: true
            },
        },
        messages: {
            id_flower: {
                required: "Vui lòng nhập id",
                digits: "Vui lòng nhập số nguyên dương"
            },
            name_flower: {
                required: "Vui lòng nhập tên hoa",
            },
            quantity: {
                required: "Vui lòng nhập số lượng",
            },
            price: {
                required: "Vui lòng nhập giá bán"
            },
        }
    });



});

function getInfo() {
    var id = $('#id_flower').val();
    var name = $('#name_flower').val();
    var quantity = $('#quantity').val();
    var price = $('#price').val();

    $.ajax({
        url: "basket.php",
        type: "GET",
        cache: false,
        data: { id: id, name: name, quantity: quantity, price: price },
        success: function(data) {
            $("#ArbuyFL").html(data);
        },
        error: function() {
            alert("Đã có lỗi xảy ra");
        }

    });
};