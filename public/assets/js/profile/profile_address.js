export function starScriptAddress() {
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
        node__dialog_add.classList.add('active');
    });
    node__close_add_btn.addEventListener("click", (e) => {
        node__body.style.overflow = "unset";
        node__dialog_add.close();
        node__dialog_add.classList.remove('active');
    });
}
const node__check_page = document.getElementById("profile-address-wrap");
if (node__check_page) {
    starScriptAddress();
}
