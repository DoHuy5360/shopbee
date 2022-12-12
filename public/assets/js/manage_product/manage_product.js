// todo: Bắt sự kiện hiển thị thanh thao tác [xóa, hiển thị, ẩn] sản phẩm
var node__hidden_action = document.getElementById(
    "seller-allProduct-delete-card-wrap"
);
var node__card_checkbox = document.querySelectorAll(
    ".seller__allProduct--card-checkbox"
);
var node__amnt_card_del = document.getElementById(
    "manage__product--amount-card-delete"
);
var array__card_checked = [];
function updtAmntCardDel() {
    node__amnt_card_del.innerText = array__card_checked.length;
}
function toggleHiddenActionBox() {
    updtAmntCardDel();
    if (array__card_checked.length) {
        node__hidden_action.style.display = "flex";
    } else {
        node__hidden_action.style.display = "none";
        return true;
    }
}
function toggleCheckAll(_bollean) {
    node__check_all.forEach((checkbox) => {
        checkbox.checked = _bollean;
    });
}
// todo: Check từng sản phẩm trong danh sách
node__card_checkbox.forEach((checkbox) => {
    checkbox.addEventListener("change", (e) => {
        if (checkbox.checked) {
            array__card_checked.push(checkbox);
            if (array__card_checked.length === node__card_checkbox.length) {
                toggleCheckAll(true);
            }
        } else {
            int__card_index = array__card_checked.indexOf(checkbox);
            array__card_checked.splice(int__card_index, 1);
        }
        toggleHiddenActionBox() ? toggleCheckAll(false) : null;
    });
});
// todo: Check tất cả sản phẩm trong danh sách
var node__check_all = document.querySelectorAll(".manage__product-check-all");
node__check_all.forEach((checkbox) => {
    checkbox.addEventListener("change", (e) => {
        array__card_checked.length = 0;
        node__card_checkbox.forEach((inp) => {
            if (checkbox.checked) {
                inp.checked = true;
                toggleCheckAll(true);
                array__card_checked.push(inp);
            } else {
                inp.checked = false;
                array__card_checked.length = 0;
            }
            toggleHiddenActionBox() ? toggleCheckAll(false) : null;
        });
    });
});

// todo: Xóa sản phẩm
$(document).ready(function () {
    $("#seller-allProduct-card-delete-btn").click(function (e) {
        e.preventDefault();
        const array__product_code = array__card_checked.map((checkbox) => {
            return checkbox.getAttribute("data-product-code");
        });
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
                    $(`[data-product-code="${string__code}"]`)
                        .parents()[1]
                        .remove();
                });
            },
        });
    });
    $("#seller-allProduct-card-hidden-btn").click(function (e) {
        e.preventDefault();
        setVisibilyForPdt(true);
    });
    $("#seller-allProduct-card-display-btn").click(function (e) {
        e.preventDefault();
        setVisibilyForPdt(false);
    });
    function setVisibilyForPdt(_bool) {
        array__card_checked.forEach((card) => {
            const str__pdt_code = card.getAttribute("data-product-code");
            $.ajax({
                type: "POST",
                url: `/manage_product/${str__pdt_code}`,
                data: {
                    _token: $("#seller-allProduct-csrf").val(),
                    _method: "PUT",
                    hidden: _bool,
                },
                success: function (response) {
                    console.log(response);
                },
                complete: function () {
                    const node__vis_stts = document.querySelector(
                        `[data-product-visibily-code='${str__pdt_code}']`
                    );
                    node__vis_stts.innerText =
                        node__vis_stts.innerText == "Hidden"
                            ? "Visible"
                            : "Hidden";
                },
            });
        });
    }
    const node__dsply_hden_cls = document.querySelectorAll(
        ".manage__product_view_more_classification"
    );
    node__dsply_hden_cls.forEach((_btn) => {
        _btn.addEventListener("click", (e) => {
            _btn.classList.toggle("active");
            const node__prnt_lv1 = _btn.parentNode;
            const node__hden_cls = node__prnt_lv1.querySelectorAll(
                ".manage__product_wrap_by_classify"
            );
            const arr__hden_cls = [...node__hden_cls].slice(
                3,
                node__hden_cls.lenght
            );
            arr__hden_cls.forEach((cls) => {
                cls.classList.toggle("active");
            });
        });
    });
});
