var xValues = [0, 0, 0, 0];
var yValues = [0, 0, 0, 0];

new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "rgba(0,0,255,0.1)",
      data: yValues,
    },],
  },
  options: {
    legend: {
      display: false
    },
    scales: {
      yAxes: [{
        ticks: {
          min: 6,
          max: 16
        }
      }],
    },
  },
});
// ! -------------------------------- end chart
const menuList = document.querySelectorAll(".sidebar__menu--title");
menuList.forEach((menu) => {
  menu.addEventListener("click", (e) => {
    menu.parentNode.querySelector(".sidebar__menu--content").classList.toggle("toggle__none");
    menu.parentNode.querySelector(".seller__arrow--sidebar").classList.toggle("toggle__transform");
  });
});

// !----------------------------- switch tab ----------------------
class SWITCHTAB {
  constructor(_parent_node, _line_class = ".___") {
    this._color_orange = "#f0572b";
    this._color_black = "#000000";
    this._parent_lv1 = document.querySelector(`[data-switch-name="${_parent_node}"]`);
    this._parent_lv2 = this._parent_lv1.querySelector(".seller__opttion--bar");
    this._parent_lv3 = this._parent_lv2.querySelector(".seller__option--element-wrap");
    this._array_nodes = this._parent_lv3.querySelectorAll(".seller__option--element");
    this._first_node = this._array_nodes[0];
    this._last_node = this._array_nodes[this._array_nodes.length - 1];
    this._under_line = this._parent_lv3.querySelector(_line_class);
    this._under_line.style.width = this._first_node.offsetWidth + "px";
    this._first_node.style.color = this._color_orange;
    this._arrow_back = this._parent_lv2.querySelector(".seller__arrow--back");
    this._arrow_forward = this._parent_lv2.querySelector(".seller__arrow--forward");
    this._arrow_forward.style.display = "none";
  }
  setFirstTargetElement(_index_number) { }
  implement() {
    this._array_nodes.forEach((node) => {
      node.addEventListener("click", (tab) => {
        const tab_index_width = node.offsetWidth;
        const tab_index_left = node.offsetLeft;
        this._under_line.style.left = tab_index_left + "px";
        this._under_line.style.width = tab_index_width + "px";
        this._first_node.style.color = this._color_black;
        this._first_node = node;
        node.style.color = this._color_orange;
      });
    });
  }
  setArrow() {
    this._arrow_forward.style.display = "grid";
    this._arrow_back.addEventListener("click", (e) => {
      this._parent_lv3.style.transform = "translateX(0)";
      this._arrow_forward.style.display = "grid";
      this._arrow_back.style.display = "none";
    });
    this._arrow_forward.addEventListener("click", (e) => {
      this._parent_lv3.style.transform = "translateX(-120px)";
      this._arrow_forward.style.display = "none";
      this._arrow_back.style.display = "grid";
    });
  }
  setTransformLeftRight() {
    this._first_node.addEventListener("click", (e) => {
      this._parent_lv3.style.transform = "translateX(0)";
      this._arrow_forward.style.display = "grid";
      this._arrow_back.style.display = "none";
    });
    this._last_node.addEventListener("click", (e) => {
      this._parent_lv3.style.transform = "translateX(-120px)";
      this._arrow_forward.style.display = "none";
      this._arrow_back.style.display = "grid";
    });
  }
}
const manage_marketing = new SWITCHTAB("manage-marketing");
manage_marketing.implement();

const manage_activity = new SWITCHTAB("manage-activity");
manage_activity.implement();
manage_activity.setArrow();
manage_activity.setTransformLeftRight()
//! --------------------------respon seller list-----------------------------

category = [
  {
    parent: "Vận chuyển",
    child: ["Quản Lý Vận Chuyển", "Giao Hàng Loạt", "Cài Đặt Vận Chuyển"],
  },
  {
    parent: "Quản Lý Đơn Hàng",
    child: ["Tất cả", "Đơn huỷ", "Trả Hàng/Hoàn Tiền"],
  },
  {
    parent: "Quản Lý Sản Phẩm",
    child: ["Tất Cả Sản Phẩm", "Thêm Sản Phẩm", "Sản Phẩm Vi Phạm"],
  },
  {
    parent: "Kênh Marketing",
    child: ["Kênh Marketing", "Quảng Cáo Shopee", "Mã giảm giá của tôi"],
  },
  {
    parent: "Tài Chính",
    child: ["Doanh Thu", "Số dư TK Shopee", "Tài Khoản Ngân Hàng", "Thiết lập Thanh Toán"],
  },
  {
    parent: "Dữ Liệu",
    child: ["Phân Tích Bán Hàng", "Hiệu Quả Hoạt Động"],
  },
  {
    parent: "Phát Triển",
    child: ["Nhiệm Vụ Người Bán", "Shop Yêu Thích"],
  },
  {
    parent: "Chăm Sóc Khách Hàng",
    child: ["Trợ lý chat", "Hỏi - Đáp"],
  },
  {
    parent: "Quản Lý Shop",
    child: ["Đánh Giá Shop", "Hồ Sơ Shop", "Trang Trí Shop", "Danh Mục Của Shop", "Kho Hình Ảnh/Video", "Báo Cáo Của Tôi"],
  },
  {
    parent: "Thiết Lập Shop",
    child: ["Địa Chỉ", "Thiết Lập Shop", "Tài Khoản", "Nền tảng đối tác (Kết nối API)"],
  },
  {
    parent: "Thiết Lập Shop 2",
    child: ["Địa Chỉ", "Thiết Lập Shop", "Tài Khoản", "Nền tảng đối tác (Kết nối API 2)"],
  },
];

