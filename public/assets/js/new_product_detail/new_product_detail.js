// todo: Validation
import {
    InputValidation,
    NodeValidation,
    MediaValidation,
} from "../module/class/validation.js";

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
const valid__pdt_video = new NodeValidation("#sellerProduct-add-video-cover");
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
// todo: Bật tắt chức năng ưu đãi mua nhiều
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
// todo: Thêm ảnh cho sản phẩm
const node__all_input_image = queryAll(".sellerProduct__hidden--image-input");
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
const node__display_video = getById("seller_product_detail-basicVid-item");
const node__video_contain = getById("sellerProduct-video-contain");
const node__add_video = getById("sellerProduct-add-video-cover");
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
            node__canvas_image.setAttribute("id", "sellerProduct-video-cover");
        }, 1000);
    } else {
        node__display_video.innerHTML =
            "<span class='product__detail--image-unvalid-alert'>Name file unvalid</span>";
    }
});
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
// todo: Bật tắt chức năng thêm phân loại hàng 1 và 2
const node__classify_btn = getById(
    "seller_product_detail-sellInfor-addCategoryBtn"
);
const node__classify_type1 = getById("seller-product-classification-type1");
const node__classify_type2 = getById("seller-product-classification-type2");
const valid__pdt_clsfcatn1 = new InputValidation("#seller-product-clsfctn-1");
node__classify_btn.addEventListener("click", (e) => {
    node__classify_btn.parentNode.style.display = "none";
    node__classify_type1.style.display = "flex";
    node__classify_type2.style.display = "flex";
    node__classify_table_display.style.display = "flex";
    // todo: Khởi động kiểm tra hợp lệ cho phân loại 1
    valid__pdt_clsfcatn1.checkExternalNotEmpty(
        ".sellerProduct__classification--ver-1"
    );
    valid__pdt_clsfcatn1.addEventInput((ths_obj) => {
        ths_obj.updateValueLength();
        ths_obj.obj__rcd_vld.external_not_empty = false;
        ths_obj.checkNotEmpty();
        ths_obj.checkNotSameValue(ths_obj.node__target, [
            "#seller-product-clsfctn-2",
        ]);
        ths_obj.checkAllExternalNotEmpty(
            ".sellerProduct__classification--ver-1"
        );
        ths_obj.checkLengthMinMax(1, 20);
    });
    valid__pdt_clsfcatn1.addEventKeyPress((ths_obj) => {
        ths_obj.preventKeyPress("special");
    });
    valid__pdt_clsfcatn1.addEventChange((ths_obj) => {
        ths_obj.removeWhitespaceStartEnd();
        ths_obj.removeDuplicateWhitespace();
        ths_obj.updateValueLength();
        ths_obj.checkLengthMinMax(1, 20);
    });
    setValidationForClasifyVal(".sellerProduct__classification--ver-1");
});

