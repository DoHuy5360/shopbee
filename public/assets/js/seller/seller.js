import { chart__index, starScript } from "../monitor/monitor.js";

const menuList = document.querySelectorAll(".sidebar__menu--title");
menuList.forEach((menu) => {
    menu.addEventListener("click", (e) => {
        menu.parentNode
            .querySelector(".sidebar__menu--content")
            .classList.toggle("toggle__none");
        menu.parentNode
            .querySelector(".seller__arrow--sidebar")
            .classList.toggle("toggle__transform");
    });
});

// todo: Cập nhật tiêu đề
class RedirectContent {
    constructor(_name) {
        this.str__name = _name;
        this.node__target = document.querySelector(this.str__name);
    }
    addEventClick(_callback) {
        this.node__target.addEventListener("click", (e) => {
            _callback(this);
        });
    }
    setNewState(_slug) {
        window.history.replaceState("state name", null, _slug);
    }
    setRedrtBar(_node__redrt_bar) {
        this.node__redrt_bar = document.getElementById(_node__redrt_bar);
    }
    clearRedrtBar() {
        if (this.node__redrt_bar) this.node__redrt_bar.innerHTML = "";
    }
    crtEleClass(_name, _txt, _attrs) {
        const node = document.createElement(_name);
        if (_txt) node.textContent = _txt;
        for (let key in _attrs) {
            node.setAttribute(key, _attrs[key]);
        }
        return node;
    }
    crtRedrNode(_name, _id) {
        const node__redrt_wrap = this.crtEleClass("div", _name, {
            class: "seller__redirect-wrap",
            id: _id,
        });
        if (this.node__redrt_bar)
            this.node__redrt_bar.appendChild(node__redrt_wrap);
    }
    displayLoading(_boll) {
        if (_boll) {
            $("#seller-frame-cover").css("z-index", 16);
        } else {
            setTimeout(() => {
                $("#seller-frame-cover").css("z-index", -1);
            }, 1000);
        }
    }
}
$(document).ready(function () {
    const rdrt_monitor = new RedirectContent("#seller-navbar-current-title");
    rdrt_monitor.addEventClick((this_obj) => {
        this_obj.displayLoading(true);
        this_obj.setNewState("/seller/monitor");
        $.ajax({
            type: "GET",
            url: "/monitor",
            success: function (response) {
                $("#seller-contentTable-tranfer").html(response);
            },
            complete: function () {
                if(chart__index){
                    chart__index.destroy();
                }
                starScript();
                this_obj.displayLoading(false);
            },
        });
    });
    const rdrt__pdt_manage = new RedirectContent("#seller-all-product-btn");
    rdrt__pdt_manage.addEventClick((this_obj) => {
        this_obj.displayLoading(true);
        this_obj.setNewState("/seller/manage_product");
        $.ajax({
            type: "GET",
            url: "/manage_product",
            success: function (response) {
                $("#seller-contentTable-tranfer").html(response);
            },
            complete: function () {
                this_obj.displayLoading(false);
            },
        });
    });
    const rdrt__order_manage = new RedirectContent("#seller-all-order-btn");
    rdrt__order_manage.addEventClick((this_obj) => {
        this_obj.displayLoading(true);
        this_obj.setNewState("/seller/manage_order");
        $.ajax({
            type: "GET",
            url: "/manage_order",
            success: function (response) {
                $("#seller-contentTable-tranfer").html(response);
            },
            complete: function () {
                this_obj.displayLoading(false);
            },
        });
    });
});
