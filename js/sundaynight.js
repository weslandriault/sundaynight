/*!
 * Application JS Code For Sunday Night Entertainment (http://http://sundaynight.ca/)
 * Used for stylistic and presentation purposes.
 */

 var mastheadFadeFromBlack = function mastheadFadeFromBlack () {
  setTimeout(function() {
    $('.navbar-inner').removeClass('black');
    $('#bg-image').removeClass('black');
  }, 50);
 };

 mastheadFadeFromBlack();