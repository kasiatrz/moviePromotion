$(document).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('.fa-angle-up').fadeIn(200);    // Fade in the arrow
    } else {
        $('.fa-angle-up').fadeOut(200);   // Else fade out the arrow
    }
});
$('.fa-angle-up').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});