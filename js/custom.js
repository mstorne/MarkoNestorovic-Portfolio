// Scroll effect

$('.scrollLink').click( function() {
    const targetDiv = $(this).attr('href');
    $('html, body').animate({
      scrollTop: $(targetDiv).offset().top
    }, 1500, 'easeOutExpo');
});
