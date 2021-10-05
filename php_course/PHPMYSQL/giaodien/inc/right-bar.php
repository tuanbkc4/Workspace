<div class="col-md-4 content-main-right">
    <div class="search">
        <h3>TÌM BẠN TÔI</h3>
        <form>
            <input type="text" value="" onfocus="this.value=''" onblur="this.value=''">
            <input type="submit" value="">
        </form>
    </div>

    <div class="categories">
        <h3>DANH MỤC BẠN BÈ</h3>
        <?php
            $sql='SELECT * FROM friend_list';
            $result = $connect ->query($sql);
            while($friend_list = $result->fetch_assoc()){
                $fl_id = $friend_list['fl_id'];
                $fl_name = $friend_list['fl_name'];
                ?>
                    <li class="active"><a href="danh-muc.php?flid=<?php echo $fl_id?>"><?php echo $fl_name;?></a></li>
                <?php
            }
        ?>	
        <!-- <li class="active"><a href="danh-muc.html">Bạn quen thời phổ thông</a></li>
        <li><a href="danh-muc.html">Bạn quen thời đại học</a></li>
        <li><a href="danh-muc.html">Bạn tâm giao</a></li> -->
    </div>

    <div class="archives">
        <h3>Liên kết VinaEnter</h3>
        <li class="active"><a href="http://vinaenter.edu.vn/lap-trinh-php-tu-az.html" target="_blank"><img width="100%" src="images/php.png" alt="" /></a></li>
        <li><a href="http://vinaenter.edu.vn/lap-trinh-java-tu-az.html" target="_blank"><img width="100%" src="images/java.png" alt="" /></a></li>
        <li><a href="http://vinaenter.edu.vn/lap-trinh-android-tu-az.html" target="_blank"><img width="100%" src="images/android.png" alt="" /></a></li>
    </div>
</div>