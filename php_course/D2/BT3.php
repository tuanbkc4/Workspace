<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bài 3</title>
    <style>
        body{
            display: flex;
        }
        label{
            margin-left: 12px;
        }
        .wrapper{
            margin: 50px auto;
            border: 1px solid #000;
            border-radius:5px;
            padding: 0 12px 28px;
            display: inline-block;
            
        }
        .wrapper:hover{
            box-shadow: 0 2px 10px #34D5E8;
            border: 1px solid #344DE8;
        }
    </style>
</head>
<body>
    <?php
        $years=range(1950,2021);
        $months=range(1,12);
        $days=range(1,31);
    ?>
    <div class="wrapper">
        <h3>Ngày sinh</h3>
        <form action="">
            <label>Ngày</label>
            <select>
                <option value="" selected >-- Chọn ngày --</option>
                <?php
                    foreach ($days as $day ){                    
                ?>
                    <option value="<?php echo $day ?>"><?php echo $day ?></option>
                <?php
                    }
                ?>
            </select>
            <label for="">Tháng</label>
                <select>                    
                    <?php
                        foreach ($months as $month ){  
						if($month ==7){
                    ?>
                        <option value="<?php echo $month ?>" selected><?php echo "Tháng $month" ?></option>
                    <?php
						}else{
							
                        
                    ?>
						<option value="<?php echo $month ?>" ><?php echo "Tháng $month" ?></option>
					<?php 
						}}
					?>
					
					
                </select>
				
				<select>                    
                    <?php
                    foreach ($months as $month ){  
						if($month ==7){
					?>
                        <option value="<?php echo $month ?>" selected><?php echo "Tháng $month" ?></option>
						<?php 
						} else{
						?>
						<option value="<?php echo $month ?>" ><?php echo "Tháng $month" ?></option>
					<?php 
						}
					}
					?>
                </select>
				<select>                    
                    <?php
					$selected = "";
                    foreach ($months as $month ){  
						if($month ==7){ $selected = " selected"; }
					?>
					<option value="<?php echo $month ?>" <?php echo $selected?> ><?php echo "Tháng $month" ?></option>
					<?php }?>
                </select>
            <label for="">Năm</label>
            <select>
                <option value="" selected >-- Chọn năm --</option>
                <?php
                    foreach ($years as $year ){                    
                ?>
                    <option value="<?php echo $year ?>"><?php echo $year ?></option>
                <?php
                    }
                ?>
            </select>
        </form>
    </div>
</body>
</html>