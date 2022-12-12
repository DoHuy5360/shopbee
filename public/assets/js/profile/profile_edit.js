import { InputValidation } from "../module/class/validation.js";
import { toggleLoadingAnimation } from "../module/function/profile_func.js";

export function starScriptEdit() {
    const all_birthday_choice = document.querySelectorAll(
        ".profile__birthday--option-wrap"
    );
    let temporary;
    all_birthday_choice.forEach((block) => {
        block.addEventListener("click", (e) => {
            if (block.classList.contains("active")) {
                block.classList.remove("active");
                temporary = null;
            } else {
                block.classList.add("active");
                if (temporary) {
                    temporary.classList.remove("active");
                }
                temporary = block;
            }
        });
    });
    const birthday_field = document.getElementById(
        "profile-edit-birthday-value"
    );
    document
        .querySelectorAll(".profile__birthday--list-value")
        .forEach((list_datetime) => {
            list_datetime.addEventListener("click", (e_click) => {
                const date_value = e_click.target.innerText;
                list_datetime.parentNode.querySelector(
                    ".profile__birthday--value"
                ).innerText = date_value;
            });
        });
    // todo: Chèn danh sách năm, ngày
    const node__brth_year = document.querySelector("[data-datetime='2']");
    const date__init_date = new Date();
    let int__crrnt_year = date__init_date.getFullYear();
    for (let indx = 0; indx < 100; indx++) {
        const node__new_year = document.createElement("span");
        node__new_year.setAttribute(
            "class",
            "profile__birthday--number-choice"
        );
        node__new_year.innerText = int__crrnt_year--;
        node__brth_year.appendChild(node__new_year);
    }
    //todo: Hiển thị hình ảnh
    const node__avatar_img = document.getElementById("profile-edit-avatar");
    node__avatar_img.addEventListener("change", (e) => {
        const node__tray_img = document.createElement("img");
        const file = node__avatar_img.files[0];
        const file__obj = new FileReader();
        file__obj.onloadend = function () {
            node__tray_img.src = file__obj.result;
            document.getElementById("profile-avatar-wrap").innerHTML = "";
            document
                .getElementById("profile-avatar-wrap")
                .appendChild(node__tray_img);
        };
        if (file) {
            file__obj.readAsDataURL(file);
        } else {
            node__tray_img.src = "";
        }
    });
    // todo: Validation
    const valid__pfle_name = new InputValidation("#profile-edit-user-name");
    valid__pfle_name.addEventInput((ths_obj) => {
        ths_obj.updateValueLength();
        ths_obj.checkNotEmpty();
        ths_obj.checkLengthMinMax(3, 30);
    });
    valid__pfle_name.addEventKeyPress((ths_obj) => {
        ths_obj.preventKeyPress("special");
    });
    valid__pfle_name.addEventChange((ths_obj) => {
        ths_obj.removeWhitespaceStartEnd();
        ths_obj.removeDuplicateWhitespace();
    });
    const valid__pfle_shp = new InputValidation(
        "#profile-edit-field-shop-name"
    );
    valid__pfle_shp.addEventInput((ths_obj) => {
        ths_obj.updateValueLength();
        ths_obj.checkNotEmpty();
        ths_obj.checkLengthMinMax(3, 30);
    });
    valid__pfle_shp.addEventChange((ths_obj) => {
        ths_obj.removeWhitespaceStartEnd();
        ths_obj.removeDuplicateWhitespace();
    });
    const valid__pfle_phone = new InputValidation("#profile-edit-field-phone");
    valid__pfle_phone.addEventInput((ths_obj) => {
        ths_obj.updateValueLength();
        ths_obj.checkNotEmpty();
        ths_obj.checkLengthMinMax(10, 10);
    });
    valid__pfle_phone.addEventKeyPress((ths_obj) => {
        ths_obj.preventKeyPress("letter");
        ths_obj.preventKeyPress("special");
        ths_obj.preventKeyPress(" ");
    });
    valid__pfle_phone.addEventChange((ths_obj) => {
        ths_obj.removeWhitespace();
        ths_obj.updateValueLength();
        ths_obj.checkLengthMinMax(10, 10);
        str__phone_temp.value = ths_obj.node__target.value;
    });
    const valid__pfle_email = new InputValidation("#profile-edit-field-email");
    valid__pfle_email.addEventInput((ths_obj) => {
        ths_obj.updateValueLength();
        ths_obj.checkNotEmpty();
        ths_obj.checkValidEmail();
        ths_obj.checkLengthMinMax(11, 30);
    });
    valid__pfle_email.addEventKeyPress((ths_obj) => {
        ths_obj.preventKeyPress(" ");
    });
    valid__pfle_email.addEventChange((ths_obj) => {
        ths_obj.removeWhitespace();
        ths_obj.updateValueLength();
        ths_obj.checkLengthMinMax(11, 30);
        str__email_temp.value = ths_obj.node__target.value;
    });
    // todo: Che email, số điện thoại
    const node__user_email = document.getElementById(
        "profile-edit-field-email"
    );
    const str__email_origin = node__user_email.value;
    const node__user_phone = document.getElementById(
        "profile-edit-field-phone"
    );
    const str__phone_origin = node__user_phone.value;
    function maskIt(str, keep_h, keep_f) {
        var len = str.length,
            re = new RegExp(
                "(.{" +
                    keep_h +
                    "})(.{" +
                    (len - (keep_h + keep_f)) +
                    "})(.{" +
                    keep_f +
                    "})",
                "g"
            );
        return str.replace(re, function (match, a, b, c) {
            return a + ("" + b).replace(/./g, "*") + c;
        });
    }
    const str__email_hden = maskIt(str__email_origin.toString(), 2, 10);
    node__user_email.value = str__email_hden;
    const str__phone_hden = maskIt(str__phone_origin.toString(), 0, 2);
    node__user_phone.value = str__phone_hden;
    const node__edt_email = document.getElementById(
        "profile-edit-field-email-action"
    );
    const str__email_temp = document.querySelector("[name='email']");
    const str__phone_temp = document.querySelector("[name='phone']");
    node__edt_email.addEventListener("click", (e) => {
        const obj__email_set = {
            val: str__email_origin,
            inp: node__user_email,
            btn: node__edt_email,
            hdn: str__email_hden,
            ref: str__email_temp,
        };
        activeAccessChange.call(obj__email_set);
    });
    const node__edt_phone = document.getElementById(
        "profile-edit-field-phone-action"
    );
    node__edt_phone.addEventListener("click", (e) => {
        const obj__phone_set = {
            val: str__phone_origin,
            inp: node__user_phone,
            btn: node__edt_phone,
            hdn: str__phone_hden,
            ref: str__phone_temp,
        };
        activeAccessChange.call(obj__phone_set);
    });
    function activeAccessChange() {
        this.inp.value = this.val || "";
        this.inp.disabled = false;
        this.inp.focus();
        this.btn.classList.toggle("active");
        if (this.btn.innerText == "Change") {
            this.btn.innerText = "Cancel";
        } else {
            this.inp.value = this.hdn || "";
            this.inp.disabled = true;
            this.btn.innerText = "Change";
            this.ref.value = this.val;
        }
    }
    const node__form_updt = document.getElementById("profile-edit-form");
    node__form_updt.addEventListener("submit", (e) => {
        e.preventDefault();
        const bool__arr_valid = [
            valid__pfle_name.isValid(),
            valid__pfle_phone.isValid(),
            valid__pfle_email.isValid(),
        ].every((_valid) => {
            return _valid;
        });
        if (bool__arr_valid) {
            const [d, m, y] = document.querySelectorAll(
                ".profile__birthday--value"
            );
            birthday_field.value = [d.innerText, m.innerHTML, y.innerHTML].join(
                "/"
            );
            $(document).ready(function () {
                $("#profile-edit-form").ajaxSubmit({
                    type: "POST",
                    url: node__form_updt.getAttribute("action"),
                    data: {
                        _method: "PUT",
                        _token: $("[name='_token']").val(),
                    },
                    success: function (response) {},
                    complete: function () {
                        toggleLoadingAnimation(true);
                        const str__user_code = $("#profile-user-code").val();
                        $.ajax({
                            type: "GET",
                            url: "/user",
                            data: {
                                user_code: str__user_code,
                            },
                            success: function (response) {
                                $("#profile-body-tranfer-wrap").html(response);
                            },
                            complete: function () {
                                starScriptEdit();
                                toggleLoadingAnimation(false);
                            },
                        });
                    },
                });
            });
        }
    });
}
const node__check_page = document.getElementById("profile-body-right-wrap");
if (node__check_page) {
    starScriptEdit();
}
