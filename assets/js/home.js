/* -------------- add active class to nav-item  ----------*/

// Get all buttons with class="btn" inside the container
let navItems = document.querySelectorAll(".nav-item");

// Loop through the nav items and add the active class to the current/clicked button
for (let i = 0; i < navItems.length; i++) {
  navItems[i].addEventListener("click", function() {
    let current = document.getElementsByClassName("active");
    // If there's no active class
    if (current.length > 0) {
      current[0].className = current[0].className.replace("active", "");
    }
    // Add the active class to the current/clicked button
    this.className += " active";
  });
}

/* -------------------- owl carousel ---------------- */
$(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});
$('.owl-carousel').owlCarousel({
loop:true,
margin:60,
nav:true,
dots: false,
responsiveClass:true,
responsive:{
    0:{
      items:1,
      nav: false
    },
    768:{
      items:2
    },
    992:{
      items:3,
    }
}
})