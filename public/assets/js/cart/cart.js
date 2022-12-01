$(document).ready(function () {
    // todo: Xóa vật phẩm khỏi giỏ hàng
    const node__del_btns = $(".cart_page_actionDel");
    $.each(node__del_btns, function (index) {
        const node__del_btn = node__del_btns[index];
        node__del_btn.addEventListener("click", (e) => {
            $.ajax({
                type: "POST",
                url: `/cart/${node__del_btn.getAttribute("data-item-code")}`,
                data: {
                    _method: "DELETE",
                    _token: $("#cartPage-csrf").val(),
                },
                success: function (response) {
                    if (response.status === 200) {
                        node__del_btn.parentNode.parentNode.parentNode.parentNode.remove();
                    }
                },
            });
        });
    });
    function formatCurrency(raw_money) {
        return raw_money
            .toFixed(1)
            .replace(/\d(?=(\d{3})+\.)/g, "$&.")
            .slice(0, -2);
    }
    // todo: Cập nhật giá tiền theo số lượng vật phẩm | Cập nhật tổng giá tiền
    function changePrice(_target_node, _amount) {
        const str__item_code = _target_node.getAttribute("data-item-code");
        const node__item_price = $(
            `div[data-item-code-price="${str__item_code}"]`
        );
        const int__origin_price = parseInt(
            node__item_price.attr("data-origin-price")
        );
        const int__new_price = _amount * int__origin_price;
        node__item_price.attr("data-new-price", int__new_price);
        const str__price_formatted = formatCurrency(int__new_price);
        node__item_price.text(str__price_formatted);
        updateTotalPrice();
    }
    // todo: Thêm số lượng sản phẩm
    $(".cart_page_quantity_btn_plus").click(function (e) {
        e.preventDefault();
        const node__parent_lv2 = e.target.parentNode;
        const node__amount_item = node__parent_lv2.querySelector(
            ".cartPage__item--amount"
        );
        let int__amount_item = parseInt(node__amount_item.value);
        if (int__amount_item < node__amount_item.max) {
            node__amount_item.value++;
            changePrice(node__amount_item, (int__amount_item += 1));
        }
    });
    // todo: Giảm số lượng sản phẩm
    $(".cart_page_quantity_btn_minus").click(function (e) {
        e.preventDefault();
        const node__parent_lv2 = e.target.parentNode;
        const node__amount_item = node__parent_lv2.querySelector(
            ".cartPage__item--amount"
        );
        let int__amount_item = parseInt(node__amount_item.value);
        if (int__amount_item > node__amount_item.min) {
            node__amount_item.value--;
            changePrice(node__amount_item, (int__amount_item -= 1));
        }
    });
    // todo: Nhập số lượng sản phẩm tùy chọn | Cảnh báo nhập sai số lượng vật phẩm | Cập nhật tổng giá tiền
    $(".cartPage__item--amount").change(function (inp_box) {
        inp_box.preventDefault();
        const node__number_item = inp_box.target;
        const int__amount_item = parseInt(node__number_item.value);
        const str__item_code = node__number_item.getAttribute("data-item-code");
        const node__item_price = $(
            `[data-item-code-price="${str__item_code}"]`
        );
        const int__orgin_price = parseInt(
            node__item_price.attr("data-origin-price")
        );
        const int__max_storage = parseInt(node__number_item.max);
        const int__min_storage = parseInt(node__number_item.min);
        let int__new_price;
        if (
            int__amount_item > int__max_storage ||
            int__amount_item < int__min_storage
        ) {
            $("#body").css("overflow", "hidden");
            $("#cart-page-backdrop").css("display", "block");
            const node__alert_type = $("#cart-page-amount-item");
            if (int__amount_item > int__max_storage) {
                node__alert_type.text(`nhiều nhất ${int__max_storage}`);
                node__number_item.value = int__max_storage;
                int__new_price = int__max_storage * int__orgin_price;
            } else {
                node__alert_type.text(`ít nhất ${int__min_storage}`);
                node__number_item.value = int__min_storage;
                int__new_price = int__min_storage * int__orgin_price;
            }
        } else {
            int__new_price = int__amount_item * int__orgin_price;
        }
        node__item_price.attr("data-new-price", int__new_price);
        node__item_price.text(formatCurrency(int__new_price));
        updateTotalPrice();
    });
    // todo: Đóng cảnh báo nhập sai số lượng vật phẩm
    $("#cart-page-close-alert").click(function (e) {
        $("#body").css("overflow", "scroll");
        $("#cart-page-backdrop").css("display", "none");
    });
    //todo: Bắt sự kiện check chọn sản phẩm | Cập nhật tổng giá tiền
    $(".cartPage__choose--item").change(function (e) {
        updateTotalPrice();
    });
    //todo: cập nhật tổng giá tiềm
    function updateTotalPrice() {
        int__total_price = 0;
        $.each($(".cartPage__choose--item"), function (index) {
            if (this.checked) {
                const str__item_code = this.getAttribute("data-cart-select");
                const node__item_price = $(
                    `[data-item-code-price="${str__item_code}"]`
                );
                int__total_price += parseInt(
                    node__item_price.attr("data-new-price")
                );
            }
        });
        $("#cart-page-total-price").text(int__total_price);
    }
    //todo: scroll finish bar
    const sticky_bar = document.getElementById("cart-page-sticky-block");
    const sticky_bar_wrap = document.getElementById("cart-page-warp-containt");
    window.onscroll = function () {
        let objBottom = sticky_bar.getBoundingClientRect().bottom;
        let objWrapBottom = sticky_bar_wrap.getBoundingClientRect().bottom;

        if (Math.floor(objBottom) == Math.floor(objWrapBottom)) {
            sticky_bar.classList.remove("stickydown");

        } else {
            sticky_bar.classList.add("stickydown");
        }
    };
    //todo: pop down cart page feature
    const prod_wrap = document.querySelectorAll(".cart_page_option_wrap_respon")
    const mediaQuery = window.matchMedia('(max-width: 768px)').matches
    if (!mediaQuery) {
        prod_wrap.forEach((btn) => {
            btn.addEventListener("click", (e) => {
                const box = btn.parentNode.querySelector(".cart_page_option_items");
                box.classList.toggle("cart_page_option_wrap_action");
                prod_wrap.forEach((btn2) => {
                    if (btn2 !== btn) {
                        const box2 = btn2.parentNode.querySelector(".cart_page_option_items");
                        box2.classList.remove("cart_page_option_wrap_action");
                    }
                });
            });
        });
    } else {
        const top_scroll = document.getElementById("scroll-to-top-respon")
        top_scroll.style.display = "none"
        prod_wrap.forEach((btn) => {
            btn.addEventListener("click", (e) => {
                const cart_page_hidden_wrap = document.getElementById("cart-page-warp-hidden")
                const box = btn.parentNode.querySelector(".cart_page_option_items");
                cart_page_hidden_wrap.classList.toggle("cart_hidden_respon");
                box.classList.toggle("cart_page_option_wrap_action_respon");
                prod_wrap.forEach((btn2) => {
                    if (btn2 !== btn) {
                        const box2 = btn2.parentNode.querySelector(".cart_page_option_items");
                        box2.classList.remove("cart_page_option_wrap_action_respon");
                    }
                });
            });
        });
    }
});
