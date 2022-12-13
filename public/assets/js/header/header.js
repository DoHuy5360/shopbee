import { arr_categories } from "../new_product/category_array.js";
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
//todo: Search
const node__search_rslt = document.getElementById(
    "mainHome-result-search-tray"
);
const node__search_empty = document.getElementById(
    "mainHome__search--result-empty"
);
const node__search_inp = document.getElementById("mainHome-search-inp");
const node__search_rsult_tray = document.getElementById(
    "mainHome-result-search-wrap"
);
node__search_inp.addEventListener("focus", (e) => {
    node__search_rsult_tray.style.display = "block";
});
node__search_inp.addEventListener("input", (e) => {
    node__search_rsult_tray.style.display = "block";
    node__search_rslt.innerHTML = "";
    const str__inp_text = node__search_inp.value;
    const regex__pattern = new RegExp(`${str__inp_text}`);
    if (!str__inp_text) {
        node__search_empty.style.display = "block";
    } else {
        node__search_empty.style.display = "none";
        arr_categories.forEach((_category) => {
            if (_category.match(regex__pattern)) {
                node__search_rslt.appendChild(
                    crtEle(
                        "div",
                        {
                            class: "mainHome__search--result",
                        },
                        _category
                    )
                );
            }
        });
        const node__srch_rslt_ele = document.querySelectorAll(
            ".mainHome__search--result"
        );
        node__srch_rslt_ele.forEach((_node) => {
            _node.addEventListener("click", (e) => {
                node__search_rsult_tray.style.display = "none";
            });
        });
    }
});
document.addEventListener("click", (e) => {
    if (e.target !== node__search_inp) {
        node__search_rsult_tray.style.display = "none";
    }
});
node__search_inp.addEventListener("keydown", (e) => {
    if (e.key === "Escape") {
        node__search_rsult_tray.style.display = "none";
    }
});
function crtEle(_name, _attrs, _txt) {
    const node = document.createElement(_name);
    if (_txt) node.innerHTML = _txt;
    for (let key in _attrs) {
        node.setAttribute(key, _attrs[key]);
    }
    return node;
}
