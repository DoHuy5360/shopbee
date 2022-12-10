import { toggleLoadingAnimation } from "../module/function/profile_func.js";

export function starScriptAddress() {
    $(document).ready(function () {
        const node__body = document.getElementById("body");
        const node__dialog_add = document.getElementById(
            "profile-dialog-add-address"
        );
        const node__close_add_btn = document.getElementById(
            "profile-address-form-back-btn"
        );
        const node__add_btn = document.getElementById(
            "profile-address-add-new-wrp"
        );
        node__add_btn.addEventListener("click", (e) => {
            node__body.style.overflow = "hidden";
            node__dialog_add.showModal();
            node__dialog_add.classList.add("active");
        });
        node__close_add_btn.addEventListener("click", (e) => {
            node__body.style.overflow = "unset";
            node__dialog_add.close();
            node__dialog_add.classList.remove("active");
        });
        //todo: Thêm một địa chỉ mới
        const node__form_new_adres = document.getElementById(
            "profile-address-form-add-new"
        );
        node__form_new_adres.addEventListener("submit", (e) => {
            e.preventDefault();
            $("#profile-address-form-add-new").ajaxSubmit({
                type: "POST",
                url: node__form_new_adres.getAttribute("action"),
                data: {
                    _token: $("[name='_token']").val(),
                },
                success: function (response) {
                    refreshListAddress();
                },
                complete: function () {
                    node__body.style.overflow = "unset";
                },
                error: function () {
                    alert(
                        "Message: Your request fail!\nFrom 'profile_address.js'\nMaybe your address format isn't valid?"
                    );
                },
            });
        });
        // todo: Thiết lập địa chỉ mặc định
        const node__set_dflt = document.querySelectorAll(
            ".profile__address--card-set-default"
        );
        node__set_dflt.forEach((btn) => {
            btn.addEventListener("click", (e) => {
                const str_adres_code = btn.getAttribute("data-addess-code");
                $.ajax({
                    type: "POST",
                    url: `/user_address/${str_adres_code}`,
                    data: {
                        _method: "PUT",
                        _token: $("[name='_token']").val(),
                    },
                    success: function (response) {
                        refreshListAddress();
                    },
                    complete: function () {
                        node__body.style.overflow = "unset";
                    },
                });
            });
        });
        // todo: Xóa địa chỉ
        const node__adrs_del = document.querySelectorAll(
            ".profile__address--card-del"
        );
        node__adrs_del.forEach((btn) => {
            btn.addEventListener("click", (e) => {
                const str__adrs_code =
                    btn.parentNode.getAttribute("data-addess-code");
                $.ajax({
                    type: "POST",
                    url: `/user_address/${str__adrs_code}`,
                    data: {
                        _method: "DELETE",
                        _token: $("[name='_token']").val(),
                    },
                    success: function (response) {
                        refreshListAddress();
                    },
                });
            });
        });
        function refreshListAddress() {
            toggleLoadingAnimation(true);
            $.ajax({
                type: "GET",
                url: "/user_address",
                success: function (response) {
                    $("#profile-body-tranfer-wrap").html(response);
                },
                complete: function () {
                    starScriptAddress();
                    toggleLoadingAnimation(false);
                },
            });
        }
    });
}
const node__check_page = document.getElementById("profile-address-wrap");
if (node__check_page) {
    starScriptAddress();
}
