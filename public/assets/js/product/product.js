import { displayProductsInCartPreview as refreshCartPreview } from "../module/function/header_func.js";

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
const node__cls1_chck = document.querySelectorAll(".product__classify1_inp");
const node__cls2_chck = document.querySelectorAll(".product__classify2_inp");
let int__amnt_cls_exst = 0;
function checkInArrHaveChecked() {
    if (int__amnt_cls_exst == 1) {
        return checkClassifyChecked(node__cls1_chck);
    } else if (int__amnt_cls_exst == 2) {
        return (
            checkClassifyChecked(node__cls1_chck) &&
            checkClassifyChecked(node__cls2_chck)
        );
    } else {
        return true;
    }
}
function checkClassifyChecked(_node) {
    return [..._node].some((_chck) => {
        return _chck.checked;
    });
}
function checkClassifyExist() {
    if (node__cls1_chck.length) {
        int__amnt_cls_exst++;
        if (node__cls2_chck.length) {
            int__amnt_cls_exst++;
        }
    }
}
checkClassifyExist();
$(document).ready(function () {
    // todo: Sự kiện thêm sản phẩm vào giỏ hàng
    $("#product-title-add2cart").click(function (e) {
        e.preventDefault();
        if (checkInArrHaveChecked()) {
            $("#product-form-add-cart").ajaxSubmit({
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
                        refreshCartPreview();
                        alertMessage();
                    }
                },
            });
        }
    });
    // todo: Sự kiện Mua ngay
    $("#product-title-buyNow").click(function (e) {
        e.preventDefault();
        if (checkInArrHaveChecked()) {
            $("#product-form-add-cart").ajaxSubmit({
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
                        $("#product-form-add-cart").submit();
                    } else {
                        refreshCartPreview();
                        $("#product-form-add-cart").submit();
                    }
                },
            });
        }
    });
    function alertMessage() {
        $("#product-alert-wrap").css("display", "flex");
        setTimeout(() => {
            $("#product-alert-wrap").css("display", "none");
        }, 1500);
    }
    const node__amnt_storage = document.getElementById(
        "product-storage-number"
    );
    const node__amnt_order = document.getElementById("product-amount-order");
    const node__btn__plus = document.getElementById(
        "product-title_quantity-plus"
    );
    const node__btn_minus = document.getElementById(
        "product-title_quantity-minus"
    );
    node__btn__plus.addEventListener("click", (e) => {
        if (node__amnt_order.value < parseInt(node__amnt_storage.innerText)) {
            node__amnt_order.value++;
        }
    });
    node__btn_minus.addEventListener("click", (e) => {
        if (node__amnt_order.value > 1) {
            node__amnt_order.value--;
        }
    });
});
