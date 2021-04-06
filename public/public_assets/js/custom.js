// preloader
    $(window).on('load', function () {
        $('#loader_wrapper').fadeOut('slow', function () {
            $(this).remove();
        });
    });

//aos initialization
    AOS.init();

//wow js initialization
//     new WOW().init();

//owl carousel for board page section projects
let owl = $('.owl-carousel');
owl.owlCarousel({
        loop:true,
        nav:true,
        margin:85,
        center:true,
        slideBy:1,
        autoplay:true,
        responsiveClass:true,
        autoplayTimeout:1000,
        autoplayHoverPause:true,
        navText : ["<i class='icofont-long-arrow-left'></i>","<i class='icofont-long-arrow-right'></i>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            960:{
                items:2
            },
            1200:{
                items:5
            }
        }
    });

//mouse carousel
    owl.on('mousewheel', '.owl-stage', function (e) {
        if (e.deltaY>0) {
            owl.trigger('next.owl');
        } else {
            owl.trigger('prev.owl');
        }
        e.preventDefault();
    });

//roundslider ##--FEEDBACK--##
$.fn.roundSlider.prototype._handleDragDistance = 90;
$("#feedback").roundSlider({
    'min':0,
    'max':365,
    unit_sign:'deg',
});

$(function () {
    $('a[href="#search"]').on('click', function(event) {
        event.preventDefault();
        $('#search').addClass('open');
        $('#search > form > input[type="search"]').focus();
    });

    $('#search, #search button.close').on('click keyup', function(event) {
        if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
            $(this).removeClass('open');
        }
    });
});

//mouse cursor
var mouseX=window.innerWidth/2,
    mouseY=window.innerHeight/2;

var circle = {
     el:$('#circle'),
     x:window.innerWidth/2,
     y:window.innerHeight/2,
     w:50,
     h:50,
     update:function(){
                   l = this.x-this.w/2.5;
                   t = this.y-this.h/2.5;
                   this.el.css({
                            'transform':
                            'translate3d('+l+'px,'+t+'px, 0)' });
                           }
}

$(window).mousemove (function(e){
  mouseX = e.clientX;
  mouseY = e.clientY;
})

setInterval (move,1000/60)
function move(){
  circle.x = lerp (circle.x, mouseX, 0.1);
  circle.y = lerp (circle.y, mouseY, 0.1);
  circle.update()
}

function lerp (start, end, amt){
  return (1-amt)*start+amt*end
}
