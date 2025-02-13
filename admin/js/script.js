
let isSidebarVisible = false;
function menubarfn() {
    const menuToggle = document.getElementById("menuToggle");
    const continer = document.getElementById("content-wrapper");
    if (isSidebarVisible) {
        menuToggle.style.left = "-280px";
        menuToggle.style.top = "54px";
        continer.style.width = "100%";
        continer.style.marginLeft = "0px";
    } else {
        menuToggle.style.left = "0";
        menuToggle.style.top = "54px";
        continer.style.width = "80%";
        continer.style.marginLeft = "291px";
    }
    isSidebarVisible = !isSidebarVisible;
}
