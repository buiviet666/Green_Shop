// thông báo của giỏ hàng chưa đăng nhập
function require_signin() {
/* bắt đầu phần hiện thông báo */
    // sau khi ấn vào nút gì đó ... để hiện thông báo
    $('.button-cart').click(function(){
        // xóa cái hide đi
        $('.alert').removeClass("hide");

        // thêm lại cái halo
        $('.alert').addClass("halo");

        $('.alert').addClass("showAlert");
        // thời gian tắt sau 3 giây
        setTimeout(function() {
            // thêm cái hide đi
            $('.alert').addClass("hide");

            // xóa cái halo
            $('.alert').removeClass("halo");
        }, 3000);
    })

    // chỉnh sửa của phần hiển thị thông báo
    $('.close-btnn').click(function(){
        // thêm cái hide đi
        $('.alert').addClass("hide");

        // xóa cái halo
        $('.alert').removeClass("halo");
    })
/* kết thúc phần hiện thông báo */
}




// thông báo của giỏ hàng khi thêm hàng thành công
function response_addCart() {
    alert("thêm vào giỏ hàng thành công!");
}


// button click mini index.php
function myButtonMini() {
    let downMini = document.getElementById("collapse_btn");
    downMini.classList.toggle("clickButtonMini");
}


// click slider index.php
var sliderIndex = 1;
showSlides(sliderIndex);

function plusSlides(n) {
  showSlides(sliderIndex += n);
}

function currentSlider(n) {
    showSlides(sliderIndex = n);    
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("slider-item");
    var dots = document.getElementsByClassName("sliders");
    if (n > slides.length) { sliderIndex = 1 }
    if (n < 1 ) { sliderIndex = slides.length }
    for ( i = 0; i < slides.length; i++ ) {
        slides[i].style.display = "none";
        }
    for ( i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[sliderIndex - 1].style.display = "block";
        dots[sliderIndex - 1].className += " active";
}


// auto slider index.php
// var sliderIndex = 0;
// showSlides();

// function showSlides() {
//     var i;
//     var slides = document.getElementsByClassName("hi");
//     for (i = 0; i < slides.length; i++) {
//         slides[i].style.display = "none";
//     }
//     sliderIndex++;
//     if (sliderIndex > slides.length) {
//         sliderIndex = 1;
//     }
//     slides[sliderIndex - 1].style.display = "block";
//     setTimeout(showSlides, 4000);
// }


// collapse button shop.php
function myCollapse() {
    let down = document.getElementById("content");
    down.classList.toggle("addCollapse");
}

function myCollapse2() {
    let down2 = document.getElementById("content2");
    down2.classList.toggle("addCollapse");
}

function myCollapse3() {
    let down3 = document.getElementById("content3");
    down3.classList.toggle("addCollapse");
}

function demo_in2 () {
    alert("tính năng đang được phát triển! Cảm ơn bạn đã ấn vào ❤️❤️❤️");
}