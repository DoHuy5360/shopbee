const node__navbar_btns = document.querySelectorAll(
    ".profile__process-navbar-btn"
);
let node__first_navbar_btn = node__navbar_btns[0];
node__navbar_btns.forEach((btn) => {
    btn.addEventListener("click", (e) => {
        console.log(btn);
        if (btn != node__first_navbar_btn) {
            btn.classList.add("active_link");
            node__first_navbar_btn.classList.remove("active_link");
            node__first_navbar_btn = btn;
        }
    });
});
$(document).ready(function () {
    $.each($(".profile__process-navbar-btn"), function (index, btn) {
        btn.addEventListener("click", function (e) {
            e.preventDefault();
            $.ajax({
                type: "GET",
                url: `/purchase/${$("#profile-user-code").val()}`,
                data: {
                    type: btn.getAttribute("data-type"),
                },
                success: function (response) {
                    $("#profile-process-list-product-wrap").html(response);
                },
            });
        });
    });
});
