export function displayProductsInCartPreview(){
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