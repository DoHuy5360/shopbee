import {
    NodeValidation,
    InputValidation,
    MediaValidation,
} from "../class/validation.js";

export function initValidation() {
    const str__pdt_name_cnt_lttr = "#sellerProduct-product-name-countLenght";
    const valid__pdt_name = new InputValidation(
        "#seller_product_detail-basicName-input"
    );
    valid__pdt_name.checkNotEmpty();
    valid__pdt_name.changeValueByLength(str__pdt_name_cnt_lttr);
    valid__pdt_name.addEventInput((ths_obj) => {
        ths_obj.updateValueLength();
        ths_obj.changeValueByLength(str__pdt_name_cnt_lttr);
        ths_obj.checkLengthMinMax(10, 120);
    });
    valid__pdt_name.addEventKeyPress((ths_obj) => {
        ths_obj.preventKeyPress("special");
    });
    valid__pdt_name.addEventChange((ths_obj) => {
        ths_obj.removeWhitespaceStartEnd();
        ths_obj.removeDuplicateWhitespace();
        ths_obj.updateValueLength();
        ths_obj.changeValueByLength(str__pdt_name_cnt_lttr);
        ths_obj.checkLengthMinMax(10, 120);
    });
    const str__pdt_desc_cnt_lttr = "#seller-product-detail-desc-length";
    const valid__pdt_desc = new InputValidation(
        "#seller_product_detail-basicProdDesc-input"
    );
    valid__pdt_desc.addEventInput((ths_obj) => {
        ths_obj.updateValueLength();
        ths_obj.changeValueByLength(str__pdt_desc_cnt_lttr);
        ths_obj.checkLengthMinMax(0, 3000);
    });
    valid__pdt_desc.addEventChange((ths_obj) => {
        ths_obj.removeWhitespaceStartEnd();
        ths_obj.updateValueLength();
        ths_obj.changeValueByLength(str__pdt_desc_cnt_lttr);
        ths_obj.checkLengthMinMax(0, 3000);
    });

    const valid__pdt_img = new NodeValidation(
        "#seller_product_detail-basicImg-containt-cover"
    );
    valid__pdt_img.addEventChange((ths_obj) => {
        setTimeout(() => {
            ths_obj.checkInnerContain(
                ths_obj.str__name,
                ".sellerProduct__image--display"
            );
        }, 1000);
    });
    const valid__pdt_video = new NodeValidation(
        "#sellerProduct-add-video-cover"
    );
    valid__pdt_video.addEventChange((ths_obj) => {
        setTimeout(() => {
            ths_obj.checkInnerContain(
                "#seller_product_detail-basicVid-item",
                "#sellerProduct-video-cover"
            );
        }, 1500);
    });

    const valid__pdt_price = new InputValidation(
        "#seller_product_detail-sellInfor-price-input"
    );
    valid__pdt_price.checkNotEmpty();
    valid__pdt_price.addEventInput((ths_obj) => {
        ths_obj.updateValueLength();
        ths_obj.checkLengthMinMax(4, 9);
        ths_obj.checkNumberMinMax(1_000, 120_000_000);
        ths_obj.checkNotEmpty();
        ths_obj.checkContainOnly("number");
    });
    valid__pdt_price.addEventKeyPress((ths_obj) => {
        ths_obj.preventKeyPress("letter");
        ths_obj.preventKeyPress("special");
        ths_obj.preventKeyPress(" ");
    });
    valid__pdt_price.addEventChange((ths_obj) => {
        ths_obj.removeWhitespace();
        ths_obj.updateValueLength();
        ths_obj.checkLengthMinMax(4, 9);
        ths_obj.checkNumberMinMax(1_000, 120_000_000);
    });

    const valid__pdt_storage = new InputValidation(
        "#seller_product_detail-sellInfor-storage-input"
    );
    valid__pdt_storage.checkNotEmpty();
    valid__pdt_storage.addEventInput((ths_obj) => {
        ths_obj.checkLengthMinMax(1, 9);
        ths_obj.checkNumberMinMax(1, 120_000_000);
        ths_obj.checkNotEmpty();
        ths_obj.checkContainOnly("number");
    });
    valid__pdt_storage.addEventKeyPress((ths_obj) => {
        ths_obj.preventKeyPress("letter");
        ths_obj.preventKeyPress("special");
        ths_obj.preventKeyPress(" ");
    });
    valid__pdt_storage.addEventChange((ths_obj) => {
        ths_obj.removeWhitespace();
        ths_obj.updateValueLength();
        ths_obj.checkLengthMinMax(1, 9);
        ths_obj.checkNumberMinMax(1, 120_000_000);
    });

    const valid__pdt_weight = new InputValidation(
        "#seller_product_detail-transport-weight-input"
    );
    valid__pdt_weight.checkNotEmpty();
    valid__pdt_weight.addEventInput((ths_obj) => {
        ths_obj.checkLengthMinMax(1, 5);
        ths_obj.checkNumberMinMax(1, 50_000);
        ths_obj.checkNotEmpty();
        ths_obj.checkContainOnly("number");
    });
    valid__pdt_weight.addEventKeyPress((ths_obj) => {
        ths_obj.preventKeyPress("letter");
        ths_obj.preventKeyPress("special");
        ths_obj.preventKeyPress(" ");
    });
    valid__pdt_weight.addEventChange((ths_obj) => {
        ths_obj.removeWhitespace();
        ths_obj.updateValueLength();
        ths_obj.checkLengthMinMax(1, 5);
        ths_obj.checkNumberMinMax(1, 50_000);
    });

    const valid__pdt_size_r = new InputValidation("#selle-product-package-r");
    valid__pdt_size_r.checkNotEmpty();
    valid__pdt_size_r.addEventInput((ths_obj) => {
        ths_obj.checkLengthMinMax(1, 3);
        ths_obj.checkNumberMinMax(1, 300);
        ths_obj.checkNotEmpty();
        ths_obj.checkContainOnly("number");
    });
    valid__pdt_size_r.addEventKeyPress((ths_obj) => {
        ths_obj.preventKeyPress("letter");
        ths_obj.preventKeyPress("special");
        ths_obj.preventKeyPress(" ");
    });
    valid__pdt_size_r.addEventChange((ths_obj) => {
        ths_obj.removeWhitespace();
        ths_obj.updateValueLength();
        ths_obj.checkLengthMinMax(1, 3);
        ths_obj.checkNumberMinMax(1, 300);
    });

    const valid__pdt_size_d = new InputValidation("#selle-product-package-d");
    valid__pdt_size_d.checkNotEmpty();
    valid__pdt_size_d.addEventInput((ths_obj) => {
        ths_obj.checkLengthMinMax(1, 3);
        ths_obj.checkNumberMinMax(1, 300);
        ths_obj.checkNotEmpty();
        ths_obj.checkContainOnly("number");
    });
    valid__pdt_size_d.addEventKeyPress((ths_obj) => {
        ths_obj.preventKeyPress("letter");
        ths_obj.preventKeyPress("special");
        ths_obj.preventKeyPress(" ");
    });
    valid__pdt_size_d.addEventChange((ths_obj) => {
        ths_obj.removeWhitespace();
        ths_obj.updateValueLength();
        ths_obj.checkLengthMinMax(1, 3);
        ths_obj.checkNumberMinMax(1, 300);
    });

    const valid__pdt_size_c = new InputValidation("#selle-product-package-c");
    valid__pdt_size_c.checkNotEmpty();
    valid__pdt_size_c.addEventInput((ths_obj) => {
        ths_obj.checkLengthMinMax(1, 3);
        ths_obj.checkNumberMinMax(1, 300);
        ths_obj.checkNotEmpty();
        ths_obj.checkContainOnly("number");
    });
    valid__pdt_size_c.addEventKeyPress((ths_obj) => {
        ths_obj.preventKeyPress("letter");
        ths_obj.preventKeyPress("special");
        ths_obj.preventKeyPress(" ");
    });
    valid__pdt_size_c.addEventChange((ths_obj) => {
        ths_obj.removeWhitespace();
        ths_obj.updateValueLength();
        ths_obj.checkLengthMinMax(1, 3);
        ths_obj.checkNumberMinMax(1, 300);
    });

    const valid__pdt_sku = new InputValidation(
        "#seller_product_detail-otherInfor-SKU-detail"
    );
    valid__pdt_sku.checkNotEmpty();
    valid__pdt_sku.addEventInput((ths_obj) => {
        ths_obj.checkLengthMinMax(10, 20);
        ths_obj.checkNotEmpty();
    });
    valid__pdt_sku.addEventKeyPress((ths_obj) => {
        ths_obj.preventKeyPress("special");
        ths_obj.preventKeyPress(" ");
    });
    valid__pdt_sku.addEventChange((ths_obj) => {
        ths_obj.removeWhitespace();
        ths_obj.updateValueLength();
        ths_obj.checkLengthMinMax(10, 20);
    });
    const arr__valid_list = [
        valid__pdt_name,
        valid__pdt_desc,
        valid__pdt_img,
        valid__pdt_video,
        valid__pdt_price,
        valid__pdt_storage,
        valid__pdt_weight,
        valid__pdt_size_r,
        valid__pdt_size_d,
        valid__pdt_size_c,
        valid__pdt_sku,
    ];
    return arr__valid_list
}
const node__all_input_image = queryAll(".sellerProduct__hidden--image-input");
const node__display_video = getById("seller_product_detail-basicVid-item");
const node__video_contain = getById("sellerProduct-video-contain");
const node__add_video = getById("sellerProduct-add-video-cover");
export function mediaValidation() {
    // todo: Video
    node__all_input_image.forEach((inp) => {
        inp.addEventListener("change", (e) => {
            const node__parent_display_image = inp.parentNode.querySelector(
                ".seller_product_detail-basicImg-containt"
            );
            var node__preview_image = crtEleClass("img", {
                class: "sellerProduct__image--display",
            });
            var file = inp.files[0];
            const valid__file_img = new MediaValidation(file);
            valid__file_img.createContainer((ths_obj) => {
                ths_obj.checkLengthFileMinMax(1, 100);
                ths_obj.checkFileExtension(["png", "jpg"]);
            });
            if (valid__file_img.isValid()) {
                var reader = new FileReader();

                reader.onloadend = function () {
                    node__preview_image.src = reader.result;
                    node__parent_display_image.innerHTML = "";
                    node__parent_display_image.appendChild(node__preview_image);
                };

                if (file) {
                    reader.readAsDataURL(file);
                } else {
                    node__preview_image.src = "";
                }
            } else {
                node__parent_display_image.innerHTML =
                    "<span class='product__detail--image-unvalid-alert'>Name file unvalid</span>";
            }
        });
    });
    // todo: Image

    node__add_video.addEventListener("change", (e) => {
        let file = e.target.files[0];
        const valid__file_vid = new MediaValidation(file);
        valid__file_vid.createContainer((ths_obj) => {
            ths_obj.checkLengthFileMinMax(1, 100);
            ths_obj.checkFileExtension(["mp4"]);
        });
        if (valid__file_vid.isValid()) {
            let blobURL = URL.createObjectURL(file);
            node__video_contain.src = blobURL;
            const node__canvas_image = document.createElement("canvas");

            node__display_video.innerHTML = "";
            node__display_video.appendChild(node__canvas_image);
            setTimeout(() => {
                node__canvas_image.width = node__video_contain.videoWidth;
                node__canvas_image.height = node__video_contain.videoHeight;
                const canvas_pen = node__canvas_image.getContext("2d");
                canvas_pen.drawImage(
                    node__video_contain,
                    0,
                    0,
                    node__canvas_image.width,
                    node__canvas_image.height
                );
                node__canvas_image.setAttribute(
                    "id",
                    "sellerProduct-video-cover"
                );
            }, 1000);
        } else {
            node__display_video.innerHTML =
                "<span class='product__detail--image-unvalid-alert'>Name file unvalid</span>";
        }
    });
}

