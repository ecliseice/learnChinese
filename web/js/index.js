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



// $(document).on('click', 'body', function () {
//     $('.test').show();
//     new Vivus('.test', {
//         duration: 200,
//         type: 'scenario'
//     });
// })

(function() {
    function scrollHorizontally(e) {
        e = window.event || e;
        var delta = Math.max(-1, Math.min(1, (e.wheelDelta || -e.detail)));
        document.getElementsByClassName('methodology__learning_road')[0].scrollLeft -= (delta*40); // Multiplied by 40
        e.preventDefault();
    }
    if (document.getElementsByClassName('methodology__learning_road')[0].addEventListener) {
        // IE9, Chrome, Safari, Opera
        document.getElementsByClassName('methodology__learning_road')[0].addEventListener("mousewheel", scrollHorizontally, false);
        // Firefox
        document.getElementsByClassName('methodology__learning_road')[0].addEventListener("DOMMouseScroll", scrollHorizontally, false);
    } else {
        // IE 6/7/8
        document.getElementsByClassName('methodology__learning_road')[0].attachEvent("onmousewheel", scrollHorizontally);
    }
})();

var blocks = document.getElementsByClassName('stations_station');
var container = document.getElementsByClassName('learning_road__stations');
new HorizontalScroll.default({
    blocks : blocks,
    container: container,
});


// $(document).bind('mousewheel', function (e) {
//     // var nt = $('.learning_road__stations').scrollLeft()-(e.deltaY*e.deltaFactor*100);
//     var nt = $('.learning_road__stations').scrollLeft();
//     console.log(nt)
//     // e.preventDefault();
//     // e.stopPropagation();
//     // $('.learning_road__stations').stop().animate( {
//     //     scrollTop : nt
//     // } , 500 , 'easeInOutCubic' );
// } )


// luxy.init();