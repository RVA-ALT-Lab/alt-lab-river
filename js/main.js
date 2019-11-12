// /* MOVING THE MENU ON SCROLL */

// // When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("wrapper-navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop+60;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

//GET NEW PICS ON COVER PAGE
var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("cover-image");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(carousel, 10000); // Change image every 10 seconds
}



/* SHOWING THE FOTJ MENU AFTER THE FOLD */

// The FOTJ left chunk appears when scroll past the header
// ( function( $ ) {
//     $(document).ready(function() {
//     var header = $("header");
    
//     $(window).scroll(function() {
//         if ($(window).scrollTop() > $(window).height()) {
//         header.addClass("fixed");
//         header.slideDown("fast");
//         } else {
//         header.slideUp("fast", function() {
//             header.removeClass("fixed");
//         });
//         }
//     });  
//     });
// } )( jQuery );