const node__head_menu = querySelect(
    "#mainHome_navbar_about_topic-respon-hidden"
);
const node__menu_icon = querySelect("#mainHome_navbar_about_topic-close-icon");
const node__menu_icon_item = querySelect(".mainHome_navbar_aboutUs");
const node__menu_items = querySelect(".mainHome_navbar_aboutUs-wrapper");

node__head_menu.addEventListener("click", (e) => {
    node__menu_icon_item.classList.toggle("menuIconItem");
    node__menu_items.classList.toggle("menuItems");
});

node__menu_icon.addEventListener("click", (e) => {
    node__menu_icon_item.classList.toggle("menuIconItem");
    node__menu_items.classList.toggle("menuItems");
});
function querySelect(_name) {
    return document.querySelector(_name);
}
// todo: Chức năng hiển thị sản phẩm trong giỏ hàng
$(document).ready(function () {
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
});
