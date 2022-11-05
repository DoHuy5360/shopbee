const buy_more_sale_more_btn = document.getElementById(
    "seller_product_detail-sellInfor-buyMoreBtn"
);
const buy_more_sale_more_table = document.getElementById(
    "seller_product_detail-sellInfor-voucher-inputfield"
);
const buy_more_sale_more_close_table_btn = document.getElementById(
    "seller_product_detail_sellInfor_voucher_del"
);
buy_more_sale_more_btn.addEventListener("click", (e) => {
    buy_more_sale_more_btn.style.display = "none";
    buy_more_sale_more_table.style.display = "block";
});
buy_more_sale_more_close_table_btn.addEventListener("click", (e) => {
    buy_more_sale_more_btn.style.display = "flex";
    buy_more_sale_more_table.style.display = "none";
});
// !-------------------------------------------------

const all_title_main = document.querySelectorAll(".sellerProduct__title--main");
const all_menu_element = document.querySelectorAll(
    ".sellerProduct-nemu-element"
);
const other_info = document.getElementById(
    "seller_product_detail-wrapper-otherInfor"
);
const finish_bar = document.getElementById("sellerProduct-finishStep-wrap");
let other_info_index;
window.onscroll = function () {
    other_info_index = other_info.getBoundingClientRect();
    if (
        finish_bar.getBoundingClientRect().y +
            10 -
            (other_info_index.y + other_info_index.height) >
        0
    ) {
        finish_bar.classList.add("flow");
    } else {
        finish_bar.classList.remove("flow");
    }
    for (let index = 0; index < all_title_main.length; index++) {
        const element = all_title_main[index];
        if (elementInViewport(element)) {
            all_menu_element[index].classList.add("menu__selected");
        } else {
            all_menu_element[index].classList.remove("menu__selected");
        }
    }
};
function elementInViewport(el) {
    var top = el.offsetTop;
    var left = el.offsetLeft;
    var width = el.offsetWidth;
    var height = el.offsetHeight;

    while (el.offsetParent) {
        el = el.offsetParent;
        top += el.offsetTop;
        left += el.offsetLeft;
    }

    return (
        top >= window.pageYOffset &&
        left >= window.pageXOffset &&
        top + height <= window.pageYOffset + window.innerHeight &&
        left + width <= window.pageXOffset + window.innerWidth
    );
}
// !------------------------ add files
const all_input_image_file = document.querySelectorAll(
    ".sellerProduct__hidden--image-input"
);
all_input_image_file.forEach((inp) => {
    inp.addEventListener("change", (e) => {
        const display_image_box = inp.parentNode.querySelector(
            ".seller_product_detail-basicImg-containt"
        );
        var preview = document.createElement("img");
        preview.setAttribute("class", "sellerProduct__image--display");
        var file = inp.files[0];
        var reader = new FileReader();

        reader.onloadend = function () {
            preview.src = reader.result;
            display_image_box.innerHTML = "";
            display_image_box.appendChild(preview);
        };

        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.src = "";
        }
    });
});
const display_video_block = document.getElementById(
    "seller_product_detail-basicVid-item"
);
const video_contain = document.getElementById("sellerProduct-video-contain");
const add_video_over_btn = document.getElementById(
    "sellerProduct-add-video-cover"
);
add_video_over_btn.addEventListener("change", (e) => {
    let file = e.target.files[0];
    let blobURL = URL.createObjectURL(file);
    video_contain.src = blobURL;
    const canvas_image = document.createElement("canvas");

    display_video_block.innerHTML = "";
    display_video_block.appendChild(canvas_image);
    setTimeout(() => {
        canvas_image.width = video_contain.videoWidth;
        canvas_image.height = video_contain.videoHeight;
        const canvas_pen = canvas_image.getContext("2d");
        canvas_pen.drawImage(
            video_contain,
            0,
            0,
            canvas_image.width,
            canvas_image.height
        );
        canvas_image.setAttribute("id", "sellerProduct-video-cover");
    }, 1000);
});
const body_page = document.querySelector("body");
const view_video = document.getElementById("sellerProduct-video-view");
const dialog_video = document.getElementById("sellerProduct-video-dialog");
const close_dialog_video = document.getElementById(
    "sellerProduct__close--model"
);
view_video.addEventListener("click", (e) => {
    video_contain.classList.add("explain_video");
    dialog_video.classList.add("explain_video");
});
close_dialog_video.addEventListener("click", (e) => {
    video_contain.classList.remove("explain_video");
    dialog_video.classList.remove("explain_video");
});
