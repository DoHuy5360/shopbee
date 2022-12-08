import { CATEGORIES } from "./categories.js";
import { InputValidation } from "../module/class/validation.js";
class Category {
    constructor(_array_categories) {
        this.arr_categ = _array_categories;
        this.amount_column = 5;
        this.choice_node_temp;
        this.tray_trans_pre = document.getElementById(
            "typeProduct__previous--transform"
        );
        this.tray_trans_next = document.getElementById(
            "typeProduct__next--transform"
        );
        this.tray_wrap = document.getElementById("typeProduct-columns-wrap");
        this.obj__recrd_valid = {};
    }
    isValid() {
        for (let i in this.obj__recrd_valid) {
            if (!this.obj__recrd_valid[i]) {
                return false;
            }
        }
        return true;
    }
    //todo: Đệ quy để gắn sự kiện nhấp chuột cho các category
    displayCategories(_where) {
        const display_node = document.querySelector(`[data-level="${_where}"]`),
            wrap_categories = document.createElement("div");
        wrap_categories.setAttribute("class", "typeProduct__tray--wrap");
        this.arr_categ.forEach((category) => {
            const category_node = document.createElement("div");
            category_node.setAttribute("class", "typeProduct__category--name");
            const category_name = document.createElement("div");
            category_name.setAttribute(
                "class",
                "typeProduct__category--selected"
            );
            category_name.textContent = category.parent;
            category_node.appendChild(category_name);
            if (category.childrend.length) {
                const arrow =
                    '<ion-icon name="chevron-forward-outline"></ion-icon>';
                category_node.insertAdjacentHTML("beforeend", arrow);
            }
            category_node.addEventListener("click", (e) => {
                //! category.level + 1
                //! The next level (columns)
                this.removeSelectedChildrend(category.level + 1);
                this.addClassChoiceed(category_node);
                this.displayStringCategories();
                this.showLeftAndfRight(category);
                const recursive = new Category(category.childrend);
                recursive.displayCategories(category.level + 1);
                if (!category.childrend.length) {
                    this.obj__recrd_valid.end_selected = true;
                } else {
                    this.obj__recrd_valid.end_selected = false;
                }
                bool__ctgry_valid = this.isValid();
            });
            wrap_categories.appendChild(category_node);
            display_node.append(wrap_categories);
        });
    }
    removeSelectedChildrend(_where) {
        //todo: Loại bỏ các tùy chọn con
        let display_node;
        for (let index = _where; index <= this.amount_column; index++) {
            display_node = document.querySelector(`[data-level="${index}"]`);
            display_node.innerHTML = "";
        }
    }
    addClassChoiceed(_node) {
        //todo: Thêm class để đánh dấu category được chọn
        if (this.choice_node_temp) {
            this.choice_node_temp.classList.remove("choiceed");
            _node.classList.add("choiceed");
            this.choice_node_temp = _node;
        } else {
            _node.classList.add("choiceed");
            this.choice_node_temp = _node;
        }
    }
    displayStringCategories() {
        //todo: Hiển thị dãy thể loại đã chọn
        const tray_select = document.getElementById(
            "seller-product-submit-items"
        );
        tray_select.innerHTML = "";
        const category_selected = document.querySelectorAll(
            ".typeProduct__category--name.choiceed"
        );
        category_selected.forEach((category) => {
            const clone_category = category.cloneNode(true);
            tray_select.appendChild(clone_category);
        });
    }
    //todo: Hiển thị nút mở rộng tầm nhìn bên trái và phải
    showLeftAndfRight(_category) {
        if (_category.level >= 3) {
            if (_category.childrend.length) {
                this.tray_wrap.style.transform = "translateX(-500px)";
                this.tray_trans_pre.style.display = "grid";
                this.tray_trans_pre.addEventListener("click", (e) => {
                    this.tray_wrap.style.transform = "translateX(0)";
                    this.tray_trans_next.style.display = "grid";
                    this.tray_trans_pre.style.display = "none";
                });
                this.tray_trans_next.addEventListener("click", (e) => {
                    this.tray_wrap.style.transform = "translateX(-500px)";
                    this.tray_trans_next.style.display = "none";
                    this.tray_trans_pre.style.display = "grid";
                });
            }
        } else {
            this.tray_wrap.style.transform = "translateX(0)";
            this.tray_trans_next.style.display = "none";
            this.tray_trans_pre.style.display = "none";
        }
    }
}
let bool__ctgry_valid = false;
const first_display = new Category(CATEGORIES);
first_display.displayCategories(1);

const node__acpt_btn = document.getElementById("seller-product-submit-btn");
node__acpt_btn.addEventListener("click", (e) => {
    let category_string = [];
    const category_selected_all = document.querySelectorAll(
        "#seller-product-submit-items .typeProduct__category--selected"
    );
    category_selected_all.forEach((category) => {
        category_string.push(category.innerText);
    });
    const hidden_tranfer = crtEleClass(
        "input",
        {
            type: "hidden",
            name: "product_category",
        },
        null
    );
    hidden_tranfer.value = category_string;
    node__acpt_btn.form.prepend(hidden_tranfer);
    const arr__check_valid = [
        valid__pdt_name.isValid(),
        bool__ctgry_valid,
    ].every((_bool) => {
        return _bool;
    });
    if (arr__check_valid) {
        node__acpt_btn.form.submit();
    }
});

// todo: Kiểm tra hợp lệ
const valid__pdt_name = new InputValidation("#seller-product-name-input-field");
valid__pdt_name.checkNotEmpty();
valid__pdt_name.addEventInput((ths_obj) => {
    ths_obj.updateValueLength()
    ths_obj.changeValueByLength("#seller-product-input-numb");
    ths_obj.checkLengthMinMax(10, 120);
    ths_obj.checkNotEmpty();
});
valid__pdt_name.addEventKeyPress((ths_obj) => {
    ths_obj.preventKeyPress("special");
});
valid__pdt_name.addEventChange((ths_obj) => {
    ths_obj.removeWhitespaceStartEnd();
    ths_obj.removeDuplicateWhitespace();
    ths_obj.updateValueLength()
    ths_obj.changeValueByLength("#seller-product-input-numb");
    ths_obj.checkLengthMinMax(10, 120);
});

function crtEleClass(_name, _attrs, _txt) {
    const node = document.createElement(_name);
    if (_txt) node.innerHTML = _txt;
    for (let key in _attrs) {
        node.setAttribute(key, _attrs[key]);
    }
    return node;
}
