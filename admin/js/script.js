
let isSidebarVisible = true;

function menubarfn() {
  
  var menuToggle = document.getElementById("sidebarbox");

  const continer = document.getElementById("content-wrapper");



  if (isSidebarVisible) {
    menuToggle.style.transition="all 1s";
    continer.style.marginLeft="0";
   menuToggle.style.position="relative";
   continer.style.position="relative";
   menuToggle.style.marginLeft="-17%";
   continer.style.float="right";
   continer.style.width="100%";
  } else {
    menuToggle.style.position="relative";
   continer.style.position="relative";
   continer.style.marginLeft="17%";
   menuToggle.style.marginLeft="-1%";
    continer.style.transition="all 1s";
    menuToggle.style.transition="all 1s";
    continer.style.width="84%";
    continer.style.float="right";
    
    
  }
  isSidebarVisible = !isSidebarVisible;
}