<?php include "connect.php" ?>

<html>
    <body>
        <?php
            $stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
            $stmt->bindParam(1, $_GET["username"]); 
            $stmt->execute();
            $row = $stmt->fetch();
        ?>

        <h2><?=$row["name"]?></h2>
        ที่อยู่ : <?=$row ["address"]?> <br>
        เบอร์ : <?=$row ["mobile"]?> <br> 
        อีเมล : <?=$row ["email"]?> <br> <br>

        <form action="edit.php" method="post">

            กรอกข้อมูลที่ต้องการแก้ไข <br>

            <input type="hidden" 
                name="username" 
                value="<?=$row["username"]?>">

            ชื่อ-นามสกุล : <input type="text" 
                name="name" 
                value="<?=$row["name"]?>"> <br>

            ที่อยู่ : <textarea name="address"><?=$row["address"]?></textarea> <br>

            เบอร์ : <input type="text" 
                name="mobile" 
                value="<?=$row["mobile"]?>"> <br>

            อีเมล : <input type="email" 
                name="email" 
                value="<?=$row["email"]?>"> <br>

            <input type="submit" value="แก้ไขข้อมูล">
        </form>

    </body>
</html>