$('#top').click(function() {
    $('body,html').animate({
        scrollTop : 0
    }, 1000);
});

$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {
        $('#top').fadeIn(200);
    } else {
        $('#top').fadeOut(200);
    }
});
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {
        $('#redirect').fadeIn(200);
    } else {
        $('#redirect').fadeOut(200);
    }
});