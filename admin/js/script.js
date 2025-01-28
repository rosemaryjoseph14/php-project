
let isSidebarVisible = false;
function menubarfn() {
    const menuToggle = document.getElementById("menuToggle");
    if (isSidebarVisible) {
        menuToggle.style.left = "-280px";
        // menuToggle.style.top = "54px";
    }else {
        menuToggle.style.left = "0";
        // menuToggle.style.top = "54px";
    }
    isSidebarVisible = !isSidebarVisible;
}
