export class VALIDATION {
    constructor(_id) {
        this.string__id = _id;
        this.node__target;
        this.string__value_length = 0;
        this.object__record_valid = {};
    }
    isValid() {
        for (let boolean__valid in this.object__record_valid) {
            if (!this.object__record_valid[boolean__valid]) return false;
        }
        return true;
    }
    addEventInput(changeAction) {
        this.node__target = document.querySelector(this.string__id);
        this.node__target.addEventListener("input", (e) => {
            this.string__value_length = [...this.node__target.value].length;
            changeAction(this.node__target);
        });
    }
    changeValueByLength(_input, _target) {
        const node__change = document.querySelector(_target);
        node__change.innerText = this.string__value_length;
    }
    checkLengthMinMax(_min, _max) {
        if (
            this.string__value_length >= _min &&
            this.string__value_length < +_max
        ) {
            this.object__record_valid.min_max = true;
        } else {
            this.object__record_valid.min_max = false;
        }
    }
}
