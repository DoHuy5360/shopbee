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
// todo: classification
const node__classification_btn = document.getElementById(
    "seller_product_detail-sellInfor-addCategoryBtn"
);
const node__classification_type1 = document.getElementById(
    "seller-product-classification-type1"
);
const node__classification_type2 = document.getElementById(
    "seller-product-classification-type2"
);
node__classification_btn.addEventListener("click", (e) => {
    node__classification_btn.parentNode.style.display = "none";
    node__classification_type1.style.display = "flex";
    node__classification_type2.style.display = "flex";
});
const node__classification_btn2 = document.getElementById(
    "seller_product_detail-sellInfor-addCategoryBtn-classification2"
);
const node__classification_field = document.getElementById(
    "seller-product-classification2-wrap"
);
node__classification_btn2.addEventListener("click", (e) => {
    node__classification_btn2.style.display = "none";
    node__classification_type2.style.display = "flex";
    node__classification_field.style.display = "flex";
});
// todo: Bắt sự kiện thêm mặt hàng
function createClassificationInput() {
    const node__classification_wrap = document.createElement("div");
    node__classification_wrap.setAttribute(
        "class",
        "sellerProduct__classification--inp-wrap"
    );
    const node__classification_input = document.createElement("input");
    node__classification_input.setAttribute(
        "class",
        "sellerProduct__classification--ver sellerProduct__animate-hover-focus sellerProduct__placeholder--color"
    );
    node__classification_input.setAttribute("type", "text");
    node__classification_input.setAttribute(
        "placeholder",
        "Nhập phân loại hàng, ví dụ: đỏ, đen, L, M, S,..."
    );
    const node__classification_delete_button = document.createElement("div");
    node__classification_delete_button.setAttribute(
        "class",
        "sellerProduct__classification--btn-remove"
    );
    node__classification_delete_button.innerHTML =
        '<ion-icon name="trash-outline"></ion-icon>';
    node__classification_wrap.appendChild(node__classification_input);
    node__classification_wrap.appendChild(node__classification_delete_button);
    return node__classification_wrap;
}
let node__classification1_delete_button;
let node__classification2_delete_button;
function deleteClassifiactionInput() {
    node__classification1_delete_button = document.querySelectorAll(
        ".classification1--btn-remove .sellerProduct__classification--btn-remove"
    );
    node__classification1_delete_button.forEach((btn) => {
        btn.addEventListener("click", (e) => {
            if (node__classification1_delete_button.length != 1) {
                btn.parentNode.remove();
                displayClassificationNode();
                node__classification1_delete_button = document.querySelectorAll(
                    ".classification1--btn-remove .sellerProduct__classification--btn-remove"
                );
            }
        });
    });
    node__classification2_delete_button = document.querySelectorAll(
        ".classification2--btn-remove .sellerProduct__classification--btn-remove"
    );
    node__classification2_delete_button.forEach((btn) => {
        btn.addEventListener("click", (e) => {
            if (node__classification2_delete_button.length != 1) {
                btn.parentNode.remove();
                displayClassificationNode();
                node__classification2_delete_button = document.querySelectorAll(
                    ".classification2--btn-remove .sellerProduct__classification--btn-remove"
                );
            }
        });
    });
}
const node__classification_buttons_add = document.querySelectorAll(
    ".seller_product_detail-sellInfor-classification"
);
node__classification_buttons_add.forEach((btn) => {
    btn.addEventListener("click", (e) => {
        const node__classification_field_wrap = btn.parentNode.parentNode;
        const node__classification_input_wrap =
            node__classification_field_wrap.querySelector(
                ".sellerProduct__classification--add-wrap"
            );
        const node__classification_input =
            node__classification_input_wrap.querySelectorAll(
                ".sellerProduct__classification--ver"
            );
        if (
            node__classification_input[
                node__classification_input.length - 1
            ].value.trim()
        ) {
            node__classification_input_wrap.appendChild(
                createClassificationInput()
            );
            displayClassificationNode();
            deleteClassifiactionInput();
        }
    });
});

