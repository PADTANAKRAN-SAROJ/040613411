<?php include "connect.php" ?>
<html><head><meta charset="utf-8"></head>
    <body>
        <form>
            <input type="text" name="keyword">
            <input type="submit" value="ค้นหา">
        </form>
        <div style="display:flex">
            <?php
                $stmt = $pdo->prepare("SELECT * FROM member WHERE name LIKE ?");
                if (!empty($_GET))
                $value = '%' . $_GET["keyword"] . '%'; 
                $stmt->bindParam(1, $value); 
                $stmt->execute();
            ?>

            <?php 
            $i = 1 ;
            while ($row = $stmt->fetch()) : ?>
                <div style="padding: 15px; text-align: center">
                    <img  src='member_photo/<?=$i?>.jpg' width='100'><br>
                    ชื่อ : <?=$row ["name"]?><br> 
                    ที่อยู่ : <?=$row ["address"]?><br>
                    เบอร์ : <?=$row ["mobile"]?><br> 
                    อีเมล : <?=$row ["email"]?><br> 
                </div>
            <?php 
                $i++;
            ?>



            <?php endwhile; ?>
        </div>
    </body>
</html>