const node__classify_btn2 = getById(
    "seller_product_detail-sellInfor-addCategoryBtn-classification2"
);
const node__classify_field = getById("seller-product-classification2-wrap");
const valid__pdt_clsfcatn2 = new InputValidation("#seller-product-clsfctn-2");
node__classify_btn2.addEventListener("click", (e) => {
    node__classify_btn2.style.display = "none";
    node__classify_field.style.display = "flex";
    // todo: Khởi động kiểm tra hợp lệ cho phân loại 2
    valid__pdt_clsfcatn2.checkExternalNotEmpty(
        ".sellerProduct__classification--ver-2"
    );
    valid__pdt_clsfcatn2.addEventInput((ths_obj) => {
        ths_obj.updateValueLength();
        ths_obj.obj__rcd_vld.external_not_empty = false;
        ths_obj.checkNotEmpty();
        ths_obj.checkNotSameValue(ths_obj.node__target, [
            "#seller-product-clsfctn-1",
        ]);
        ths_obj.checkAllExternalNotEmpty(
            ".sellerProduct__classification--ver-2"
        );
        ths_obj.checkLengthMinMax(1, 20);
    });
    valid__pdt_clsfcatn2.addEventKeyPress((ths_obj) => {
        ths_obj.preventKeyPress("special");
    });
    valid__pdt_clsfcatn2.addEventChange((ths_obj) => {
        ths_obj.removeWhitespaceStartEnd();
        ths_obj.removeDuplicateWhitespace();
        ths_obj.updateValueLength();
        ths_obj.checkLengthMinMax(1, 20);
    });
    setValidationForClasifyVal(".sellerProduct__classification--ver-2");
});
const node__classify_table_display = getById(
    "seller-product-classification-table-display"
);
const node__classify_close_btns = queryAll(".seller__product--close-table-btn");
node__classify_close_btns.forEach((btn, indx) => {
    btn.addEventListener("click", (e) => {
        const node__classify_table_parent = btn.parentNode.parentNode;
        node__classify_table_parent.style.display = "none";
        if (indx === 0) {
            valid__pdt_clsfcatn1.forceValid();
            node__classify_table_display.style.display = "none";
            node__classify_field.style.display = "none";
            node__classify_btn2.style.display = "block";
            const node__classify_table_wrap =
                node__classify_table_parent.parentNode.parentNode.querySelector(
                    ".seller_product_detail-sellInfor-Category"
                );
            node__classify_table_wrap.style.display = "flex";
        } else {
            valid__pdt_clsfcatn2.forceValid();
        }
        node__classify_type2.style.display = "none";
    });
});

// todo: Bắt sự kiện thêm mặt hàng
let int__cls_incre = 0;
function crteClassifyInp(_indx) {
    const node__classify_wrp = crtEleClass("div", {
        class: "sellerProduct__classification--inp-wrap",
    });
    const str__gen_cls_id = `seller-Product-classify-val-${_indx}-${int__cls_incre++}`;
    const node__classify_inp = crtEleClass("input", {
        class: `sellerProduct__classification--ver-${_indx} sellerProduct__animate-hover-focus sellerProduct__placeholder--color`,
        id: str__gen_cls_id,
        type: "text",
        placeholder: "Nhập phân loại hàng, ví dụ: đỏ, đen, L, M, S,...",
    });
    const node__classify_del_btn = crtEleClass(
        "div",
        {
            class: "sellerProduct__classification--btn-remove",
        },
        '<ion-icon name="trash-outline"></ion-icon>'
    );

    node__classify_wrp.appendChild(node__classify_inp);
    node__classify_wrp.appendChild(node__classify_del_btn);
    return node__classify_wrp;
}
function checkNotEmptyClsVal(_indx, str__gen_cls_id) {
    if (_indx == 1) {
        valid__pdt_clsfcatn1.checkExternalNotEmpty(
            `.sellerProduct__classification--ver-${_indx}`
        );
        setValidationForClasifyVal("#" + str__gen_cls_id);
    } else {
        valid__pdt_clsfcatn2.checkExternalNotEmpty(
            `.sellerProduct__classification--ver-${_indx}`
        );
        setValidationForClasifyVal("#" + str__gen_cls_id);
    }
}
function setValidationForClasifyVal(_name) {
    const valid_cls_val_inp = new InputValidation(_name);
    valid_cls_val_inp.addEventInput((ths_obj) => {
        ths_obj.updateValueLength();
        ths_obj.checkLengthMinMax(1, 20);
    });
    valid_cls_val_inp.addEventKeyPress((ths_obj) => {
        ths_obj.preventKeyPress("special");
        ths_obj.preventKeyPress(" ");
    });
    valid_cls_val_inp.addEventChange((ths_obj) => {
        ths_obj.removeWhitespaceStartEnd();
        ths_obj.removeDuplicateWhitespace();
        ths_obj.updateValueLength();
        ths_obj.checkLengthMinMax(1, 20);
    });
}
let node__classify1_del_btn;
let node__classify2_del_btn;
function delClassifyInp() {
    node__classify1_del_btn = queryAll(
        ".classification1--btn-remove .sellerProduct__classification--btn-remove"
    );
    node__classify1_del_btn.forEach((btn) => {
        btn.addEventListener("click", (e) => {
            if (node__classify1_del_btn.length != 1) {
                btn.parentNode.remove();
                displayClassifyRow();
                node__classify1_del_btn = queryAll(
                    ".classification1--btn-remove .sellerProduct__classification--btn-remove"
                );
            }
        });
    });
    node__classify2_del_btn = queryAll(
        ".classification2--btn-remove .sellerProduct__classification--btn-remove"
    );
    node__classify2_del_btn.forEach((btn) => {
        btn.addEventListener("click", (e) => {
            if (node__classify2_del_btn.length != 1) {
                btn.parentNode.remove();
                displayClassifyRow();
                node__classify2_del_btn = queryAll(
                    ".classification2--btn-remove .sellerProduct__classification--btn-remove"
                );
            }
        });
    });
}
// todo: Thêm input cho
const node__classify_btns_add = queryAll(
    ".seller_product_detail-sellInfor-classification"
);
node__classify_btns_add.forEach((btn, indx) => {
    btn.addEventListener("click", (e) => {
        const node__classify_field_wrap = btn.parentNode.parentNode;
        const node__classify_input_wrap =
            node__classify_field_wrap.querySelector(
                ".sellerProduct__classification--add-wrap"
            );
        const node__classify_inps = document.querySelectorAll(
            `.sellerProduct__classification--ver-${indx + 1}`
        );
        if (node__classify_inps[node__classify_inps.length - 1].value.trim()) {
            const node__cls_inp_wrp = crteClassifyInp(indx + 1);
            const str__cls_id =
                node__cls_inp_wrp.firstElementChild.getAttribute("id");
            node__classify_input_wrap.appendChild(node__cls_inp_wrp);
            checkNotEmptyClsVal(indx + 1, str__cls_id);
            displayClassifyRow();
            delClassifyInp();
        }
    });
});
// todo: Thay đổi tiêu đề của cột trên bảng theo phân loại nhập vào
const node__classify_cols = queryAll(".produtDetail__classification-column"),
    node__classify_inp_titles = queryAll(
        ".sellerProduct__classification--title"
    );

