const headerMenu = document.getElementById("mainHome_navbar_about_topic-respon-hidden");
const menuIcon = document.getElementById("mainHome_navbar_about_topic-close-icon")
const menuIconItem = document.querySelector(".mainHome_navbar_aboutUs")
const menuItems = document.querySelector(".mainHome_navbar_aboutUs-wrapper");

headerMenu.addEventListener("click", (e) => {
    menuIconItem.classList.toggle("menuIconItem");
    menuItems.classList.toggle("menuItems");
});

menuIcon.addEventListener("click", (e) => {
    menuIconItem.classList.toggle("menuIconItem");
    menuItems.classList.toggle("menuItems");
});
