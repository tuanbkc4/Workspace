<!DOCTYPE HTML>
<html>
    <?php
        include_once('./includes/head.php');
    ?>

    <body>
        <?php
            include_once('./includes/banner.php');
        ?>
        <div class="content">
            <div class="container">
                <div class="content-grids">
                    <?php
                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];
                    } else {
                        $page = 'home';
                    }

                    if (file_exists('pages/' . $page . '.php')) {
                        if($page != 'lien-he'){
                            include_once('pages/' . $page . '.php');
                            include_once('./pages/right_bar.php');
                        }else {
                            include_once('pages/' . $page . '.php');
                        };                        
                    } else {
                        echo 'Lỗi tải trang';
                    }
                    ?>
                </div>
            </div>
        </div>

        <?php
            include_once('./includes/footer.php');
        ?>
    </body>

</html>