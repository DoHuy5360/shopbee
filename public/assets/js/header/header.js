const headerMenu = document.getElementById("mainHome_navbar_about_topic-respon-hidden");
const menuIcon = document.getElementById("mainHome_navbar_about_topic-close-icon")
const menuIconItem = document.querySelector(".mainHome_navbar_aboutUs")
headerMenu.addEventListener("click", (e) => {
    menuIconItem.style.display = "block";
    menuIconItem.style.transition  = "all .5s ease 5s";

});

menuIcon.addEventListener("click", (e) => {
    menuIconItem.style.display = "none";
});
