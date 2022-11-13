// todo: Chức năng hiện thị ảnh, video theo sự kiện rê chuột
const all_product_images = document.querySelectorAll(
    ".product__image--carousel-element-wrap"
);
const image_container = document.getElementById("product-carousel-tray");
const next_btn = document.getElementById("product__carousel--arrow-next");
const prev_btn = document.getElementById("product__carousel--arrow-previous");
function refreshImageIndex() {
    return document.querySelectorAll(".product__image--carousel-element-wrap");
}
next_btn.addEventListener("click", (e) => {
    image_container.appendChild(refreshImageIndex()[0]);
});
prev_btn.addEventListener("click", (e) => {
    const all_img_refreshed = refreshImageIndex();
    image_container.prepend(all_img_refreshed[all_img_refreshed.length - 1]);
});
const main_product_media = document.getElementById("product-main-img");
const all_main_media = document.querySelectorAll(".product__media--display");
let first_media = all_main_media[0];
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
                if (resp_msg.status === 500) {
                    $.ajax({
                        type: "GET",
                        url: `/login?pre_page=${window.location.pathname}`,
                        success: function (response) {
                            $("#body").html(response);
                        },
                    });
                } else {
                    $.ajax({
                        type: "GET",
                        url: `/cart/${$("#mainHome-user-code").val()}?action=watch`,
                        success: function (response) {
                            const number_item = $(
                                "#headerHome-display-cart-number"
                            );
                            const wrap_item = $("#mainHome-cart-list-product");
                            wrap_item.html(response);
                            number_item.text(
                                $(".mainHome__cart--product-wrap").length
                            );
                        },
                    });
                    $("#product-alert-wrap").css("display", "flex");
                    setTimeout(() => {
                        $("#product-alert-wrap").css("display", "none");
                    }, 1500);
                }
            },
        });
    });
});
