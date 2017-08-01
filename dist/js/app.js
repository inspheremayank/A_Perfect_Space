
/***********************************/
/* Nice scroll for table scrolling */
/**********************************/

/* Vertical scrolling */
$(".scrollingVertical").niceScroll({
    cursorwidth: '5px',
    zindex: 999,
    cursorcolor: "#39c3dd",
    autohidemode: false
});
/* horizrail scrolling */
$(".scrollingHorizontal").niceScroll({
    cursorwidth: '5px',
    zindex: 999,
    horizrailenabled: true,
    cursorcolor: "#39c3dd",
    autohidemode: false
});

$(".formStyle1 input").on('focus', function() {
    $(this).closest(".input-group").addClass("active");
});
$('.formStyle1 input').on('blur', function() {
    if( !$(this).val() ) {
           $(this).closest(".input-group").removeClass("active");
    }
});