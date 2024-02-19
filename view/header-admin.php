<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <nav class="admin-header">
            <div class="header-logo">
                <h2>TOMMY Admin</h2>
            </div>
            <div class="header-function">
                <div class="dropdown-notifi">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class='bx bx-bell'></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
                <div class="dropdown-mess">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class='bx bx-chat'></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
                <?php
                if (isset($_SESSION['useradmin']) && ($_SESSION['useradmin'] != "")) {
                    echo '                <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../sources/' . $_SESSION['imageadmin'] . '" alt="">
                            ' . $_SESSION['nameadmin'] . '
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#"><i class="bx bx-cog" ></i> Cài đặt</a>
                            <a class="dropdown-item" href="#"><i class="bx bx-info-circle" ></i> Thông tin tài khoản</a>
                            <a class="dropdown-item" href="#"><i class="bx bx-lock-alt" ></i> Khóa màn hình</a>
                            <a class="dropdown-item" href="../controller/index-admin.php?act-admin=logout"><i class="bx bx-log-out-circle"></i> Đăng xuất</a>
                        </div>
                    </div>';
                } else {
                    header('location: ../view/adlogin.php');
                }
                ?>
            </div>
        </nav>
    </header>
</body>

</html>