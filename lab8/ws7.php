<?php include "connect.php" ?>
<html>
<head>
    <meta charset="utf-8">

    <style>
        .profile{
            margin: auto;
            padding: 20px;
            max-width: 300px;
            border: 2px black solid;
        }

        .profile > form > input {
            margin-bottom: 10px;
        }
    </style>

</head>
    <body>
        <div class="profile">
        <form action="insert.php" method="post" enctype="multipart/form-data">
                username : <input type="text" name="username" required> <br>
                password : <input type="password" name="password" required> <br>

                ชื่อ - สกุล : <input type="text" name="name" required> <br>
                ที่อยู่ : <textarea name="address" rows="3" cols="22" required></textarea> <br>
                เบอร์โทร : <input type="text" name="mobile" pettern="[0-9]{10}" required> <br>
                อีเมล : <input type="email" name="email" required> <br>
                ใส่รูปภาพ : <input type="file" name="image" required> <br>

                <input type="submit" value="สมัครสมาชิก">
            </form>
        </div>

    </body>
</html>