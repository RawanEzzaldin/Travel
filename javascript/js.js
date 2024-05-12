
    function show(show,hide1,hide2){
        document.getElementById(show).style.display="block";
        document.getElementById(show).style.display="flex";
        document.getElementById(hide1).style.display="none";
        document.getElementById(hide2).style.display="none";
    }
function hidesidebar(){
    document.getElementById("header-sidebar").style.display="none";
}
function showsidebar(){
    document.getElementById("header-sidebar").style.display="block";
}
function showsidebartourism(){
    document.getElementById("header-sidebar-tourism").classList.toggle("show");
    window.onclick = function(event) {
      if (!event.target.matches('.travel')) {
        var dropdowns = document.getElementsByClassName("header-sidebar-tourism");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
  }
function showservice(shows,hides1,hides2){
    document.getElementById(shows).style.display="block";
    document.getElementById(shows).style.display="flex";
    document.getElementById(hides1).style.display="none";
    document.getElementById(hides2).style.display="none";
}

function move(carousell,wrapper,img){

  const carousel = document.querySelector(carousell),
  firstImg = carousel.querySelectorAll(img)[0],
  arrowIcons = document.querySelectorAll(wrapper);

  let isDragStart = false, isDragging = false, prevPageX, prevScrollLeft, positionDiff;

  const showHideIcons = () => {
      // showing and hiding prev/next icon according to carousel scroll left value
      let scrollWidth = carousel.scrollWidth - carousel.clientWidth; // getting max scrollable width
      arrowIcons[0].style.display = carousel.scrollLeft == 0 ? "none" : "block";
      arrowIcons[1].style.display = carousel.scrollLeft == scrollWidth ? "none" : "block";
  }

  arrowIcons.forEach(icon => {
      icon.addEventListener("click", () => {
          let firstImgWidth = firstImg.clientWidth + 14; // getting first img width & adding 14 margin value
          // if clicked icon is left, reduce width value from the carousel scroll left else add to it
          carousel.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;
          setTimeout(() => showHideIcons(), 60); // calling showHideIcons after 60ms
      });
  });
}