$(document).ready(function () {
    $('input[placeholder], textarea[placeholder]').placeholder();

    //$("input[type='checkbox']").ionCheckRadio();


     $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        centerMode: false,
        vertical: true,
        focusOnSelect: true
    });

    cuSel({
        changedEl: "select",
        visRows: 6,
        scrollArrows: true
    });

    //TODO: Replace into dynamic part 
    $(function() {
        $( "#price-range" ).slider({
            range: true,
            min: 6200,
            max: 25200,
            values: [ 6200, 25200 ],
            slide: function( event, ui ) {
                $( ".range .from" ).text( ui.values[ 0 ] );
                $( ".range .to" ).text( ui.values[ 1 ] );
            }
        });


        $( ".range .from" ).text( $( "#price-range" ).slider( "values", 0 ) );
        $( ".range .to" ).text( $( "#price-range" ).slider( "values", 1 ) );
    });

    $('.tip').tipr();


    baron({
        root: '.col-scroll',
        scroller: '.baron__scroller',
        bar: '.baron__bar',
        scrollingCls: '_scrolling',
        draggingCls: '_dragging',
        barOnCls: '_scrollbar'
    });

    $('.top-slider').slick({
        dots: true,
        infinite: true,
        speed: 500,
        fade: true,
        arrows: false,
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 5000
    });

    $('.items-carousel').slick({
        slidesToShow: 5,
        slidesToScroll: 1
    });

    $('.ya-share2__list li').mousemove(function(event) {
        $('.ya-share2__list li').addClass('blur');
        $(this).removeClass('blur');
    });
    $('.ya-share2__list li').mouseleave(function(event) {
        $('.ya-share2__list li').removeClass('blur');
    });


    $('.menu').mousemove(function(event) {
        $(this).addClass('hovered');
        if($('.top-slider').length)
            $('.top-slider').slick('slickPause');

        var $overlay = $(".main-overlay");
        $overlay.css("height", $("body").outerHeight() - 30);
        $overlay.fadeIn(13);
    });
    $('.menu').mouseleave(function(event) {
        $(this).removeClass('hovered');
        if($('.top-slider').length)
            $('.top-slider').slick('slickPlay');

        var $overlay = $(".main-overlay");
        $overlay.fadeOut(13);
    });

    $('u.soc li').mousemove(function(event) {
        $(this).addClass('blur');
        $(this).parent().addClass('hovered');
    });
    
    
    $('u.soc li').mouseleave(function(event) {
        $(this).removeClass('blur');
        $(this).parent().removeClass('hovered');
    });


    $('ul.main-cat li').mousemove(function(event) {
        $(this).addClass('hovered');
    });
    $('ul.main-cat li').mouseleave(function(event) {
        $(this).removeClass('hovered');
    });


    fixMenuBar();
    fixTopBtn();
    $(window).on('scroll', function() {
        fixMenuBar();
        fixTopBtn();
    }); 


    $('.side-menu > ul > li').hover(function() {
        if( $(this).hasClass('current') ) return;

        $(this).addClass('active');
    }, function() {
        if( $(this).hasClass('current') ) return;
        
        $(this).removeClass('active');
    });


    $('.balls li').hover(function() {
        $('.img', this).stop().fadeIn(200);
        bgi = $(this).css('background-image');
        $(this).css('background-image', 'none');
    }, function() {
        $('.img', this).stop().fadeOut(100);
        $(this).css('background-image', bgi);
    });


    $('.popup').on('click', '.close', function(event) {
        event.preventDefault();
        
        closePop();
    });
    $(document).on("click", ".full-overlay", function() {
        closePop();
        closeAlert();
    });


    $('.tabs-h').on('click', function(event) {
        var $cont = $(this).parent(), 
            $i = $(this).index();

        $('.tabs-h.active', $cont).removeClass('active');
        $('.tabs-cont.active', $cont).removeClass('active');


        $(this).addClass('active');
        $('.tabs-cont:eq(' + $i + ')', $cont).addClass('active');
    });


    $('.tab-headers').on('click', '.tabs-h', function(event) {

        var $cont = $( event.delegateTarget ).parent(), 
            $i = $(this).index();

        $('.tabs-h.active', $cont).removeClass('active');
        $('.tabs-cont.active', $cont).removeClass('active');


        $(this).addClass('active');
        $('.tabs-cont:eq(' + $i + ')', $cont).addClass('active');
    });

    $('.toggle-link').on('click', function(event) {
        event.preventDefault();
        var that = $(this);
        var $obj = $($(this).data('block'));
        
        $obj.stop(true, true).fadeToggle('200');
        that.toggleClass('active');

        if(that.data('parent-class'))
            that.parent().toggleClass('active');

        $(document).mouseup(function (e){
            var div = $obj;

            if ( ! that.is(e.target)
                && ! div.is(e.target)
                && div.has(e.target).length === 0) {
                div.fadeOut(); 
                that.removeClass('active');

                if(that.data('parent-class'))
                    that.parent().removeClass('active');
            }
        });
    });


    $('.auth-btns').on('click', '.login', function(event) {
        event.preventDefault();
       
        var $cont = $('.popup-auth');

        $('.tabs-h.active', $cont).removeClass('active');
        $('.tabs-cont.active', $cont).removeClass('active');
        
        $('.tabs-h-log, .tabs-cont-log', $cont).addClass('active')
        showPop('popup-auth');
    });

    $('.auth-btns').on('click', '.register', function(event) {
        event.preventDefault();
       
        var $cont = $('.popup-auth');

        $('.tabs-h.active', $cont).removeClass('active');
        $('.tabs-cont.active', $cont).removeClass('active');
        
        $('.tabs-h-reg, .tabs-cont-reg', $cont).addClass('active')
        showPop('popup-auth');
    });


    $("#to-top").on('click', function(event) {
        event.preventDefault();

        $('html,body').animate({
            scrollTop: 0
        }, 600);
    });



    $("form .sub").click(function(event) {
        
        var form = $(this).parent();
        var phone = $('.phone', form).val();
        var name = $('.name', form).val();
        var mail = $('.mail', form).val();
        var msg = $('.msg', form).val();
        var theme = $('.theme', form).val();
        var cond = $('.cond', form).val();
        
        event.preventDefault();

        if( ! name || ! phone)
        {
            alert('Заполните поля "Ваше имя" и "Ваш телефон"');
            return false;
        }

        if( ! validate(phone, 'tel')) {
            $(".phone", form).css("border", "1px solid red");
            alert("Неправельный формат телефона");
            return false;
        }

        if( $(".mail", form).length && ! validate(mail, 'email')) {
            $(".mail", form).css("border", "1px solid red");
            alert("Неправельно введен e-mail");
            return false;
        }

        $.post(
            "ajax/ajax-order-tel.php",
            {
                name: name,
                phone: phone,
                mail: mail,
                cond: cond,
                theme: theme,
                msg: msg
            },
            function (data) {
                if(~data.indexOf("1")) {
                    $(".mail", form).css("border", form.data('border'));
                    $(".phone", form).css("border", form.data('border'));
                    
                    showAlert('alert-1');
                }
            }
        );
        
        return false;
    });
    
});

