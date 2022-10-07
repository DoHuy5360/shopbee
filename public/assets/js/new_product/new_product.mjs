import { CATEGORIES } from "./categories.mjs";

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
    }
    displayCategories(_where) {
        const display_node = document.querySelector(`[data-level="${_where}"]`),
            wrap_categories = document.createElement("div");
        wrap_categories.setAttribute("class", "typeProduct__tray--wrap");
        let category_node, category_name;
        this.arr_categ.forEach((category) => {
            category_node = document.createElement("div");
            category_node.setAttribute("class", "typeProduct__category--name");
            category_name = document.createElement("div");
            category_name.textContent = category.parent;
            category_node.appendChild(category_name);
            if (category.childrend.length) {
                const arrow = document.createElement("div");
                arrow.innerHTML =
                    '<ion-icon name="chevron-forward-outline"></ion-icon>';
                category_node.appendChild(arrow);
            }
            category_node.addEventListener("click", (e) => {
                // category.level + 1
                // The next level (columns)
                this.removeSelectedChildrend(category.level + 1);
                this.addClassChoiceed(category_node);
                this.displayStringCategories();
                this.showLeftAndfRight(category);
                const recursive = new Category(category.childrend);
                recursive.displayCategories(category.level + 1);
            });
            wrap_categories.appendChild(category_node);
            display_node.append(wrap_categories);
        });
    }
    removeSelectedChildrend(_where) {
        let display_node;
        for (let index = _where; index <= this.amount_column; index++) {
            display_node = document.querySelector(`[data-level="${index}"]`);
            display_node.innerHTML = "";
        }
    }
    addClassChoiceed(_node) {
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
        let clone_category;
        const tray_select = document.getElementById(
            "seller-product-submit-items"
        );
        tray_select.innerHTML = "";
        const category_selected = document.querySelectorAll(
            ".typeProduct__category--name.choiceed"
        );
        category_selected.forEach((category) => {
            clone_category = category.cloneNode(true);
            tray_select.appendChild(clone_category);
        });
    }
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
const first_display = new Category(CATEGORIES);
first_display.displayCategories(1);
