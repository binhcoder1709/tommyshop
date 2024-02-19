<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quản trị người dùng</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <section>
        <nav class="section-content">
            <nav class="section-function">
                <div class="all"><a href="">Tất cả</a></div>
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                Quản lí theo danh mục
                            </button>
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <a href="#">Gucci</a>
                            <a href="#">Louis Vuitton</a>
                            <a href="#">Dolce&Gabana</a>
                            <a href="#">Prada</a>
                            <a href="#">Hermes</a>
                            <a href="#">AlexanderMcqueen</a>
                            <a href="#">Dior</a>
                            <a href="#">Lacoste</a>
                        </div>
                    </div>
                </div>
                <div class="account"><a href="#">Quản lí tài khoản</a></div>
            </nav>
            <nav class="section-table">
                <table border="2">
                    <tr>
                        <th>ID</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá</th>
                        <th>Chức năng</th>
                    </tr>
                    <?php
                    foreach ($product as $value) {
                        echo '<tr>
                                    <td>' . $value['id'] . '</td>
                                    <td>' . $value['productname'] . '</td>
                                    <td>' . $value['price'] . '</td>
                                    <td>
                                        <a href="#">Thêm</a>
                                        |
                                        <a href="#">Sửa</a>
                                        |
                                        <a href="#">Xóa</a>
                                    </td>
                                </tr>';
                    }
                    foreach ($gucci as $value) {
                        echo '<tr>
                                    <td>' . $value['id'] . '</td>
                                    <td>' . $value['gucciname'] . '</td>
                                    <td>' . $value['price'] . '</td>
                                    <td>
                                        <a href="#">Thêm</a>
                                        |
                                        <a href="#">Sửa</a>
                                        |
                                        <a href="#">Xóa</a>
                                    </td>
                                </tr>';
                    }
                    foreach ($dg as $value) {
                        echo '<tr>
                                    <td>' . $value['id'] . '</td>   
                                    <td>' . $value['dgname'] . '</td>
                                    <td>' . $value['price'] . '</td>
                                    <td>
                                        <a href="#">Thêm</a>
                                        |
                                        <a href="#">Sửa</a>
                                        |
                                        <a href="#">Xóa</a>
                                    </td>
                                </tr>';
                    }
                    ?>
                </table>
                <table border="2">
                    <tr>
                        <th>ID</th>
                        <th>Tên người dùng</th>
                        <th>Tên tài khoản</th>
                        <th>Mật khẩu</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Chức năng</th>
                    </tr>
                    <?php
                    foreach ($getuser as $value) {
                        echo '<tr>
                            <td>' . $value['id'] . '</td>
                            <td>' . $value['nameuser'] . '</td>
                            <td>' . $value['user'] . '</td>
                            <td>' . $value['pass'] . '</td>
                            <td>' . $value['email'] . '</td>
                            <td>' . $value['phone'] . '</td>
                            <td>
                            <a href="#">Thêm</a>
                            |
                            <a href="#">Sửa</a>
                            |
                            <a href="#">Xóa</a>
                        </td>
                        </tr>';
                    }
                    ?>
                    <tr>
                        <td><a href="#">Thêm</a></td>
                    </tr>
                </table>
            </nav>
            <div class="insertuser">
                <div class="insertuser-content">
                    <form action="../model/insert.php" method="post">
                        <input type="text" name="name" placeholder="Nhập tên người dùng">
                        <input type="text" name="user" placeholder="Nhập tên tài khoản">
                        <input type="password" name="pass" placeholder="Nhập mật khẩu">
                        <input type="email" name="email" placeholder="Nhập email">
                        <input type="text" name="phone" placeholder="Nhập số điện thoại">
                        <input type="submit" name="themnguoidung" value="Thêm người dùng">
                    </form>
                </div>
            </div>
        </nav>
    </section>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

</html>