<?php include "connect.php" ?>
<html>
<head>
    <meta charset="utf-8">

    <style>
        .profile{
            margin: auto;
            display: flex;
            padding: 10px;
            max-width: 300px;
            border: 2px black solid;
        }

        .profile > form  {
            text-align: right;
            margin: auto;
        }

        .profile > form > input {
            margin-bottom: 10px;
        }
    </style>

</head>
    <body>
        <div class="profile">
            <form action="insert.php" method="post">
                username : <input type="text" name="username"> <br>
                password : <input type="password" name="password"> <br>

                ชื่อ - สกุล : <input type="text" name="name"> <br>
                ที่อยู่ : <textarea name="address" rows="3" cols="22"></textarea> <br>
                เบอร์โทร : <input type="text" name="mobile" pettern="[0-9]{10}"> <br>
                อีเมล : <input type="email" name="email"> <br>

                <input type="submit" value="สมัครสมาชิก">
            </form>
        </div>

    </body>
</html>