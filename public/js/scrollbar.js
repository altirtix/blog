$("html").niceScroll({
    smoothscroll: true,
    scrollspeed: 100,
    mousescrollstep: 40,
    cursorborder:'none', 
    cursorborderradius: 0,
    cursorcolor:"rgb(149,165,166)",
    background:"rgb(238,238,238)",
    horizrailenabled: false,
});  
  
$("html").on('touchmove', function(evt) {
    evt.preventDefault();
});

setInterval(function() { 
  $("html").getNiceScroll().resize(); 
}, 0.1);