node__classify_inp_titles.forEach((inp_title, idx) => {
    inp_title.addEventListener("input", (e) => {
        node__classify_cols[idx].innerText = inp_title.value;
        if (!inp_title.value) {
            node__classify_cols[idx].innerText = `Nhóm phân loại ${idx + 1}`;
        }
    });
});

function createFormatItem(_core) {
    const str__classify_table = `
      <table border="0" cellspacing="0">
          ${_core}
      </table>
    `;
    return str__classify_table;
}
const node__classify_body = getById("sellerProduct-classificatiom--item-wrap");

function displayClassifyRow() {
    const node__classify1_inp = queryAll(
        ".sellerProduct__classification--ver-1"
    );
    const node__classify2_inp = queryAll(
        ".sellerProduct__classification--ver-2"
    );
    let str__classify_html_col_right;
    let str__classify_inf_col_left = "";
    let str__classify_img_col;
    node__classify1_inp.forEach((input1, index1) => {
        let str__classify_col_right = "";
        node__classify2_inp.forEach((input2, index2) => {
            if (index2 !== 0) {
                str__classify_img_col = "";
            } else {
                str__classify_img_col = `
            <th rowspan="${node__classify2_inp.length}">
              <div id="classification1--name-${index1}" class="productDetail__classification--name">${input1.value}</div>
              <img class="productDetail__clss_image" src="http://surl.li/dafng" alt="" />
            </th>
          `;
            }
            str__classify_html_col_right = `
          <tr>
            ${str__classify_img_col}
            <th id="classification2--name-${index1}-${index2}" class="productDetail__classification--name">${input2.value}</th>
            <th><input name="classification_price_${index1}_${index2}" class="sellerProduct__animate-hover-focus sellerProduct__placeholder--color" type="text" placeholder="Nhập vào"/></th>
            <th><input name="classification_storage_${index1}_${index2}" class="sellerProduct__animate-hover-focus sellerProduct__placeholder--color" type="text" value="0"/></th>
            <th><input name="classification_sku_${index1}_${index2}" class="sellerProduct__animate-hover-focus sellerProduct__placeholder--color" type="text" placeholder="Nhập vào"/></th>
          </tr>
        `;
            str__classify_col_right += str__classify_html_col_right;
            input2.addEventListener("input", (e) => {
                const node__classify2_name = getById(
                    `classification2--name-${index1}-${index2}`
                );
                node__classify2_name.innerText = input2.value;
            });
        });
        input1.addEventListener("input", (e) => {
            const node__classification1_name = getById(
                `classification1--name-${index1}`
            );
            node__classification1_name.innerText = input1.value;
        });
        str__classify_inf_col_left += createFormatItem(str__classify_col_right);
    });
    node__classify_body.innerHTML = str__classify_inf_col_left;
}
displayClassifyRow();

