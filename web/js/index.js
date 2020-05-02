var lastMouseX = 0,
    lastMouseY = 0;
var rotX = 0,
    rotY = 0;

$('.rotate_block_container').on("mousedown", function(ev) {
    lastMouseX = ev.clientX;
    lastMouseY = ev.clientY;
    $('.rotate_block').css('animation', 'none');
    $(document).on("mousemove", mouseMoved);
});
$(document).on("mouseup", function() {
    $(document).off("mousemove", mouseMoved);
});

function mouseMoved(ev) {
    var deltaX = ev.pageX - lastMouseX;
    var deltaY = ev.pageY - lastMouseY;

    lastMouseX = ev.pageX;
    lastMouseY = ev.pageY;

    rotY -= deltaX * 0.5;
    rotX += deltaY * 0.5;

    $(".rotate_block").css("transform", "rotateX( " + rotX + "deg) rotateY(" + rotY + "deg)");
}