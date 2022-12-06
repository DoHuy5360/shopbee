const mediaQuery = window.matchMedia("(max-width: 768px)");
let hexString = "0123456789abcdef";
const getLoginBg = document.getElementById("login_page-content-respon");
const getRegsBg = document.getElementById("regs_page-content-respon");

let randomColor = () => {
    let hexCode = "#";
    for (i = 0; i < 6; i++) {
        hexCode += hexString[Math.floor(Math.random() * hexString.length)];
    }
    return hexCode;
};
var color1 = randomColor();
const color2 = "black";
function AutoGradient() {
    const color2 = color1;
    color1 = randomColor();
    getLoginBg.style.background =
        "linear-gradient( 270deg," + color2 + "," + color1 + ")";
    if(getRegsBg){
        getRegsBg.style.background =
            "linear-gradient( 270deg," + color2 + "," + color1 + ")";
    }
}

setInterval(AutoGradient, 10000);
function handleTabletChange(e) {
    const testTime = "";
    if (e.matches) {
        setInterval(AutoGradient, 10000) = testTime;
    } else {
        setTimeout(() => { setInterval(testTime) })
    }
}
mediaQuery.addListener(handleTabletChange)
handleTabletChange(mediaQuery)