function createHiddenInput(_node_input, _arg) {
    const array__value = [];
    _arg.forEach((node) => {
        array__value.push(node.value);
    });
    _node_input.value = array__value;
}
const node__pdt_hden_inp = document.getElementById("sellerProduct-pdt-hidden");
const node__sbmit_save_hden = getById("sellerProduct-finishStep-save-hidden");
node__sbmit_save_hden.addEventListener("click", (e) => {
    e.preventDefault();
    node__pdt_hden_inp.value = true;
    lastCheckBeforeSumit();
});
const node__sbmit_save_dsply = getById("sellerProduct-finishStep-save-display");
const node__form_submit = getById("seller_product_detail-wrapper-detail");
node__sbmit_save_dsply.addEventListener("click", (e) => {
    e.preventDefault();
    node__pdt_hden_inp.value = false;
    lastCheckBeforeSumit();
});

function lastCheckBeforeSumit() {
    const obj__total_validation = [
        valid__pdt_name.isValid(),
        valid__pdt_desc.isValid(),
        valid__pdt_img.isValid(),
        valid__pdt_video.isValid(),
        valid__pdt_price.isValid(),
        valid__pdt_storage.isValid(),
        valid__pdt_weight.isValid(),
        valid__pdt_clsfcatn1.isValid(),
        valid__pdt_clsfcatn2.isValid(),
        valid__pdt_size_r.isValid(),
        valid__pdt_size_d.isValid(),
        valid__pdt_size_c.isValid(),
        valid__pdt_sku.isValid(),
    ].every((valid_obj) => {
        return valid_obj;
    });

    if (obj__total_validation) {
        const node__classification1_names = queryAll(
            ".sellerProduct__classification--ver-1"
        );
        const node__classification2_names = queryAll(
            ".sellerProduct__classification--ver-2"
        );
        const node__classification1_hidden_input = getById(
            "sellerProduct-classification1-post-field"
        );
        const node__classification2_hidden_input = getById(
            "sellerProduct-classification2-post-field"
        );
        createHiddenInput(
            node__classification1_hidden_input,
            node__classification1_names
        );
        createHiddenInput(
            node__classification2_hidden_input,
            node__classification2_names
        );
        // node__form_submit.submit();
        console.log(1);
        const str__action_link = node__form_submit.getAttribute("action");
        $("#seller_product_detail-wrapper-detail").ajaxSubmit({
            type: "POST",
            url: str__action_link,
            success: function (response) {
                if (response.status) {
                    window.close();
                } else {
                    console.log("Fail to save product");
                }
            },
        });
    } else {
        console.log(obj__total_validation);
    }
}

function queryAll(_name) {
    return document.querySelectorAll(_name);
}
function queryOne(_name) {
    return document.querySelector(_name);
}
function getById(_name) {
    return document.getElementById(_name);
}
function crtEleClass(_name, _attrs, _txt) {
    const node = document.createElement(_name);
    if (_txt) node.innerHTML = _txt;
    for (let key in _attrs) {
        node.setAttribute(key, _attrs[key]);
    }
    return node;
}
