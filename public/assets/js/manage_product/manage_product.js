// todo: Bắt sự kiện hiển thị thanh thao tác [xóa, hiển thị, ẩn] sản phẩm
const node__hidden_action = document.getElementById(
    "seller-allProduct-delete-card-wrap"
);
const node__card_checkbox = document.querySelectorAll(
    ".seller__allProduct--card-checkbox"
);
const array__card_checked = [];
node__card_checkbox.forEach((checkbox, index) => {
    checkbox.addEventListener("change", (e) => {
        if (checkbox.checked) {
            array__card_checked.push(checkbox);
            node__hidden_action.style.display = "flex";
        } else {
            array__card_checked.splice(index, 1);
        }
        if (!array__card_checked.length) {
            node__hidden_action.style.display = "none";
        }
    });
});
// todo: Xóa sản phẩm
$(document).ready(function () {
    $("#seller-allProduct-card-delete-btn").click(function (e) {
        e.preventDefault();
        const array__product_code = array__card_checked.map((checkbox)=>{
            return checkbox.getAttribute("data-product-code")
        })
        $.ajax({
            type: "POST",
            url: "/product/1",
            dataType: "JSON",
            data: {
                _token: $("#seller-allProduct-csrf").val(),
                _method: "DELETE",
                products: array__product_code,
            },
            success: function (response) {
               $.each(response, function (index, string__code) {
                $(`[data-product-code="${string__code}"]`).parents()[1].remove()
               });
            },
        });
    });
});