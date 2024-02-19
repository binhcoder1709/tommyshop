<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <section>
        <?php
        extract($detail);
        echo '<nav class="detail">
            <nav class="detail-content">
                <div class="detail-img_1">
                    <img src="./sources/' . $detail['image'] . '" alt="">
                </div>
                <div class="detail-info">
                    <h2>Jersey hoodie dress with DG patch</h2>
                    <h4>price</h4>
                    <a href="#" id="addtocart">Thêm vào giỏ hàng</a>
                    <a href="#" id="buy">Mua ngay</a>
                </div>
            </nav>
        </nav>';
        ?>
    </section>
</body>

</html>