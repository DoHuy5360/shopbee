import { starScriptEdit } from "../profile/profile_edit.js";
import { starScriptAddress } from "../profile/profile_address.js";
import { toggleLoadingAnimation, updatePageContent, updateURL } from "../module/function/profile_func.js"

$(document).ready(function () {
    // todo: Hiện đơn mua
    $("#profile-menu-element-order").click(function () {
        updateURL("order")
        toggleLoadingAnimation(true);
        updatePageContent("GET", "/purchase", ()=>{
            toggleLoadingAnimation(false);
        })
    });
    //todo: hiện chỉnh sửa hồ sơ
    $("#profile-menu-element-info").click(function () {
        updateURL("info")
        toggleLoadingAnimation(true);
        updatePageContent("GET", "/user", ()=>{
            starScriptEdit();
            toggleLoadingAnimation(false);
        })
    });
    //todo: hiện danh sách địa chỉ
    $("#profile-menu-element-address").click(function () {
        updateURL("address")
        toggleLoadingAnimation(true);
        updatePageContent("GET", "/user_address", ()=>{
            starScriptAddress();
            toggleLoadingAnimation(false);
        })
    });
});
