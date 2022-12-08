import { Primitive } from "../primitive/data.js";

export class NodeValidation extends Primitive {
    constructor(_target_name) {
        super();
        this.str__name = _target_name;
        this.node__target = document.querySelector(this.str__name);
        this.obj__rcd_vld = {};
    }
    addEventChange(callback, _debug = false) {
        this.node__target.addEventListener("change", (e) => {
            callback(this);
            if (_debug) {
                setTimeout(() => {
                    console.log(this.obj__rcd_vld);
                }, 1500);
            }
        });
    }
    isValid() {
        for (let boolean__valid in this.obj__rcd_vld) {
            if (!this.obj__rcd_vld[boolean__valid]) return false;
        }
        return true;
    }
    forceValid() {
        this.obj__rcd_vld = {
            forced: true,
        };
    }
    checkInnerContain(_outer_node, _inner_node) {
        const node__outer = document.querySelector(_outer_node);
        const node__inner = node__outer.querySelector(_inner_node);
        if (node__inner) {
            this.obj__rcd_vld.contain = true;
        } else {
            this.obj__rcd_vld.contain = false;
        }
    }
}
export class InputValidation extends NodeValidation {
    constructor(_target_name) {
        super(_target_name);
        this.str__val_leng = [...this.node__target.value.trim()].length;
        this.event__key_click;
    }
    addEventInput(_callback, _debug = false) {
        this.node__target.addEventListener("input", (e) => {
            _callback(this);
            if (_debug) {
                console.log(this.obj__rcd_vld);
            }
        });
    }
    addEventChange(_callback, _debug = false) {
        this.node__target.addEventListener("change", (e) => {
            _callback(this);
            if (_debug) {
                console.log(this.obj__rcd_vld);
            }
        });
    }
    addEventKeyPress(_callback, _debug = false) {
        this.node__target.addEventListener("keypress", (e) => {
            this.event__key_click = e;
            _callback(this);
            if (_debug) {
                console.log(this.obj__rcd_vld);
            }
        });
    }
    changeValueByLength(_target) {
        const node__change = document.querySelector(_target);
        node__change.innerHTML = this.str__val_leng;
    }
    checkNotEmpty() {
        if (this.node__target.value.trim()) {
            this.obj__rcd_vld.not_empty = true;
        } else {
            this.obj__rcd_vld.not_empty = false;
        }
    }
    checkLengthMinMax(_min, _max) {
        if (this.str__val_leng >= _min && this.str__val_leng <= _max) {
            this.obj__rcd_vld.min_max_leng = true;
        } else {
            this.obj__rcd_vld.min_max_leng = false;
        }
    }
    checkNumberMinMax(_min, _max) {
        const node__value = parseInt(this.node__target.value);
        if (node__value >= _min && node__value <= _max) {
            this.obj__rcd_vld.min_max_num = true;
        } else {
            this.obj__rcd_vld.min_max_num = false;
        }
    }
    checkNotSameValue(_select, _arr_compare) {
        const boll_is_same = _arr_compare.every((val) => {
            return _select.value == document.querySelector(val).value;
        });
        if (boll_is_same) {
            this.obj__rcd_vld.not_same_val = false;
        } else {
            this.obj__rcd_vld.not_same_val = true;
        }
    }
    checkExternalNotEmpty(_str_class) {
        const node__external = document.querySelector(_str_class);
        node__external.addEventListener("input", (e) => {
            this.checkAllExternalNotEmpty(_str_class);
        });
    }
    checkAllExternalNotEmpty(_str_class) {
        const node__externals = document.querySelectorAll(_str_class);
        node__externals.forEach((inp) => {
            if (inp.value.trim()) {
                this.obj__rcd_vld.external_not_empty = true;
            } else {
                this.obj__rcd_vld.external_not_empty = false;
                return;
            }
        });
    }
    checkValidEmail() {
        const bool__check_email = String(this.node__target.value)
            .toLowerCase()
            .match(
                /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
            );
        if (bool__check_email) {
            this.obj__rcd_vld.valid_email = true;
        } else {
            this.obj__rcd_vld.valid_email = false;
        }
    }
    checkContainOnly(_str_require) {
        let str__regex;
        switch (_str_require) {
            case "number":
                str__regex = new RegExp("^[0-9]+$");
                if (str__regex.test(this.node__target.value)) {
                    this.obj__rcd_vld.number_only = true;
                } else {
                    this.obj__rcd_vld.number_only = false;
                }
                return;
            default:
                return;
        }
    }
    preventKeyPress(_str__require) {
        switch (_str__require) {
            case "letter":
                if (this.arr__letters.includes(this.event__key_click.key)) {
                    this.event__key_click.preventDefault();
                }
                return;
            case "special":
                if (this.arr__specials.includes(this.event__key_click.key)) {
                    this.event__key_click.preventDefault();
                }
                return;
            default:
                if (_str__require == this.event__key_click.key) {
                    this.event__key_click.preventDefault();
                }
                return;
        }
    }
    updateValueLength() {
        this.str__val_leng = [...this.node__target.value.trim()].length;
    }
    removeWhitespace() {
        this.node__target.value = this.node__target.value.replace(/\s+/g, "");
    }
    removeWhitespaceStartEnd() {
        this.node__target.value = this.node__target.value.trim();
    }
    removeDuplicateWhitespace() {
        this.node__target.value = this.node__target.value.replace(
            /\s\s+/g,
            " "
        );
    }
}
export class MediaValidation {
    constructor(_file_object) {
        this.str__origin_name = _file_object.name;
        this.str__file_name = this.str__origin_name.split(".")[0];
        this.str__file_name_leng = [...this.str__file_name].length;
        this.str__file_extension = this.str__origin_name.split(".")[1];
        this.obj__rcd_vld = {};
    }
    createContainer(_callback) {
        _callback(this);
    }
    isValid() {
        for (let boolean__valid in this.obj__rcd_vld) {
            if (!this.obj__rcd_vld[boolean__valid]) return false;
        }
        return true;
    }
    checkLengthFileMinMax(_min, _max) {
        if (
            this.str__file_name_leng >= _min &&
            this.str__file_name_leng <= _max
        ) {
            this.obj__rcd_vld.min_max_leng = true;
        } else {
            this.obj__rcd_vld.min_max_leng = false;
        }
    }
    checkFileExtension(_arr_type) {
        if (_arr_type.includes(this.str__file_extension)) {
            this.obj__rcd_vld.valid_extension = true;
        } else {
            this.obj__rcd_vld.valid_extension = false;
        }
    }
}
