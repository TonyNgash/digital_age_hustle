//grab stuff
// alert("Js is working!");
const darkOverlay = document.querySelector('.dark-overlay');
const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
const sidebar = document.querySelector('.sidebar')
const sidebarCloseBtn = document.querySelector('.sidebar-close-btn');
//add our event listener for the click
darkOverlay.addEventListener("click", ()=>{
    sidebarToogle();
    showSidebarCloseBtn();
    toggleOverlay()
});
mobileMenuBtn.addEventListener("click", ()=>{
    sidebarToogle();
    showSidebarCloseBtn();
    toggleOverlay()
});
sidebarCloseBtn.addEventListener("click", ()=>{
    sidebarToogle();
    showSidebarCloseBtn();
    toggleOverlay()
});
function sidebarToogle(){
    sidebar.classList.toggle("-translate-x-full");
}
function showSidebarCloseBtn(){
    sidebarCloseBtn.classList.toggle('invisible');
}
//function to show and remove overlay
function toggleOverlay(){
    darkOverlay.classList.toggle("hidden")
}
