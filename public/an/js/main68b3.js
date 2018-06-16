$(document).ready(function () {


    jQuery("nav>ul>li a").click(function (e) {
        if($(this).parent('li').children().length > 1){
            e.preventDefault();
        }
    });

    $(function () {
        var pull = $('#pull');
        menu = $('nav > ul');
        menuHeight = menu.height();

        $(pull).on('click', function (e) {
            e.preventDefault();
            menu.slideToggle();
            jQuery(".nav-icon").toggleClass('close');
        });

        $(window).resize(function () {
            var w = $(window).width();
            if (w > 300 && menu.is(':hidden')) {
                menu.removeAttr('style');
            }
        });
    });

     $(function () {
        var pull1 = $('#pull1');
        menu1 = $('.roma-header nav > ul');
        menuHeight = menu1.height();

        $(pull1).on('click', function (e) {
            e.preventDefault();
            menu1.slideToggle();
            jQuery(".roma-header .nav-icon").toggleClass('close');
        });

        $(window).resize(function () {
            var w = $(window).width();
            if (w > 300 && menu1.is(':hidden')) {
                menu1.removeAttr('style');
            }
        });
    });
    
});


function bindMenuHover() {


    var w = $(window).width();
    if (w > 960) {
        jQuery("nav>ul>li").hoverIntent({
                over: function () {
                    $(this).children(".submenu").stop(true, true).show();
                }, out: function () {
                    var that = $(this);
                    that.children(".submenu").hide();
                }
            }
        );

    } else {
        jQuery("nav li").unbind('mouseenter mouseleave')
    }


}

$(document).ready(function () {

    bindMenuHover();

    jQuery("nav li .submenu-icon").click(function (e) {
        $(this).toggleClass("open");
        $(this).parent().children(".submenu,.submenu-level2").slideToggle();
        e.preventDefault();

    });

    $(".submenu .col-1>ul>li").hoverIntent(function () {
        // var img = $(this).data('img');
        // $(this).parents('.col-1').next('.menu-pic')[0].className = 'menu-pic menu-' + $(this).data('menu-id');
        // $(this).parents('.col-1').next('.menu-pic').find('img')[0].src = img;
    });


    $(".submenu >.col-1>ul li, .roma-header .submenu ul li").hoverIntent(function () {
            $(this).parent("ul").find('.active').removeClass('active');

            if ($(this).children('ul').size()) {
                $(this).addClass("active");


            }


//        $(this).children("li").find("a").removeClass("active");
        },
        function () {

//                $(this).children("li").find("a").removeClass("navActive2");
        });


    $('nav ul li').hover(function () {
            $('.div-overlay').addClass('active');
        },
        function () {
            $('.div-overlay').removeClass('active');
        });

});

$(window).resize(function () {
    bindMenuHover();

});