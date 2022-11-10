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
    function cart_item() {
        return `
            <div class="mainHome__cart--product-wrap">
                <img src="${window.location.origin + "/" + this.path}" alt="">
                <div class="mainHome__cart--product-name">${this.name}</div>
                <div class="mainHome__cart--product-price">${this.price}</div>
            </div>
        `;
    }
    $.ajax({
        type: "GET",
        url: `/cart/${$("#mainHome-user-code").val()}`,
        success: function (response) {
            const raw_response = response.get_cart;
            console.log(raw_response);
            const cart_length = raw_response.length;
            for (let index = 0; index < cart_length; index++) {
                const item = raw_response[index];
                $("#mainHome-cart-list-product").append(cart_item.call(item));
            }
        },
    });
});
