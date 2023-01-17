
/* ========================================================================= */
/*	nav bar and index js
/* ========================================================================= */
if ($(window).width() < 900) {

    $(".dropdown").click(function () {
        $(".dropdown-menu").slideToggle();
        //   var e = document.getElementById("foo");
        //   if(e.style.display == 'block')
        //      e.style.display = 'none';
        //   else
        //      e.style.display = 'block';
    });
}
else {

    $(".dropdown").hover(function () {
        // $(".dropdown-menu").toggle()  ;
        $(".dropdown-menu").toggle().addClass("animated fadeInDown")
        // $(".dropdown-menu").hide()  
        //   var e = document.getElementById("foo");
        //   if(e.style.display == 'block')
        //      e.style.display = 'none';
        //   else
        //      e.style.display = 'block';

    });
}
if ($(window).width() < 900) {
    // $('.who-we-are').css("color","red;");
    $("#who-we-are").attr("style", "display:none");
    // $("#about-img1").attr("style","heigth:280px");
}
// $(document).ready(function () {
//     $(".dropdown").click(function () {
//         $(".dropdown-menu").slideToggle()
//     })
// })

/* ========================================================================= */
/*	Preloader
/* ========================================================================= */

// jQuery(window).load(function () {
//     $('#preloader').fadeOut('slow');
// });

$(document).ready(function () {
    $('#preloader').fadeOut('slow');
});

/* ========================================================================= */
/*  Welcome Section Slider untouced section
/* ========================================================================= */

$(function () {
    var Page = (function () {
        var $navArrows = $('#nav-arrows'),
            $nav = $('#nav-dots > span'),
            slitslider = $('#slider').slitslider({
                onBeforeChange: function (slide, pos) {
                    $nav.removeClass('nav-dot-current');
                    $nav.eq(pos).addClass('nav-dot-current');
                }
            }),
            init = function () {
                initEvents();
            },
            initEvents = function () {
                // add navigation events
                $navArrows.children(':last').on('click', function () {
                    slitslider.next();
                    return false;
                });
                $navArrows.children(':first').on('click', function () {
                    slitslider.previous();
                    return false;
                });
                $nav.each(function (i) {
                    $(this).on('click', function (event) {
                        var $dot = $(this);
                        if (!slitslider.isActive()) {
                            $nav.removeClass('nav-dot-current');
                            $dot.addClass('nav-dot-current');
                        }
                        slitslider.jump(i + 1);
                        return false;
                    });
                });
            };
        return {
            init: init
        };
    })();
    Page.init();
});



$(document).ready(function () {

    $(window).scroll(function () {
        if ($(window).scrollTop() > 400) {
            $('.navbar-brand a').css('color', '#fff');
            $('#navigation').removeClass('animated-header');
        } else {
            $('.navbar-brand a').css('color', 'inherit');
            $('#navigation').addClass('animated-header');
        }
    });


    /* ========================================================================= */
    /*	Featured Project Lightbox
    /* ========================================================================= */

    $('.fancybox').fancybox({
        padding: 0,

        openEffect: 'elastic',
        openSpeed: 650,

        closeEffect: 'elastic',
        closeSpeed: 550,

        closeClick: true,

        beforeShow: function () {
            this.title = $(this.element).attr('title');
            this.title = '<h3>' + this.title + '</h3>' + '<p>' + $(this.element).parents('.portfolio-item').find('img').attr('alt') + '</p>';
        },

        helpers: {
            title: {
                type: 'inside'
            },
            overlay: {
                css: {
                    'background': 'rgba(0,0,0,0.8)'
                }
            }
        }
    });

});

var wow = new WOW({
    offset: 75, // distance to the element when triggering the animation (default is 0)
    mobile: false // trigger animations on mobile devices (default is true)
});
wow.init();


/* ========================================================================= */
/*	about/contact/footer  js
/* ========================================================================= */

document.addEventListener('DOMContentLoaded', () => {
    "use strict";

    /**
     * Preloader
     */
    const preloader = document.querySelector('#preloader');
    if (preloader) {
        window.addEventListener('load', () => {
            preloader.remove();
        });
    }



    /**
     * Scroll top button
     */
    const scrollTop = document.querySelector('.scroll-top');
    if (scrollTop) {
        const togglescrollTop = function () {
            window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
        }
        window.addEventListener('load', togglescrollTop);
        document.addEventListener('scroll', togglescrollTop);
        scrollTop.addEventListener('click', window.scrollTo({
            top: 0,
            behavior: 'smooth'
        }));
    }




});
/* ========================================================================= */
/*	about/contact/footer  js
/* ========================================================================= */
