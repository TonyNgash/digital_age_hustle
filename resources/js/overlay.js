// grub what we need
const darkOverlay = document.querySelector('.dark-overlay');
const sidebarCloseBtn = document.querySelector(".sidebar-close-btn");
const mobileMenuBtn = document.querySelector(".mobile-menu-btn");

//add event listener
darkOverlay.addEventListener("click", ()=>{
    toggleOverlay();
});

sidebarCloseBtn.addEventListener("click", ()=>{
    toggleOverlay();
});

mobileMenuBtn.addEventListener("click", ()=>{
    toggleOverlay();
});


//function to show and remove overlay
function toggleOverlay(){
    darkOverlay.classList.toggle("h-full")
}
