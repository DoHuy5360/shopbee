export class SWITCHTAB {
    constructor(_parent_node, _line_class = ".___") {
        this._color_orange = "#f0572b";
        this._color_black = "#000000";
        this._parent_lv1 = document.querySelector(
            `[data-switch-name="${_parent_node}"]`
        );
        this._parent_lv2 = this._parent_lv1.querySelector(
            ".seller__opttion--bar"
        );
        this._parent_lv3 = this._parent_lv2.querySelector(
            ".seller__option--element-wrap"
        );
        this._array_nodes = this._parent_lv3.querySelectorAll(
            ".seller__option--element"
        );
        this._first_node = this._array_nodes[0];
        this._last_node = this._array_nodes[this._array_nodes.length - 1];
        this._under_line = this._parent_lv3.querySelector(_line_class);
        this._under_line.style.width = this._first_node.offsetWidth + "px";
        this._first_node.style.color = this._color_orange;
        this._arrow_back = this._parent_lv2.querySelector(
            ".seller__arrow--back"
        );
        this._arrow_forward = this._parent_lv2.querySelector(
            ".seller__arrow--forward"
        );
        this._arrow_forward.style.display = "none";
    }
    setFirstTargetElement(_index_number) {}
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
