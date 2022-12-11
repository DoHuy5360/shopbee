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
                        //todo: Select the card nedd to delete
                        const node__pdt_wrap =
                            node__del_btn.parentNode.parentNode.parentNode
                                .parentNode.parentNode.parentNode;
                        // todo: Select the block contain all content
                        const node__pdt_group =
                            node__pdt_wrap.parentNode.parentNode;
                        //todo: Then remove card product
                        node__pdt_wrap.remove();
                        const arr__product_cards =
                            node__pdt_group.querySelector(
                                ".cart_page_warp_containt_border"
                            );
                        if (!arr__product_cards) {
                            node__pdt_group.remove();
                        }
                    }
                },
            });
        });
    });
    //todo: Xóa sản phẩm không hoạt động
    const node_inactive_del = document.getElementById(
        "cart-page-sticky-function-delInactive"
    );
    node_inactive_del.addEventListener("click", (e) => {
        const node__pdt_inactive = document.querySelectorAll(
            ".cart__product--inactive"
        );
        if (node__pdt_inactive) {
            node__pdt_inactive.forEach((_pdt) => {
                $.ajax({
                    type: "POST",
                    url: `/cart/${_pdt.getAttribute("data-cart-code")}`,
                    data: {
                        _method: "DELETE",
                        _token: $("#cartPage-csrf").val(),
                    },
                    success: function (response) {},
                    complete: function () {},
                });
            });
            document.getElementById("cart_page-product-inactive").remove();
        }
    });
    //todo: Hiển thị phân loại hàng
    function displayClassify() {
        const node__cls_container = document.querySelectorAll(
            ".cart_page_option_wrap_respon"
        );
        node__cls_container.forEach((container) => {
            const node__dsply_cls = container.querySelector(
                ".cart_page_about_choice"
            );
            const [node__cls1, node__cls2] = container.querySelectorAll(
                ".cart_check--method:checked"
            );
            let str__cls_temp = "";
            if (node__cls1 != null) {
                str__cls_temp += node__cls1.value;
                if (node__cls2 != null) {
                    str__cls_temp += ", ";
                    str__cls_temp += node__cls2.value;
                }
                node__dsply_cls.innerText = str__cls_temp;
            }
        });
    }
    displayClassify();
    const node__cls_confirm = document.querySelectorAll(
        ".cart_page_option_submit_btn_wrap"
    );
    node__cls_confirm.forEach((_btn) => {
        _btn.addEventListener("click", (e) => {
            displayClassify();
        });
    });
    // todo : Mở bảng Xóa sản phẩm trong giỏ [ Mobile ]
    $.each($(".cart__page-product-edit"), function (index, node__btn) {
        node__btn.addEventListener("click", (e) => {
            const node__card_pdt =
                node__btn.parentNode.parentNode.querySelectorAll(
                    ".cart_page_infor_warp"
                );
            node__card_pdt.forEach((node) => {
                node.classList.toggle("cart_page--card-transform");
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
                node__alert_type.text(`Maximum ${int__max_storage}`);
                node__number_item.value = int__max_storage;
                int__new_price = int__max_storage * int__orgin_price;
            } else {
                node__alert_type.text(`Minimum ${int__min_storage}`);
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
        const str__owner_code = e.target.getAttribute("data-owner-code");
        const node__owner_chckbox = document.querySelector(
            `[data-owner-check-code='${str__owner_code}']`
        );
        if (checkAllIsChecked(getSamePdtLvlChckbxs(str__owner_code))) {
            checkOne(node__owner_chckbox, true);
            if (checkAllIsChecked(node__grp_sgl_chckbxs)) {
                checkAll(node__all_chckbxs, true);
            }
        } else {
            checkOne(node__owner_chckbox, false);
            checkAll(node__all_chckbxs, false);
        }
        updateAmntPdtSlct();
        updateTotalPrice();
    });
    // todo: [Check|uncheck] một checkbox
    function checkOne(_node, _bool) {
        _node.checked = _bool;
    }
    //todo: Lấy tất cả [checkbox node] của sản phẩm [cùng nhóm]
    function getSamePdtLvlChckbxs(_owner_code) {
        const node__owner_wrap = document.querySelector(
            `[data-owner-wrap-code='${_owner_code}']`
        );
        const node__pdt_inside = node__owner_wrap.querySelectorAll(
            ".cartPage__choose--item"
        );
        return node__pdt_inside;
    }
    //todo: Kiểm tra [tất cả checkbox] đã [được check]
    function checkAllIsChecked(_arr_checkbox) {
        const bool__all_checked = [..._arr_checkbox].every((_checkbox) => {
            return _checkbox.checked;
        });
        return bool__all_checked;
    }
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
        $("#cart-page-total-price").text(formatCurrency(int__total_price));
        $("#cart-page-final-cost").text(formatCurrency(int__total_price));
    }
    //todo: scroll finish bar
    const sticky_bar = document.getElementById("cart-page-sticky-block");
    const sticky_bar_wrap = document.getElementById("cart-page-warp-containt");
    window.onscroll = function () {
        let objBottom = sticky_bar.getBoundingClientRect().bottom;
        let objWrapBottom = sticky_bar_wrap.getBoundingClientRect().bottom;
        if (Math.floor(objBottom + 1) >= Math.floor(objWrapBottom)) {
            sticky_bar.classList.remove("stickydown");
        } else {
            sticky_bar.classList.add("stickydown");
        }
    };
    //todo: pop down cart page feature
    const prod_wrap = document.querySelectorAll(
        ".cart_page_option_wrap_respon"
    );
    const mediaQuery = window.matchMedia("(max-width: 768px)").matches;
    if (!mediaQuery) {
        prod_wrap.forEach((btn) => {
            btn.addEventListener("click", (e) => {
                const box = btn.parentNode.querySelector(
                    ".cart_page_option_items"
                );
                if (box) {
                    box.classList.toggle("cart_page_option_wrap_action");
                    prod_wrap.forEach((btn2) => {
                        if (btn2 !== btn) {
                            const box2 = btn2.parentNode.querySelector(
                                ".cart_page_option_items"
                            );
                            if (box2) {
                                box2.classList.remove(
                                    "cart_page_option_wrap_action"
                                );
                            }
                        }
                    });
                }
            });
        });
    } else {
        const top_scroll = document.getElementById("scroll-to-top-respon");
        top_scroll.style.display = "none";
        prod_wrap.forEach((btn) => {
            btn.addEventListener("click", (e) => {
                const cart_page_hidden_wrap = document.getElementById(
                    "cart-page-warp-hidden"
                );
                const box = btn.parentNode.querySelector(
                    ".cart_page_option_items"
                );
                if(box){
                    cart_page_hidden_wrap.classList.toggle("cart_hidden_respon");
                    box.classList.toggle("cart_page_option_wrap_action_respon");
                    prod_wrap.forEach((btn2) => {
                        if (btn2 !== btn) {
                            const box2 = btn2.parentNode.querySelector(
                                ".cart_page_option_items"
                            );
                            box2.classList.remove(
                                "cart_page_option_wrap_action_respon"
                            );
                        }
                    });
                }
            });
        });
    }
    // todo: Bắt sự kiện [check|unCheck] theo [tất cả] sản phẩm
    const node__sgl_chckbx = document.querySelectorAll(
        ".cartPage__choose--item"
    );
    const node__all_chckbxs = document.querySelectorAll(
        ".cart__page-check-all"
    );
    node__all_chckbxs.forEach((checkbox, indx) => {
        checkbox.addEventListener("click", (e) => {
            if (checkbox.checked) {
                toggleCheckAll(indx, true);
                checkAll(node__owner_chckbxs, true);
                checkAll(node__sgl_chckbx, true);
            } else {
                toggleCheckAll(indx, false);
                checkAll(node__owner_chckbxs, false);
                checkAll(node__sgl_chckbx, false);
            }
            updateAmntPdtSlct();
            updateTotalPrice();
        });
    });
    function toggleCheckAll(_indx, _bool) {
        if (_indx) {
            checkOne(node__all_chckbxs[0], _bool);
        } else {
            checkOne(node__all_chckbxs[1], _bool);
        }
    }
    // todo: Bắt sự kiện [check|unCheck] theo [nhóm] sản phẩm
    const node__owner_chckbxs = document.querySelectorAll(
        ".cart__page--owner-check"
    );
    node__owner_chckbxs.forEach((checkbox) => {
        checkbox.addEventListener("change", (e) => {
            const str__owner_code = checkbox.getAttribute(
                "data-owner-check-code"
            );
            const node__owner_wrap = document.querySelector(
                `[data-owner-wrap-code="${str__owner_code}"]`
            );
            const node__pdt_chckbxs = node__owner_wrap.querySelectorAll(
                ".cartPage__choose--item"
            );
            if (checkbox.checked) {
                checkAll(node__pdt_chckbxs, true);
                if (checkAllIsChecked(node__grp_sgl_chckbxs)) {
                    checkAll(node__all_chckbxs, true);
                }
            } else {
                checkAll(node__pdt_chckbxs, false);
                checkAll(node__all_chckbxs, false);
            }
            updateAmntPdtSlct();
            updateTotalPrice();
        });
    });
    const node__grp_sgl_chckbxs = [...node__sgl_chckbx].concat([
        ...node__owner_chckbxs,
    ]);
    // todo: [Check|unCheck] nhiều
    function checkAll(_arr_checkbox, _bool) {
        _arr_checkbox.forEach((checkbox) => {
            checkbox.checked = _bool;
        });
    }
    const node__amnt_pdt_slct = document.getElementById(
        "cart-page-amnt-pdt-slct"
    );
    function updateAmntPdtSlct() {
        let int__amnt_pdt_slct = 0;
        node__sgl_chckbx.forEach((chckbx) => {
            if (chckbx.checked) int__amnt_pdt_slct++;
        });
        node__amnt_pdt_slct.innerText = int__amnt_pdt_slct;
    }
    const node__submit_form = document.getElementById("cart-form-submit");
    node__submit_form.addEventListener("submit", (e) => {
        e.preventDefault();
        const bool__is_slct = [...node__sgl_chckbx].some((chckbx) => {
            return chckbx.checked;
        });
        if (bool__is_slct) {
            node__submit_form.submit();
        }
    });
});
