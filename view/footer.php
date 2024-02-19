<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <footer>
    <nav class="end">
      <div class="about-papers">
        <h3>Về TommyShop</h3>
        <a href="">Quy chế sử dụng dịch vụ</a>
        <a href="">Chính sách bảo mật</a>
      </div>
      <div class="support">
        <h3>Hỗ trợ</h3>
        <a href="">Nhắn tin qua messenger</a>
        <a href="">Nhắn tin qua Zalo</a>
        <a href="">hn6006077@gmail.com</a>
      </div>
      <div class="buymethod">
        <h3>Phương thức thanh toán</h3>
        <img src="./sources/apple-pay.png" alt="">
        <img src="./sources/card.png" alt="">
        <img src="./sources/google-pay.png" alt="">
        <img src="./sources/paypal.png" alt="">
        <img src="./sources/visa.png" alt="">
        <img src="./sources/discover.png" alt="">
      </div>
      <div class="connect">
        <h3>Kết nối với chúng tôi</h3>
        <a href="https://www.facebook.com/profile.php?id=61550617226785"><ion-icon name="logo-facebook"></ion-icon></a>
        <a href=""><ion-icon name="logo-linkedin"></ion-icon></a>
        <a href=""><ion-icon name="logo-instagram"></ion-icon></a>
      </div>
    </nav>
    <div class="company">
      <h3>CÔNG TY TNHH THỜI TRANG & SẢN PHẨM TOMMYSHOP</h3>
      <h4>Địa chỉ: 123,đường 456, quận Nam Từ Liêm, Hà Nội</h4>
    </div>
    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

  </footer>
</body>
<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "105026626033576");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function () {
    FB.init({
      xfbml: true,
      version: 'v18.0'
    });
  };

  (function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

</html>