const node__classification_columns = document.querySelectorAll(
    ".produtDetail__classification-column"
);
const node__classification_input_titles = document.querySelectorAll(
    ".sellerProduct__classification--title"
);

node__classification_input_titles.forEach((inp_title, index) => {
    inp_title.addEventListener("input", (e) => {
        node__classification_columns[index].innerText = inp_title.value;
        if (!inp_title.value) {
            node__classification_columns[index].innerText = `Nhóm phân loại ${
                index + 1
            }`;
        }
    });
});

function createFormatItem(_core) {
    const string__classification_table = `
      <table border="0" cellspacing="0">
          ${_core}
      </table>
    `;
    return string__classification_table;
}
const node__classification_body = document.getElementById(
    "sellerProduct-classificatiom--item-wrap"
);

function displayClassificationNode() {
    const node__classification1_input = document.querySelectorAll(
        "#seller-product-classification-type1 .sellerProduct__classification--ver"
    );
    const node__classification2_input = document.querySelectorAll(
        "#seller-product-classification-type2 .sellerProduct__classification--ver"
    );
    let string__classification_html_column_right;
    let string__classification_info_column_left = "";
    let string__classification_image_column;
    node__classification1_input.forEach((input1, index1) => {
        let string__classification_info_column_right = "";
        node__classification2_input.forEach((input2, index2) => {
            if (index2 !== 0) {
                string__classification_image_column = "";
            } else {
                string__classification_image_column = `
            <th rowspan="${node__classification2_input.length}">
              <div id="classification1--name-${index1}" class="productDetail__classification--name">${input1.value}</div>
              <img class="productDetail__clss_image" src="http://surl.li/dafng" alt="" />
            </th>
          `;
            }
            string__classification_html_column_right = `
          <tr>
            ${string__classification_image_column}
            <th id="classification2--name-${index1}-${index2}" class="productDetail__classification--name">${input2.value}</th>
            <th><input name="classification_price_${index1}_${index2}" class="sellerProduct__animate-hover-focus sellerProduct__placeholder--color" type="text" placeholder="Nhập vào"/></th>
            <th><input name="classification_storage_${index1}_${index2}" class="sellerProduct__animate-hover-focus sellerProduct__placeholder--color" type="number" min="0" value="0"/></th>
            <th><input name="classification_sku_${index1}_${index2}" class="sellerProduct__animate-hover-focus sellerProduct__placeholder--color" type="text" placeholder="Nhập vào"/></th>
          </tr>
        `;
            string__classification_info_column_right +=
                string__classification_html_column_right;
            input2.addEventListener("input", (e) => {
                const node__classification2_name = document.getElementById(
                    `classification2--name-${index1}-${index2}`
                );
                node__classification2_name.innerText = input2.value;
            });
        });
        input1.addEventListener("input", (e) => {
            const node__classification1_name = document.getElementById(
                `classification1--name-${index1}`
            );
            node__classification1_name.innerText = input1.value;
        });
        string__classification_info_column_left += createFormatItem(
            string__classification_info_column_right
        );
    });
    node__classification_body.innerHTML =
        string__classification_info_column_left;
}
displayClassificationNode();

function createHiddenInput(_node_input, _arg) {
    const array__value = [];
    _arg.forEach((node) => {
        array__value.push(node.value);
    });
    _node_input.value = array__value;
}
const node__submit_button = document.getElementById(
    "sellerProduct-finishStep-save-display"
);
const node__form_submit = document.getElementById(
    "seller_product_detail-wrapper-detail"
);
node__submit_button.addEventListener("click", (e) => {
    e.preventDefault();
    const node__classification1_names = document.querySelectorAll(
        "#seller-product-classification-type1 .sellerProduct__classification--ver"
    );
    const node__classification2_names = document.querySelectorAll(
        "#seller-product-classification-type2 .sellerProduct__classification--ver"
    );
    const node__classification1_hidden_input = document.getElementById(
        "sellerProduct-classification1-post-field"
    );
    const node__classification2_hidden_input = document.getElementById(
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
    node__form_submit.submit();
});
