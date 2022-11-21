const category = [
    {
        parent: "Vận chuyển",
        icon: "rocket-outline",
        child: ["Quản Lý Vận Chuyển", "Giao Hàng Loạt", "Cài Đặt Vận Chuyển"],
    },
    {
        parent: "Quản Lý Đơn Hàng",
        icon: "file-tray-stacked-outline",
        child: ["Tất cả", "Đơn huỷ", "Trả Hàng/Hoàn Tiền"],
    },
    {
        parent: "Quản Lý Sản Phẩm",
        icon: "cube-outline",
        child: ["Tất Cả Sản Phẩm", "Thêm Sản Phẩm", "Sản Phẩm Vi Phạm"],
    },
    {
        parent: "Kênh Marketing",
        icon: "flag-outline",
        child: ["Kênh Marketing", "Quảng Cáo Shopee", "Mã giảm giá của tôi"],
    },
    {
        parent: "Tài Chính",
        icon: "cash-outline",
        child: ["Doanh Thu", "Số dư TK Shopee", "Tài Khoản Ngân Hàng", "Thiết lập Thanh Toán"],
    },
    {
        parent: "Dữ Liệu",
        icon: "bar-chart-outline",
        child: ["Phân Tích Bán Hàng", "Hiệu Quả Hoạt Động"],
    },
    {
        parent: "Phát Triển",
        icon: "trending-up-outline",
        child: ["Nhiệm Vụ Người Bán", "Shop Yêu Thích"],
    },
    {
        parent: "Chăm Sóc Khách Hàng",
        icon: "people-outline",
        child: ["Trợ lý chat", "Hỏi - Đáp"],
    },
    {
        parent: "Quản Lý Shop",
        icon: "storefront-outline",
        child: ["Đánh Giá Shop", "Hồ Sơ Shop", "Trang Trí Shop", "Danh Mục Của Shop", "Kho Hình Ảnh/Video", "Báo Cáo Của Tôi"],
    },
    {
        parent: "Thiết Lập Shop",
        icon: "library-outline",
        child: ["Địa Chỉ", "Thiết Lập Shop", "Tài Khoản", "Nền tảng đối tác (Kết nối API)"],
    },
];

const amount_respon_category = category.length; // 10
let childLst_respon = document.querySelectorAll(".sidebarList_respon");
const titleLst_respon = document.getElementById("seller-sidebar-responMenu-title");
const titleNode_respon = titleLst_respon.childNodes;
//list field
let childTemp; // null
let parentTempt;
function clickEvent_respon(clickObj) {
    clickObj.addEventListener("click", () => {
        titleNode_respon.forEach((titleTag) => {
            if (!parentTempt) {
                parentTempt = titleTag;
                parentTempt.classList.add("parent_active");
                console.log(clickObj.id);
            } else {
                titleNode_respon[clickObj.id].classList.add("parent_active");
                parentTempt.classList.remove("parent_active");
                parentTempt = titleTag;
                console.log(clickObj.id);
            }
        });
        childLst_respon.forEach((children) => {
            if (!childTemp) {
                // khac null la true
                childTemp = children;
                childTemp.classList.add("active");
            } else {
                childLst_respon[clickObj.id].classList.add("active");
                childTemp.classList.remove("active");
                childTemp = children;
            }
        });
    });
}
for (let parentIndex = 0; parentIndex < amount_respon_category; parentIndex++) {
    const list_wrap = document.createElement("div");
    list_wrap.setAttribute("class", "respons_list_wrapper");

    const title_wrap = document.createElement("div");
    title_wrap.setAttribute("class", "respons_list_title");

    parentId = title_wrap.id = parentIndex;
    const content_wrap = document.createElement("div");
    content_wrap.setAttribute("class", "respons_list_content");

    const child_wrap = document.createElement("ul");
    child_wrap.setAttribute("class", "respons_respons_list_items");

    const parent_wrap = document.createElement("div");
    parent_wrap.setAttribute("class", "respons_list_title_detail");

    const target_category = category[parentIndex];
    console.log(target_category);
    parent_wrap.textContent = target_category.parent;
    //get child
    target_category.child.forEach((child) => {
        const item_wrap = document.createElement("li");
        item_wrap.textContent = child;
        child_wrap.appendChild(item_wrap);
    });
    //get icon
    parent_icon = document.createElement("ion-icon");
    parent_icon.setAttribute("name", target_category.icon);
    parent_icon.setAttribute("class", "seller_icon_respon");

    //add everythings
    title_wrap.appendChild(parent_icon);
    title_wrap.appendChild(parent_wrap);
    content_wrap.appendChild(child_wrap);
    titleLst_respon.appendChild(title_wrap);
    list_wrap.appendChild(content_wrap);

    childLst_respon[parentIndex].appendChild(list_wrap);
    clickEvent_respon(title_wrap);
}