export function explainVideo() {
    const view_video = getById("sellerProduct-video-view");
    const dialog_video = getById("sellerProduct-video-dialog");
    const close_dialog_video = getById("sellerProduct__close--model");
    view_video.addEventListener("click", (e) => {
        node__video_contain.classList.add("explain_video");
        dialog_video.classList.add("explain_video");
    });
    close_dialog_video.addEventListener("click", (e) => {
        node__video_contain.classList.remove("explain_video");
        dialog_video.classList.remove("explain_video");
    });
}

export function toogleBuyMore() {
    const node__buy_more_btn = getById(
        "seller_product_detail-sellInfor-buyMoreBtn"
    );
    const node__buy_more = getById(
        "seller_product_detail-sellInfor-voucher-inputfield"
    );
    const node__buy_more_table_btn = getById(
        "seller_product_detail_sellInfor_voucher_del"
    );
    node__buy_more_btn.addEventListener("click", (e) => {
        node__buy_more_btn.style.display = "none";
        node__buy_more.style.display = "block";
    });
    node__buy_more_table_btn.addEventListener("click", (e) => {
        node__buy_more_btn.style.display = "flex";
        node__buy_more.style.display = "none";
    });
}

export function queryAll(_name) {
    return document.querySelectorAll(_name);
}
export function getById(_name) {
    return document.getElementById(_name);
}
export function crtEleClass(_name, _attrs, _txt) {
    const node = document.createElement(_name);
    if (_txt) node.innerHTML = _txt;
    for (let key in _attrs) {
        node.setAttribute(key, _attrs[key]);
    }
    return node;
}
export function displayExistVideo() {
    node__add_video.addEventListener("change", (e) => {
        let file = e.target.files[0];
        let blobURL = URL.createObjectURL(file);
        node__video_contain.src = blobURL;
        const node__canvas_image = document.createElement("canvas");

        node__display_video.innerHTML = "";
        node__display_video.appendChild(node__canvas_image);
        setTimeout(() => {
            node__canvas_image.width = node__video_contain.videoWidth;
            node__canvas_image.height = node__video_contain.videoHeight;
            const canvas_pen = node__canvas_image.getContext("2d");
            canvas_pen.drawImage(
                node__video_contain,
                0,
                0,
                node__canvas_image.width,
                node__canvas_image.height
            );
            node__canvas_image.setAttribute("id", "sellerProduct-video-cover");
        }, 1000);
    });
    const node__video_origin = document.getElementById(
        "product-edit-video-origin"
    );
    setTimeout(() => {
        node__video_origin.width = node__video_contain.videoWidth;
        node__video_origin.height = node__video_contain.videoHeight;
        const canvas_pen = node__video_origin.getContext("2d");
        canvas_pen.drawImage(
            node__video_contain,
            0,
            0,
            node__video_origin.width,
            node__video_origin.height
        );
    }, 1000);
}
export function ActiveMenuByViewPort() {
    // todo: Kiểm tra tiêu đề có đang nằm trong view port

    const all_title_main = queryAll(".sellerProduct__title--main");
    const all_menu_element = queryAll(".sellerProduct-nemu-element");
    const other_info = getById("seller_product_detail-wrapper-otherInfor");
    const finish_bar = getById("sellerProduct-finishStep-wrap");
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
}
