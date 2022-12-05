const category_arrow_left = document.getElementById(
    "mainHome-category-arrow-left"
);
const category_arrow_right = document.getElementById(
    "mainHome-category-arrow-right"
);
const category_wrap = document.getElementById("mainHome-listOfCate");
category_arrow_left.addEventListener("click", (e) => {
    category_arrow_left.style.display = "none";
    category_arrow_right.style.display = "grid";
    category_wrap.style.transform = "translateX(0)";
});
category_arrow_right.addEventListener("click", (e) => {
    category_arrow_right.style.display = "none";
    category_arrow_left.style.display = "grid";
    category_wrap.style.transform = "translateX(-360px)";
});
