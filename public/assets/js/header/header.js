const headerMenu = document.getElementById(
    "mainHome_navbar_about_topic-respon-hidden"
);
const menuIcon = document.getElementById(
    "mainHome_navbar_about_topic-close-icon"
);
const menuIconItem = document.querySelector(".mainHome_navbar_aboutUs");

const menuItems = document.querySelector(".mainHome_navbar_aboutUs-wrapper");

headerMenu.addEventListener("click", (e) => {
    menuIconItem.classList.toggle("menuIconItem");
    menuItems.classList.toggle("menuItems");
});

menuIcon.addEventListener("click", (e) => {
    menuIconItem.classList.toggle("menuIconItem");
    menuItems.classList.toggle("menuItems");
});
// todo: Chức năng hiển thị sản phẩm trong giỏ hàng
$(document).ready(function () {
    $.ajax({
        type: "GET",
        url: `/cart/create`,
        data: {
            id: $("#mainHome-user-code").val()
        },
        success: function (response) {
            const number_item = $("#headerHome-display-cart-number");
            const wrap_item = $("#mainHome-cart-list-product");
            wrap_item.html(response);
            number_item.text($(".mainHome__cart--product-wrap").length);
        },
    });
});
