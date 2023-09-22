<?php include "connect.php" ?>
<html>
<head>
    <meta charset="utf-8">
    <script>
        function editProfile(username) {
            document.location = "ws9-edit.php?username=" + username; 
        }

    </script>

</head>
    <body>
        <?php
            $stmt = $pdo->prepare("SELECT * FROM member");
            $stmt->execute();

            $i = 1;

            while ($row = $stmt->fetch()) {
            ?>
            ชื่อสมาชิก : <?=$row ["name"]?><br>
            ที่อยู่ : <?=$row ["address"]?><br>
            อีเมล : <?=$row ["email"]?><br>
            
            <img src='member_photo/<?=$i?>.jpg' width='100'>

            <br>
            <a href='#' onclick='editProfile("<?=$row["username"]?>")'>แก้ไข</a>
            
            <?php $i++; ?>
            <hr>
        <?php } 
        ?>
    </body>
</html>