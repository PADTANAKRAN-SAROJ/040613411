<?php include "connect.php" ?>
    <?php
        $stmt = $pdo->prepare("INSERT INTO member VALUES ( ?, ?, ?, ?, ?, ?)");
        $stmt->bindParam(1, $_POST["username"]);
        $stmt->bindParam(2, $_POST["password"]);
        $stmt->bindParam(3, $_POST["name"]);
        $stmt->bindParam(4, $_POST["address"]);
        $stmt->bindParam(5, $_POST["mobile"]);
        $stmt->bindParam(6, $_POST["email"]);
        // $stmt->bindParam(3, $_POST["name"]); รูป

        $stmt->execute();
        $pid = $pdo->lastInsertId();

        $username = $_POST["username"];
        $i = 1;

        header("location: ws5-detail.php?username=".$username."&i=".$i);
    ?>
