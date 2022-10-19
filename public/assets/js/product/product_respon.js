const toggleDown_des = document.querySelector(".product-spec_feature_btn_down");
const toggleUp_des = document.querySelector(".product-spec_feature_btn_up");
const expand_des = document.getElementById("product-spec_feature")

const toggleDown_des_srink = document.getElementById("product-spec_feature-btn-down")


toggleDown_des.addEventListener("click",(e) =>{
    expand_des.classList.toggle("product-spec_feature_full");
    toggleDown_des.classList.toggle("product-spec_feature_btn_full");
    if (toggleDown_des_srink.style.display === "none") {
        toggleDown_des_srink.style.display = "block";
    } else {
        toggleDown_des_srink.style.display = "none";
    }
})

toggleUp_des.addEventListener("click",(e) =>{
    expand_des.classList.toggle("product-spec_feature_full");
    // toggleDown_des.classList.toggle("product-spec_feature_btn_srink");
    if (toggleDown_des_srink.style.display === "none") {
        toggleDown_des_srink.style.display = "block";
    } else {
        toggleDown_des_srink.style.display = "none";
    }
})