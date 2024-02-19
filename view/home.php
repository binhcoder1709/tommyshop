<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" style="background-color: rgb(127, 193, 193); height: 650px;">
                    <nav class="carousel-item-content">
                        <div class="carousel-item-info">
                            <h4>Tranding</h4>
                            <h1 class="text">Prada Arqué leather shoulder bag</h1>
                            <p style="width: 600px;">This sleek leather bag has a versatile, modernist allure.
                                The accessory with a sinuous silhouette is completed by
                                the leather extension and detachable shoulder strap for
                                wearing different ways. The bag with nappa leather interior
                                and metal hardware is embellished with the enameled metal triangle logo on the front.
                            </p>
                            <a href="">Mua ngay</a>
                        </div>
                        <div class="carousel-item-image">
                            <img src="./sources/cq5dam.web.hebebed.1000.1000-removebg-preview.png" alt=""
                                style="margin-left: 100px; margin-top: 50px;">
                        </div>
                    </nav>
                </div>
                <div class="carousel-item" style="background-color: #6894c1; height: 650px;">
                    <nav class="carousel-item-content">
                        <div class="carousel-item-info">
                            <h4>Get up to 50% off Today Only!</h4>
                            <h1>The Seal Bag in Black</h1>
                            <p style="width: 600px;">Black Seal bag handcrafted from padded lambskin leather, featuring
                                an exploded Seal
                                logo and a gold-finished cut out metal Seal closure. The Seal bag plays with curves
                                and rounded edges. This bag can be worn over the shoulder using its woven metal chain
                                strap.</p>
                            <a href="">Mua ngay</a>
                        </div>
                        <div class="carousel-item-image">
                            <img src="./sources/Medium-AMQ_AW23_LUI_WEN_02_CLEAN_INSTAPORTRAIT-removebg-preview.png"
                                alt="" style="margin-top: 100px; margin-left: 300px;">
                        </div>
                    </nav>
                </div>
                <div class="carousel-item" style="background-color: #eed9c0; height: 650px;">
                    <nav class="carousel-item-content">
                        <div class="carousel-item-info">
                            <h4>Taking your Body to Next Level</h4>
                            <h1>Men-s Colorblock Cotton Jersey T-Shirt</h1>
                            <a href="">Mua ngay</a>
                        </div>
                        <div class="carousel-item-image">
                            <img src="./sources/Men_s-Colorblock-Cotton-Jersey-T-Shirt.png" alt=""
                                style="margin-top: 150px;">
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section>
        <nav class="product">
            <h2>Sản phẩm</h2>
            <nav class="product-space">
                <?php
                foreach ($product as $insert) {
                    echo '<div class="productbox">
                        <div class="productimg"><img src="./sources/' . $insert['image'] . '" alt=""></div>
                        <div class="productname">
                            <a href="./index.php?act=detail"><h4>' . $insert['productname'] . '</h4></a>
                        </div>
                        <h4 style="color: red; font-weight: 700;" id="price">' . $insert['price'] . 'VND</h4>
                        <div class="star">
                            <i class="bx bxs-star" style="color:#bebe15" ></i>
                            <i class="bx bxs-star" style="color:#bebe15" ></i>
                            <i class="bx bxs-star" style="color:#bebe15" ></i>
                            <i class="bx bxs-star" style="color:#bebe15" ></i>
                            <i class="bx bxs-star" style="color:#bebe15" ></i>
                            (15)
                        </div>
                        <div class="cart"><a href="">Giỏ hàng</a></div>
                    </div>';
                }
                ?>
            </nav>
        </nav>
    </section>
    <section>
        <nav class="adv">
            <nav class="adv-content">
                <div class="adv1">
                    <h4>Super Sale</h4>
                    <h2>New Collection</h2>
                    <a href="">Mua ngay</a>
                    <div class="image1"><img src="./sources/Nước_Hoa_Mille_Feux.png" alt=""></div>
                </div>
                <div class="adv2">
                    <h2>New Season</h2>
                    <h4>Sale 40% off</h4>
                    <a href="">Mua ngay</a>
                    <div class="image2"><img src="./sources/Vòng-Cổ-Louis-Vuitton-Blossom.png" alt=""></div>
                </div>
            </nav>
        </nav>
    </section>
    <section>
        <nav class="brand1">
            <h2>Gucci Shoes</h2>
            <nav class="brand1-space">
                <?php
                foreach ($gucci as $insert) {
                    echo '<div class="brand1box">
                        <div class="brand1img"><img src="./sources/' . $insert['image'] . '" alt=""></div>
                        <div class="brand1name">
                            <a href="#"><h4>' . $insert['gucciname'] . '</h4></a>
                        </div>
                        <h4 style="color: red; font-weight: 700;" id="price">' . $insert['price'] . 'VND</h4>
                        <div class="star">
                            <i class="bx bxs-star" style="color:#bebe15" ></i>
                            <i class="bx bxs-star" style="color:#bebe15" ></i>
                            <i class="bx bxs-star" style="color:#bebe15" ></i>
                            <i class="bx bxs-star" style="color:#bebe15" ></i>
                            <i class="bx bxs-star" style="color:#bebe15" ></i>
                            (15)
                        </div>
                        <div class="cart"><a href="">Giỏ hàng</a></div>
                    </div>';
                }
                ?>
            </nav>
        </nav>
    </section>
    <section>
        <nav class="brand2">
            <h2>D&G FOR GIRL CHILDREN</h2>
            <nav class="brand2-space">
                <?php
                foreach ($dg as $dgproduct) {
                    echo '<div class="brand2box">
                        <div class="brand2img">
                            <img src="./sources/' . $dgproduct['image'] . '" alt="">
                        </div>
                        <div class="brand2name">
                            <a href="./index.php?act=detail"><h4>' . $dgproduct['dgname'] . '</h4></a>
                        </div>
                        <h4 style="color: red; font-weight: 700;" id="price">' . $dgproduct['price'] . 'VND</h4>
                        <div class="star">
                            <i class="bx bxs-star" style="color:#bebe15" ></i>
                            <i class="bx bxs-star" style="color:#bebe15" ></i>
                            <i class="bx bxs-star" style="color:#bebe15" ></i>
                            <i class="bx bxs-star" style="color:#bebe15" ></i>
                            <i class="bx bxs-star" style="color:#bebe15" ></i>
                            (15)
                        </div>
                        <div class="cart"><a href="">Giỏ hàng</a></div>
                    </div>';
                }
                ?>
            </nav>
        </nav>
    </section>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="./js/script.js"></script>
</body>
<script>
    function translate(lang) {
        // Dịch nội dung của trang web sang ngôn ngữ lang
        const translation = await GoogleTranslate.translate(document.body.innerHTML, lang);

        // Thay thế nội dung của trang web bằng bản dịch
        document.body.innerHTML = translation;
    }

    // Tạo menu chuyển đổi ngôn ngữ
    const languageList = ["English", "Vietnamese", "French"];
    const languageMenu = document.createElement("ul");
    for (const lang of languageList) {
        const languageItem = document.createElement("li");
        languageItem.textContent = lang;
        languageItem.addEventListener("click", () => translate(lang));
        languageMenu.appendChild(languageItem);
    }
    document.body.appendChild(languageMenu);
</script>
<script>
    var typed = new Typed(".text", {
        strings: ["Prada Arqué leather shoulder bag", "Ironman"],
        typeSpeed: 100,
        backSpeed: 100,
        backDelay: 1000,
        loop: true
    })
</script>

</html>