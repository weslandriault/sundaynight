/*!
 * Application JS Code For Sunday Night Entertainment (http://http://sundaynight.ca/)
 * Used for stylistic and presentation purposes.
 */
var navOpen = false;

var mastheadFadeFromBlack = function mastheadFadeFromBlack () {
  setTimeout(function() {
    $('.navbar-inner').removeClass('black');
    $('#bg-image').removeClass('black');
  }, 50);
};

 mastheadFadeFromBlack();

$('.navbar-toggle').on('click', function () {
  navOpen = !navOpen;

  if (navOpen) {
    $('#page').addClass('nav-expanded');
    $('.icon-bar').addClass('nav-expanded');
  } else {
    $('#page').removeClass('nav-expanded');
    $('.icon-bar').removeClass('nav-expanded');
  }
});