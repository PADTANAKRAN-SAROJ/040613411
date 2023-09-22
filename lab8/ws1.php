<?php include "connect.php" ?>
    <html>
        <head><meta charset="utf-8">
        <style>
            table,th,td {
                border : 1px black solid;
                padding: 2px;
            }
        </style>
        </head>
        <body>
            <?php
                $stmt = $pdo->prepare("SELECT * FROM product");
                $stmt->execute();
                
                echo "<table>";
                    echo "<tr>";
                        echo "<th> รหัสสินค้า </th>";
                        echo "<th> ชื่อสินค้า </th>";
                        echo "<th> รายละเอียดสินค้า </th>";
                        echo "<th> ราคา </th>";
                    echo "</tr>" ;
                    
                    while ($row = $stmt->fetch()) {
                        echo "<tr>";
                        echo "<td>" . $row ["pid"] . "</th>";
                        echo "<td>" . $row ["pname"] . "</th>";
                        echo "<td>" . $row ["pdetail"] . "</th>";
                        echo "<td>" . $row ["price"] . "</th>";
                        echo "</tr>" ;
                    }
                    
                echo "</table>";
            ?>
        </body>
</html>