window.addEventListener("load", (e) => {
    setTimeout(() => {
        $("#seller-frame-cover-fixed").css({
            display: "none",
        });
        $("#body").css({
            overflow: "visible",
        });
    }, 500);
});

const scroll_top_btn = document.getElementById("scroll-to-top");
scroll_top_btn.addEventListener("click", (e) => {
    window.scrollTo(0, 0);
});

const scroll_top_btn_respon = document.getElementById("scroll-to-top-respon");
scroll_top_btn_respon.addEventListener("click", (e) => {
    window.scrollTo(0, 0);
});
