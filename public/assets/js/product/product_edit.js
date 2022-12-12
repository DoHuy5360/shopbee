import { InputValidation } from "../module/class/validation.js";
import {
    initValidation,
    mediaValidation,
    queryAll,
    getById,
    crtEleClass,
    explainVideo,
    ActiveMenuByViewPort,
    toogleBuyMore,
    displayExistVideo,
} from "../module/function/product_func.js";

const bool__init_valid = initValidation();
mediaValidation();
explainVideo();
ActiveMenuByViewPort();
displayExistVideo();

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
            node__classify_btn2.style.display = "flex";
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
delClassifyInp();
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
// displayClassificationNode();

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
    const bool__lst_valid = bool__init_valid
        .map((_obj) => {
            return _obj.isValid();
        })
        .every((valid_obj) => {
            return valid_obj;
        });
    if (
        bool__lst_valid &&
        valid__pdt_clsfcatn1.isValid() &&
        valid__pdt_clsfcatn2.isValid()
    ) {
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
        console.log(bool__init_valid);
    }
}
