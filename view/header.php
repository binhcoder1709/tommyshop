<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="./sources/tommyyy.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <header class="header" style="    background: transparent;">
        <nav class="header-content1">
            <div class="header1">
                <a href="">English<i class='bx bx-chevron-down'></i></a>
                <a href="">USD<i class='bx bx-chevron-down'></i></a>
                <span><i class='bx bx-phone'></i>123-456-7890</span>
            </div>
            <div class="header2">
                <a href="" style="margin-right: 10px;"><i class='bx bx-heart bx-flashing'></i> Yêu thích</a>
                <div class="userdrop">
                    <?php
                    if (isset($_SESSION['user']) && ($_SESSION['user'] != "")) {
                        echo '<a href="#"><i class="bx bx-user"></i> ' . $_SESSION['user'] . '</a>';
                        echo '<div class="user-content">
                            <a href="./index.php?act=profileview">Tài khoản</a>
                            <a href="./index.php?act=logout">Đăng xuất</a>
                        </div>';
                    } else {
                        echo '<a href="./index.php?act=loginview"><i class="bx bx-user"></i> Đăng nhập</a>';
                    }
                    ?>
                </div>
            </div>
        </nav>
        <nav class="header-content2">
            <a href="./index.php?act=home"><img src="./sources/tommyy.png" alt=""></a>
            <nav class="function-content">
                <a href="./index.php?act=home">Trang chủ</a>
                <a href="">Cửa hàng</a>
                <div class="dropdown">
                    <a href="">Danh mục<i class='bx bxs-chevron-down' style='color: #000000'></i></a>
                    <div class="dropdown-content">

                        <a href="">Gucci</a>
                        <a href="">Louis Vuitton</a>
                        <a href="">Dolce&Gabana</a>
                        <a href="">Prada</a>
                        <a href="">Hermes</a>
                        <a href="">Lacoste</a>
                        <a href="">Alexander McQueen</a>
                        <a href="">Dior</a>
                    </div>
                </div>
            </nav>
            <nav class="search-cart">
                <input type="text" placeholder="Tìm kiếm..."><i class='bx bx-search' id="search-icon"></i>
                <a href="./index.php?act=cart"><i class='bx bx-cart'></i></a>
            </nav>
        </nav>
    </header>
    <script src="./js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(window).scrollTop() > 100) {
                    $('header').css('background-color', 'rgb(249, 247, 247)');
                } else {
                    $('header').css('background-color', 'transparent');
                }
            });
        });
    </script>
</body>

</html>