function fixMenuBar() {
    if($(window).scrollTop() > 168){
        if( ! $("body").hasClass('fixed-menu')) {
            $('.header-container-3').css({'top': -50}, {'position': 'fixed'});
            $('.header-container-3').animate({'top': "0"}, 600);
        }
        $("body").addClass('fixed-menu');
    }
    else
        $("body").removeClass('fixed-menu');
}

function fixTopBtn() {
    var fromTop = $(this).scrollTop();
    var $up = $("#to-top");
    
    if(fromTop > 600) 
        $up.fadeIn(200);
    else
        $up.fadeOut(200);
}


function showPop(className) {
    var $overlay = $(".full-overlay");
    sel = '';
    if(className) {
        var sel = className;
        sel = "." + sel; 
    }

    var $popup = $(".popup" + sel);

    function _calcPos() {
        var dH = $("body").height();
        var h = $popup.outerHeight();
        var wH = $(window).outerHeight();
        var top = (wH - h) / 2;
        if(top < 0 || className == 'popup-full-win') top = 0;
        $overlay.css("height", dH);
        $popup.css("top", top);
    }
    $overlay.fadeIn(400, function() {
        $popup.fadeIn(400, _calcPos);
        _calcPos();
    });
}

function showAlert(className) {
    var $overlay = $(".full-overlay");
    sel = '';

    if(className) {
        var sel = className;
        sel = "." + sel; 
    }

    var $alertPop = $(".alert" + sel);

    function _calcPos() {
        var dH = $("body").height();
        var h = $alertPop.outerHeight();
        var wH = $(window).height();
        var top = (wH - h) / 2;
        if(top < 0) top = 0;
        $overlay.css("height", dH);
        $alertPop.css("top", top);
    }

    if($overlay.css("display") != "block")
    {
        $overlay.fadeIn(400, function() {
            $alertPop.fadeIn(400, function () {
                _calcPos();
                setTimeout(closeAlert, 5000);
            });
            _calcPos();
        });
    }
    else
    {
        $(".popup").fadeOut(200, function() {
            $alertPop.fadeIn(400, function() {
                _calcPos();
                setTimeout(closeAlert, 5000);
            });
            _calcPos();
        });
    }
}

function closeAlert() {
    var $overlay = $(".full-overlay");
    var alertPop = $(".alert");

    alertPop.fadeOut(400, function() {
        $overlay.fadeOut(400);
    });
}

function closePop() {
    var $overlay = $(".full-overlay");
    var $popup = $(".popup");

    $popup.fadeOut(400, function() {
        $overlay.fadeOut(400);
    });
}

function validate(field, type) {
    var pp = '';
    if(type == 'login') {
        var pp = /^[a-zA-Z][a-zA-Z-\._]+[a-zA-Z0-9]$/;
    }
    if(type == 'en') {
        var pp = /^[a-zA-Z]*$/;
    }
    else if(type == 'en123') {
        var pp = /^[a-zA-Z0-9]*$/;
    }
    else if(type == 'email') {
        var pp = /^[-\._a-zA-Z0-9]+@(?:[a-zA-Z0-9][-a-zA-Z0-9]+\.)+[a-zA-Z]{2,6}$/;
    }
    else if(type == '123') {
        var pp = /^[0-9]*$/;
    }
    else if(type == 'index') {
        var pp = /^[0-9]{6}$/;
    }
    else if(type == 'tel') {
        var pp = /^([\+]+)*[0-9\x20\x28\x29\-]+$/;
    }
    else if(pp == '') {
        return false;
    }
    if (field === '') {
        return false;
    }
    else if(!field.match(pp)) {
        return false;
    }
    return true;
}

var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};