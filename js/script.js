// Lấy kích thước cửa sổ trình duyệt
const windowWidth = window.innerWidth;

// Xác định các media query
const smallScreen = windowWidth < 768;
const mediumScreen = windowWidth < 1024;

// Tùy chỉnh bố cục cho các kích thước màn hình khác nhau
if (smallScreen) {
  // Shrink the header and footer
  document.querySelector("header").style.height = "50px";
  document.querySelector("footer").style.height = "50px";
  // Collapse the main content into a single column
  document.querySelector("main").style.display = "block";
  document.querySelector("main .product-space").style.width = "100%";
} else if (mediumScreen) {
  // Shrink the header and footer
  document.querySelector("header").style.height = "50px";
  document.querySelector("footer").style.height = "50px";
  // Split the main content into two columns
  document.querySelector("main").style.display = "flex";
  document.querySelector("main .product-space").style.width = "50%";
} else {
  // Restore the header and footer to their original size
  document.querySelector("header").style.height = "100px";
  document.querySelector("footer").style.height = "100px";
  // Expand the main content to fill the entire width of the page
  document.querySelector("main").style.display = "flex";
  document.querySelector("main .product-space").style.width = "100%";
}

$(document).ready(function () {
  $(window).scroll(function () {
    if ($(window).scrollTop() > 100) {
      $("header").css("background-color", "black");
    } else {
      $("header").css("background-color", "transparent");
    }
  });
});
