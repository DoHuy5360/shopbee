// todo: Chức năng hiện thị ảnh, video theo sự kiện rê chuột
const all_product_images = document.querySelectorAll(
    ".product__image--carousel-element-wrap"
);
const image_container = document.getElementById("product-carousel-tray");
const next_btn = document.getElementById("product__carousel--arrow-next");
const prev_btn = document.getElementById("product__carousel--arrow-previous");
const all_main_media = document.querySelectorAll(".product__media--display");
let first_media = all_main_media[0];
let a = all_product_images.length - (all_product_images.length - 1);
let tempt = 0;
const image_text = document.getElementById("product-main-img");
const mediaQuery = window.matchMedia("(max-width: 768px)").matches;

if (mediaQuery) {
    next_btn.addEventListener("click", (e) => {
        if (tempt != all_product_images.length - 1) {
            first_media.style.display = "none";
            tempt = a - 1 + 1;
            if (all_main_media[tempt] != first_media) {
                all_main_media[tempt].style.display = "block";
                all_main_media[0].style.display = "none";
                first_media = all_main_media[tempt];
            }
            a += 1;
        } else {
            a = 1;
            all_main_media[tempt].style.display = "none";
            tempt = 0;
            all_main_media[0].style.display = "block";
            first_media = all_main_media[0];
        }
    });
    prev_btn.addEventListener("click", (e) => {
        var b = first_media.getAttribute("data-index");
        if (tempt != 0) {
            tempt = b - 1; //0 3
            if (all_main_media[tempt] != first_media) {
                first_media.style.display = "none";
                all_main_media[tempt].style.display = "block";
                first_media = all_main_media[tempt];
            }
            b -= 1;
        } else {
            all_main_media[0].style.display = "none";
            first_media = all_main_media[all_product_images.length - 1];
            tempt = all_product_images.length - 1; //4
            all_main_media[tempt].style.display = "block"; //4
        }
    });
} else {
    function refreshImageIndex() {
        return document.querySelectorAll(
            ".product__image--carousel-element-wrap"
        );
    }
    next_btn.addEventListener("click", (e) => {
        image_container.appendChild(refreshImageIndex()[0]);
        test_img = image_container.appendChild(refreshImageIndex()[0]);
    });
    prev_btn.addEventListener("click", (e) => {
        const all_img_refreshed = refreshImageIndex();
        image_container.prepend(
            all_img_refreshed[all_img_refreshed.length - 1]
        );
    });
    all_product_images.forEach((media) => {
        media.addEventListener("mouseover", (e) => {
            const data_index = media.getAttribute("data-index");
            if (all_main_media[data_index] != first_media) {
                all_main_media[data_index].style.display = "block";
                first_media.style.display = "none";
                first_media = all_main_media[data_index];
            }
        });
    });
}
// todo: Chức năng thông báo thêm giỏ hàng thành công, không thì bắt đăng nhập
$(document).ready(function () {
    // todo: Sự kiện thêm sản phẩm vào giỏ hàng
    $("#product-title-add2cart").click(function (e) {
        e.preventDefault();
        $("#theForm").ajaxSubmit({
            url: "/cart",
            type: "post",
            success: function (response, statusText, xhr, form) {
                const resp_msg = $(response)[0];
                if (resp_msg.status === "login") {
                    $.ajax({
                        type: "GET",
                        url: `/login?pre_page=${window.location.pathname}`,
                        success: function (response) {
                            $("#body").html(response);
                        },
                    });
                } else if (resp_msg.status === "duplicate") {
                    alertMessage();
                } else {
                    refreshCart();
                    alertMessage();
                }
            },
        });
    });
    function alertMessage() {
        $("#product-alert-wrap").css("display", "flex");
        setTimeout(() => {
            $("#product-alert-wrap").css("display", "none");
        }, 1500);
    }
    function refreshCart() {
        $.ajax({
            type: "GET",
            url: `/cart/create`,
            success: function (response) {
                const number_item = $("#headerHome-display-cart-number");
                const wrap_item = $("#mainHome-cart-list-product");
                wrap_item.html(response);
                number_item.text($(".mainHome__cart--product-wrap").length);
            },
        });
    }
});
