<div class="header">
    <div class="container">
        <div class="logo">
            <a href="#"> <img src="images/logo.png" title="soup" /></a>
        </div>
        <!---start-top-nav---->
        <div class="top-menu">
            <span class="menu"> </span>
            <ul>
                <li class="active"><a href="index.html">Trang chủ</a></li>
                <li><a href="admin">Quản lý</a></li>
                <div class="clearfix"> </div>
            </ul>
        </div>
        <div class="clearfix"></div>
        <script>
            $("span.menu").click(function() {
                $(".top-menu ul").slideToggle("slow", function() {});
            });
        </script>
        <!---//End-top-nav---->
    </div>
</div>