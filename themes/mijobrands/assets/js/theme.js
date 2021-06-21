// JS para sticky header
var header = document.getElementById("header");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

window.onscroll = function() {
  myFunction();
};

// Funciones jQuery
jQuery(document).ready(function($) {

  // Navegación smooth
  $(function(){
    $('a[href*=#]').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var $target = $(this.hash);
          $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
          if ($target.length) {
            var targetOffset = $target.offset().top;
            $('html,body').animate({scrollTop: targetOffset}, 1000);
            return false;
          }
        }
    });
   }); //fin

  // Interacción con menú responsivo
  $("#menu_responsive").on('click', function() {
    $(".menu_responsive_items").show(500);
  });
  $("#menu_responsive_close").on('click', function() {
    $(".menu_responsive_items").hide(500);
  });
});

