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

//! -------------------------- respon seller list-----------------------------
// todo: Chuyển đổi nội dung thân trang

function setNewState(_slug) {
    window.history.replaceState("state name", null, _slug);
}
// todo: Cập nhật tiêu đề
class REDIRECT {
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
    callAjax(_type, _url, _success, _complete) {
        $.ajax({
            type: _type,
            dataType: "json",
            url: _url,
            success: function (response) {
                _success(response);
            },
            complete: function () {
                _complete();
            },
        });
    }
}
const rdrt__pdt_manage = new REDIRECT("#seller-all-product-btn");
rdrt__pdt_manage.addEventClick((this_obj) => {
    this_obj.displayLoading(true);
    this_obj.setNewState("/seller/manage_product");
    this_obj.callAjax(
        "GET",
        "/manage_product",
        (response) => {
            $("#seller-contentTable-tranfer").html(response);
        },
        () => {
            this_obj.displayLoading(false);
        }
    );
});

const rdrt_monitor = new REDIRECT("#seller-navbar-current-title");
rdrt_monitor.addEventClick((this_obj) => {
    this_obj.setRedrtBar("#seller-current-page");
    this_obj.displayLoading(true);
    this_obj.setNewState("/seller/monitor");
    this_obj.callAjax(
        "GET",
        "/monitor",
        (response) => {
            $("#seller-contentTable-tranfer").html(response);
        },
        () => {
            this_obj.displayLoading(false);
        }
    );
});
