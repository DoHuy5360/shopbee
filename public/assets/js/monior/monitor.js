import { SWITCHTAB } from "../module/class/switch_tab.js";
import { PrimitiveInteractive } from "../module/primitive/data.js";

const pri__obj = new PrimitiveInteractive();
const date__date = new Date()
const int__crrnt_month = date__date.getMonth()+1

var xValues = pri__obj.arrayFromTo(1, int__crrnt_month, pri__obj.arr__months_vn_T);
var yValues1 = [2, 3, 1, 4, 1, 7, 0, 3, 5, 4, 4, 6];
var yValues2 = [1, 3, 5, 7, 2, 4, 8, 9, 0, 4, 6, 1];
var yValues3 = [4, 8, 9, 0, 4, 6, 3, 1, 4, 1, 7, 1];
// var yValues4 = [2, 1, 2, 1, 3, 4, 2, 5, 3, 1, 2, 1];

new Chart("myChart", {
    type: "line",
    data: {
        labels: xValues,
        datasets: [
            {
                label: "Lượt truy cập",
                fill: false,
                lineTension: 0,
                backgroundColor: "#ee4d2d",
                borderColor: "#ee4d2d50",
                data: yValues1,
            },
            {
                label: "Lượt xem",
                fill: false,
                lineTension: 0,
                backgroundColor: "#191a21",
                borderColor: "#191a2150",
                data: yValues2,
            },
            {
                label: "Đơn hàng",
                fill: false,
                lineTension: 0,
                backgroundColor: "#ffd02e",
                borderColor: "#ffd02e50",
                data: yValues3,
            },
            // {
            //     label: "Tỷ lệ chuyển đổi",
            //     fill: false,
            //     lineTension: 0,
            //     backgroundColor: "#2d77dd",
            //     borderColor: "#2d77dd50",
            //     data: yValues4,
            // },
        ],
    },
    options: {
        legend: {
            display: false,
        },
        scales: {
            yAxes: [
                {
                    ticks: {
                        min: 6,
                        max: 16,
                    },
                },
            ],
        },
    },
});

var manage_marketing = new SWITCHTAB("manage-marketing");
manage_marketing.implement();

var manage_activity = new SWITCHTAB("manage-activity");
manage_activity.implement();
manage_activity.setArrow();
manage_activity.setTransformLeftRight();
