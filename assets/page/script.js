const barDropdown2 = document.querySelector(".bar-dropdown2");
const barItems2 = document.querySelector(".bar-items2");
const arrowDown2 = document.querySelector(".arrow2");
barDropdown2.addEventListener("click", function(){
    barItems2.classList.toggle("menu-active");
    arrowDown2.classList.toggle("arrow-active");
});


const barDropdown4 = document.querySelector(".bar-dropdown4");
const barItems4 = document.querySelector(".bar-items4");
const arrowDown4 = document.querySelector(".arrow4");
barDropdown4.addEventListener("click", function(){
    barItems4.classList.toggle("menu-active");
    arrowDown4.classList.toggle("arrow-active");
});


const barDropdown5 = document.querySelector(".bar-dropdown5");
const barItems5 = document.querySelector(".bar-items5");
const arrowDown5 = document.querySelector(".arrow5");
barDropdown5.addEventListener("click", function(){
    barItems5.classList.toggle("menu-active");
    arrowDown5.classList.toggle("arrow-active");
});

const menuBar = document.querySelector(".menu-bar");
const sideBars = document.querySelector(".sidebars");
const bgSidebar = document.querySelector(".bg-sidebar");

menuBar.addEventListener("click", function(){
    sideBars.classList.toggle("active");
    bgSidebar.classList.toggle("active");
});

bgSidebar.addEventListener("click", function(){
    sideBars.classList.remove("active");
    this.classList.remove("active");
});
