const node__navbar_btns = document.querySelectorAll(
    ".profile__process-navbar-btn"
);
let node__first_navbar_btn = node__navbar_btns[0];
node__navbar_btns.forEach((btn) => {
    btn.addEventListener("click", (e) => {
        btn.classList.add("active_link");
        node__first_navbar_btn.classList.remove("active_link");
        node__first_navbar_btn = btn;
    });
});
