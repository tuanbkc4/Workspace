$(document).ready(function() {
    $('#FormLogin').validate({
        rules: {
            mail: {
                required: true,
                email: true
            },
            Password: {
                required: true
            },
            avatar: {
                required: true
            }
        },
        messages: {
            mail: {
                required: 'Vui lòng nhập Email',
                email: 'Email không hợp lệ'
            },
            Password: {
                required: 'Vui lòng nhập password'
            },
            avatar: {
                required: 'Vui lòng chọn avatar'
            }
        }
    });
});