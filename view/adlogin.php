<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/adlogin.css">
</head>

<body>
    <section>
        <div class="mainform">
            <form action="./index-admin.php?act-admin=login" method="post">
                <h1>Đăng nhập trang quản trị</h1>
                <input type="text" name="user" placeholder="Tên đăng nhập">
                <input type="password" name="pass" placeholder="Mật khẩu">
                <a href="./view/login.php">Đăng nhập</a>
                <a href="#"> | </a>
                <a href="#" style="margin-left: 100px;">Quên mật khẩu?</a>
                <input type="submit" name="dangnhapadmin" value="Đăng nhập">
            </form>
        </div>
    </section>
</body>

</html>