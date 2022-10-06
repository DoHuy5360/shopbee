const cateories = [
  {
    level: 1,
    parent: "Thời Trang Nữ",
    childrend: [
      {
        level: 2,
        parent: "Áo",
        childrend: [
          {
            level: 3,
            parent: "Áo hai dây và ba lỗ",
            childrend: [
              {
                level: 4,
                parent: "Áo đen",
                childrend: [],
              },
            ],
          },
        ],
      },
      {
        level: 2,
        parent: "Quần",
        childrend: [],
      },
      {
        level: 2,
        parent: "Quần đùi",
        childrend: [],
      },
      {
        level: 2,
        parent: "Váy",
        childrend: [],
      },
      {
        level: 2,
        parent: "Quần jeans",
        childrend: [],
      },
    ],
  },
  {
    level: 1,
    parent: "Thời Trang Nam",
    childrend: [
      {
        level: 2,
        parent: "Quần j ean",
        childrend: [],
      },
      {
        level: 2,
        parent: "Hoodie & Áo nỉ",
        childrend: [],
      },
      {
        level: 2,
        parent: "Áo len",
        childrend: [],
      },
      {
        level: 2,
        parent: "Áo khoác",
        childrend: [],
      },
      {
        level: 2,
        parent: "Com lê",
        childrend: [],
      },
    ],
  },
  {
    level: 1,
    parent: "Sắc Đẹp",
    childrend: [
      {
        level: 2,
        parent: "Chăm sóc tay",
        childrend: [],
      },
      {
        level: 2,
        parent: "chân & móng",
        childrend: [],
      },
      {
        level: 2,
        parent: "Chăm sóc tóc",
        childrend: [],
      },
      {
        level: 2,
        parent: "Chăm sóc nam giới",
        childrend: [],
      },
      {
        level: 2,
        parent: "Nước hoa",
        childrend: [],
      },
    ],
  },
  {
    level: 1,
    parent: "Sức Khỏe",
    childrend: [
      {
        level: 2,
        parent: "Thực phẩm chức năng",
        childrend: [],
      },
      {
        level: 2,
        parent: "Khác",
        childrend: [],
      },
      {
        level: 2,
        parent: "Vật tư y tế",
        childrend: [],
      },
      {
        level: 2,
        parent: "space empty",
        childrend: [],
      },
      {
        level: 2,
        parent: "space empty",
        childrend: [],
      },
    ],
  },
  {
    level: 1,
    parent: "Phụ Kiện Thời Trang",
    childrend: [
      {
        level: 2,
        parent: "Nhẫn",
        childrend: [],
      },
      {
        level: 2,
        parent: "Bông tai",
        childrend: [],
      },
      {
        level: 2,
        parent: "Khăn choàng",
        childrend: [],
      },
      {
        level: 2,
        parent: "Găng tay",
        childrend: [],
      },
      {
        level: 2,
        parent: "Phụ kiện tóc",
        childrend: [],
      },
    ],
  },
  { level: 1, parent: "Thiết Bị Điện Gia Dụng", childrend: [] },
  { level: 1, parent: "Giày Dép Nam", childrend: [] },
  { level: 1, parent: "Điện Thoại & Phụ Kiện", childrend: [] },
  { level: 1, parent: "Du lịch & Hành lý", childrend: [] },
  { level: 1, parent: "Túi Ví Nữ", childrend: [] },
  { level: 1, parent: "Giày Dép Nữ", childrend: [] },
  { level: 1, parent: "Túi Ví Nam", childrend: [] },
  { level: 1, parent: "Đồng Hồ", childrend: [] },
  { level: 1, parent: "Thiết Bị Âm Thanh", childrend: [] },
  { level: 1, parent: "Thực phẩm và đồ uống", childrend: [] },
  { level: 1, parent: "Chăm Sóc Thú Cưng", childrend: [] },
  { level: 1, parent: "Mẹ & Bé", childrend: [] },
  { level: 1, parent: "Thời trang trẻ em & trẻ sơ sinh", childrend: [] },
  { level: 1, parent: "Gaming & Console", childrend: [] },
  { level: 1, parent: "Cameras & Flycam", childrend: [] },
  { level: 1, parent: "Nhà cửa & Đời sống", childrend: [] },
  { level: 1, parent: "Thể Thao & Dã Ngoại", childrend: [] },
  { level: 1, parent: "Văn Phòng Phẩm", childrend: [] },
  { level: 1, parent: "Sở thích & Sưu tầm", childrend: [] },
  { level: 1, parent: "Ô tô", childrend: [] },
  { level: 1, parent: "Mô tô, xe máy", childrend: [] },
];

class CATEGORY {
  constructor(_array_categories) {
    this.arr_categ = _array_categories;
    this.amount_column = 5;
    this.choice_node_temp;
    this.tray_trans_pre = document.getElementById("typeProduct__previous--transform");
    this.tray_trans_next = document.getElementById("typeProduct__next--transform");
    this.tray_wrap = document.getElementById("typeProduct-columns-wrap");
  }
  displayCategories(_where) {
    const display_node = document.querySelector(`[data-level="${_where}"]`);
    const wrap_categories = document.createElement("div");
    wrap_categories.setAttribute("class", "typeProduct__tray--wrap");
    this.arr_categ.forEach((category) => {
      const category_node = document.createElement("div");
      category_node.setAttribute("class", "typeProduct__category--name");
      const category_name = document.createElement("div");
      category_name.textContent = category.parent;
      category_node.appendChild(category_name);
      if (category.childrend.length) {
        const arrow = document.createElement("div");
        arrow.innerHTML = '<ion-icon name="chevron-forward-outline"></ion-icon>';
        category_node.appendChild(arrow);
      }
      category_node.addEventListener("click", (e) => {
        this.removeCategoriesChild(category.level + 1);
        this.acctiveClassChoiceed(category_node);
        this.storeCategoriesSellected();
        this.addTransfrom(category);
        const call_class = new CATEGORY(category.childrend);
        call_class.displayCategories(category.level + 1);
      });
      wrap_categories.appendChild(category_node);
      display_node.append(wrap_categories);
    });
  }
  removeCategoriesChild(_where) {
    for (let index = _where; index <= this.amount_column; index++) {
      const display_node = document.querySelector(`[data-level="${index}"]`);
      display_node.innerHTML = "";
    }
  }
  acctiveClassChoiceed(_node) {
    if (this.choice_node_temp) {
      this.choice_node_temp.classList.remove("choiceed");
      _node.classList.add("choiceed");
      this.choice_node_temp = _node;
    } else {
      _node.classList.add("choiceed");
      this.choice_node_temp = _node;
    }
  }
  storeCategoriesSellected() {
    const tray_select = document.getElementById("seller-product-submit-items");
    tray_select.innerHTML = "";
    const category_selected = document.querySelectorAll(".typeProduct__category--name.choiceed");
    category_selected.forEach((category) => {
      const clone_category = category.cloneNode(true);
      tray_select.appendChild(clone_category);
    });
  }
  addTransfrom(_category) {
    if (_category.level >= 3) {
      if (_category.childrend.length) {
        this.tray_wrap.style.transform = "translateX(-200px)";
        this.tray_trans_pre.style.display = "grid";
        this.tray_trans_pre.addEventListener("click", (e) => {
          this.tray_wrap.style.transform = "translateX(0)";
          this.tray_trans_next.style.display = "grid";
          this.tray_trans_pre.style.display = "none";
        });
        this.tray_trans_next.addEventListener("click", (e) => {
          this.tray_wrap.style.transform = "translateX(-200px)";
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
const first_display = new CATEGORY(cateories);
first_display.displayCategories(1);
