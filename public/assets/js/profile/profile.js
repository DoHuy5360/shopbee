import { starScriptEdit } from "../profile/profile_edit.js";
import { starScriptAddress } from "../profile/profile_address.js"

$(document).ready(function () {
    // todo: Hiện đơn mua
    $("#profile-menu-element-order").click(function () {
        toogleFrameCover(true);
        $.ajax({
            type: "GET",
            url: "/purchase",
            success: function (response) {
                $("#profile-body-tranfer-wrap").html(response);
            },
            complete: function () {
                toogleFrameCover(false);
            },
        });
    });
    //todo: hiện chỉnh sửa hồ sơ
    $("#profile-menu-element-info").click(function () {
        toogleFrameCover(true);
        $.ajax({
            type: "GET",
            url: "/user",
            success: function (response) {
                $("#profile-body-tranfer-wrap").html(response);
            },
            complete: function () {
                starScriptEdit();
                toogleFrameCover(false);
            },
        });
    });
    //todo: hiện danh sách địa chỉ
    $("#profile-menu-element-address").click(function () {
        toogleFrameCover(true);
        $.ajax({
            type: "GET",
            url: "/user_address",
            success: function (response) {
                $("#profile-body-tranfer-wrap").html(response);
            },
            complete: function () {
                starScriptAddress()
                toogleFrameCover(false);
            },
        });
    });
    $.each($(".profile__element--option"), function (indx, node) {
        node.addEventListener("click", (e) => {
            const str__slug = node.getAttribute("data-slug");
            window.history.replaceState(
                "state name",
                null,
                `/profile/${str__slug}`
            );
        });
    });
    function toogleFrameCover(_boll_display) {
        if (_boll_display) {
            $("#seller-frame-cover").css("z-index", 16);
        } else {
            setTimeout(() => {
                $("#seller-frame-cover").css("z-index", -1);
            }, 500);
        }
    }
});
