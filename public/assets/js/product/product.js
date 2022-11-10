const all_product_images = document.querySelectorAll(
    ".product__image--carousel-element-wrap"
);
const image_container = document.getElementById("product-carousel-tray");
const next_btn = document.getElementById("product__carousel--arrow-next");
const prev_btn = document.getElementById("product__carousel--arrow-previous");
function refreshImageIndex() {
    return document.querySelectorAll(".product__image--carousel-element-wrap");
}
next_btn.addEventListener("click", (e) => {
    image_container.appendChild(refreshImageIndex()[0]);
});
prev_btn.addEventListener("click", (e) => {
    const all_img_refreshed = refreshImageIndex();
    image_container.prepend(all_img_refreshed[all_img_refreshed.length - 1]);
});
const main_product_media = document.getElementById("product-main-img");
const all_main_media = document.querySelectorAll(".product__media--display");
let first_media = all_main_media[0];
all_product_images.forEach((media) => {
    media.addEventListener("mouseover", (e) => {
        const data_index = media.getAttribute("data-index");
        if(all_main_media[data_index] != first_media){
            all_main_media[data_index].style.display = "block";
            first_media.style.display = "none";
            first_media = all_main_media[data_index];
        }
    });
});
