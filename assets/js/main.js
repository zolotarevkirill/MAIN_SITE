var logo = 'down';
jQuery(document).ready(function ($) {
    // browser window scroll (in pixels) after which the "back to top" link is shown
    var offset = 300,
            //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
            offset_opacity = 1200,
            //duration of the top scrolling animation (in ms)
            scroll_top_duration = 700,
            //grab the "back to top" link
            $back_to_top = $('.cd-top');
            $('a.smooth').click(function(){
                $('html, body').animate({
                    scrollTop: $( $.attr(this, 'href') ).offset().top}, 1000);
                return false;
            });
    //hide or show the "back to top" link
    $(window).scroll(function () {
        ($(this).scrollTop() > offset) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
        if ($(this).scrollTop() > offset_opacity) {
            $back_to_top.addClass('cd-fade-out');
        }
        // var scroll_r = $(this).scrollTop();
        // var parallaxFix = $('.inner.with-top-padding.content');
        // parallaxFix.css('top', (- scroll_r * 0.95));
    });
    //smooth scroll to top
    $back_to_top.on('click', function (event) {
        event.preventDefault();
        $('body,html').animate({
            scrollTop: 0,
        }, scroll_top_duration
        );
    });
    /*var $threeSixty = $('.threesixty');
    $threeSixty.threeSixty({
        dragDirection: 'horizontal', // horizontal OR vertical
        useKeys: true, // true OR false
        draggable: true // true OR false
    });*/
    
    
    
    //*****Калькулятор карточки дома***//
    
    
});
/*function send() {
    var form = $('[data-form="send"]');
    form.ajaxForm(function () {
        $('#formAdvice').modal('hide');
        $('#call').modal('hide');
        $('#formAdviceItem').modal('hide');
        $('#thx').modal('show');
        $(form).clearForm();
        console.log('send funciton');
    });
}*/
$(document).ready(function () {
    $('#send_series').click(function () {
        var p = parseInt($(this).val());
        yaCounter937330.reachGoal('SEND_REQUEST', {price: p});

        


        //return true;
    });
    $('#send_item').click(function () {
        var p = parseInt($(this).val());
        yaCounter937330.reachGoal('ORDER_ITEM', {price: p});
        //return true;
    });



    /*Countdown main.page*/

    var endDate = "April 03, 2016 20:00:00";
    $('.countdown').countdown({
      date: endDate,
      render: function(data,secondsTitle) {
        function loopSec(){
            var secondsTitle = 'секунд';
            switch(data.sec) {
                case 1:
                case 21:
                case 31:
                case 41:
                case 51: 
                secondsTitle = 'секунда';
                break;
                case 2:
                case 22:
                case 23:
                case 24:
                case 32:
                case 33:
                case 34:
                case 42:
                case 43:
                case 44:
                case 52:
                case 53:
                case 54:
                secondsTitle = 'секунды';
                break;
                default:
                secondsTitle = 'секунд';
            }
            return secondsTitle;
        };
        function loopMin(){
            var secondsTitle = 'минут';
            switch(data.min) {
                case 1:
                case 21:
                case 31:
                case 41:
                case 51: 
                secondsTitle = 'минута';
                break;
                case 2:
                case 22:
                case 23:
                case 24:
                case 32:
                case 33:
                case 34:
                case 42:
                case 43:
                case 44:
                case 52:
                case 53:
                case 54:
                secondsTitle = 'минуты';
                break;
                default:
                secondsTitle = 'минут';
            }
            return secondsTitle;
        };
        function loopHour(){
            var secondsTitle = 'часов';
            switch(data.hours + data.days * 24) {
                case 1:
                case 21:
                case 31:
                case 41:
                case 51: 
                secondsTitle = 'час';
                break;
                case 49: 
                secondsTitle = 'часов';
                break;
                case 2:
                case 22:
                case 23:
                case 24:
                case 32:
                case 33:
                case 34:
                case 42:
                case 43:
                case 44:
                case 52:
                case 53:
                case 54:
                secondsTitle = 'часа';
                break;
                default:
                secondsTitle = 'часов';
            }
            return secondsTitle;
        };
        loopHour();
        loopMin();
        loopSec();
        $(this.el).html("<div><span class='time-count'>" + this.leadingZeros(data.hours + data.days * 24) + "</span><span class='time-desc'>" + loopHour() + "</span></div><div><span class='time-count'>" + this.leadingZeros(data.min, 2) + "</span><span class='time-desc'>" + loopMin() + "</span></div><div><span class='time-count'>" + this.leadingZeros(data.sec, 2) + "</span><span class='time-desc'>"+ loopSec() +"</span></div>");
    }
});
    /*Countdown END*/
   /* var form = $('[data-form="send"]');
    form.ajaxForm(function () {
        $(form).clearForm();
        $('#formAdvice').modal('hide');
        $('#call').modal('hide');
        $('#formAdviceItem').modal('hide');
        $('#thx').modal('show');
        console.log('passed initialized');
    });*/
    /*$(form).on('submit', function (e) {
        if ($(this).hasClass('disabled')) {
            // handle the invalid form...
            e.preventDefault();
        } else {
            // everything looks good!
            console.log(this);
            $('#formAdvice').modal('hide');
            $('#call').modal('hide');
            $('#formAdviceItem').modal('hide');
            $('#thx').modal('show');
            send();
        }
    });*/
    /*$('[data-item="phone"]').mask("8 (999) 999-99-99");
    $('[data-item="shown-item"]').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var recipient = button.data('whatever');
        var price = button.data('price');
        var code = button.data('code');
        var modal = $(this);
        modal.find('.modal-body .recipient-name').val(recipient);
        modal.find('.modal-body button[type=submit]').val(price);
        modal.find('.modal-body #codeval').val(code);
    });*/
    /*credit form*/

    /*credit form END*/

    // function fadeIn() {
    // 	var banner = $('a[data-item="fadeOut"]');
    // 	banner
    // 		.transition({ y: 0 });
    // }
    // function fadeOut() {
    // 	var banner = $('a[data-item="fadeOut"]');
    // 	banner
    // 		.transition({ y: '105%' });
    // }
    // setTimeout(fadeIn, 1000);
    // setTimeout(fadeOut, 60000);
    /*fancybox*/
    /*$(".fancybox").fancybox();*/
    /*fancybox END*/
    $('.starlight-trigger').find('button').on('click',function(e){
        $(this).toggleClass('on off');
        $('.start-show').toggleClass('pointer-disable');
        $('.start-show').find('.starlight').toggleClass('hidden');
    });
    $('.starlight-trigger').toggle(function() {
        console.log('on');
        $('.space-text').html('<h4>C днём<br>космонавтики!</h4>');
    }, function() {
         console.log('off');
        $('.space-text').html('<h4>ДОМ, который<br>нужен мне</h4>');
    });








    $(".header input").focusin(function () {
        $(this).addClass('focusIn');
        $('.header button[type="submit"]').addClass('focusIn');
    });
    $(".header input").focusout(function () {
        $(this).removeClass('focusIn');
        $('.header button[type="submit"]').removeClass('focusIn');
    });
    /*width dropdown*/
    /*slim scroll*/
    // $('[data-item="scroll-bar"]').slimScroll({
    // 	position: 'right',
    // 	height: '200px'
    // });
    /*slim scroll END*/
    /*change img*/
    $('[data-item="chose-img"] img').on('click', function (e) {
        var $that = $(this).data('src');
        console.log($that);
        var $myTarget = $('[data-item="target"]');
        var $swap = $myTarget.attr('src', $that);

    });
    /*change img END*/
    $('[data-item="calc"] .checkbox input').change(function (e) {
        var chek = $(this).prop('checked');
        var sum = parseInt($('#allsum').attr('data-item-total'));
        var chek_val = parseInt($(this).val());
        var chek_id = $(this).attr('id');
        var chek_text = $('label[for=' + chek_id + ']').text();
        var calc = 0;
        var calc_dop = 0;
        var dop = parseInt($('#sumdop').text());

        if (chek == true) {

            calc_dop = parseInt($('#sumdop').text()) + chek_val;
            $('#sumdop').text(calc_dop);



            calc = sum + chek_val;
            $('#allsum').attr('data-item-total', calc);
            $('#allsum').text(calc);
            $('#list_bar_calc').append('<li data-val="' + chek_text + '"><p>' + chek_text + '</p></li>');
        } else {

            calc_dop = parseInt($('#sumdop').text()) - chek_val;
            $('#sumdop').text(calc_dop);

            calc = sum - chek_val;
            $('#allsum').attr('data-item-total', calc);
            $('#allsum').text(calc);
            $('li[data-val="' + chek_text + '"]').remove();
        }



    });



    /*at 112 line we use function change on select*/
    $('[data-item="select"]').change(function () {
        //call select function which we made toggle active
        select_changed();
    });

    function select_changed() {
        //get all items for toggle
        $('.currently').each(function () {
            $(this).removeClass('active');
        });
        //get all options
        $('[data-item="select"]').each(function () {
            //get val of selected option
            var $selected = $(this).val();
            //set active to target in data-item="form-1" to form-5
            $('[data-item="form-' + $selected + '"]').addClass('active');
            //condition which made if val equival to 5 we show all
            if ($selected == 5) {
                $('.currently').addClass('active');
            }
            //rolling back
            return true;
        });
    }
    ;
    $('[data-item="show-case"]').click(function () {
        $(this).toggleClass('slide-left');
        $('.dostroy-what-we-do .item-2').toggleClass('slide-left');
        $('.dostroy-what-we-do .inner').removeClass('slide-right');
        $('.dostroy-what-we-do .item-2 .hiddenEl').removeClass('slide-right');
        $('.dostroy-what-we-do .item-2 img').removeClass('slide-right');
    });
    $('[data-item="inner-1"]').click(function () {
        $('.dostroy-what-we-do .inner').addClass('slide-right');
        if ($('.dostroy-what-we-do .item-2 .hiddenEl').hasClass('slide-right')) {
        }
        else {
            $('.dostroy-what-we-do .item-2 .hiddenEl.item-11').addClass('slide-right');
            $('.dostroy-what-we-do .item-2 img').addClass('slide-right');
        }
    });

    $('[data-item="inner-2"]').click(function () {
        $('.dostroy-what-we-do .inner').addClass('slide-right');
        if ($('.dostroy-what-we-do .item-2 .hiddenEl').hasClass('slide-right')) {
        }
        else {
            $('.dostroy-what-we-do .item-2 .hiddenEl.item-21').addClass('slide-right');
            $('.dostroy-what-we-do .item-2 img').addClass('slide-right');
        }
    });
    $('[data-item="inner-3"]').click(function () {
        $('.dostroy-what-we-do .inner').addClass('slide-right');
        if ($('.dostroy-what-we-do .item-2 .hiddenEl').hasClass('slide-right')) {
        }
        else {
            $('.dostroy-what-we-do .item-2 .hiddenEl.item-31').addClass('slide-right');
            $('.dostroy-what-we-do .item-2 img').addClass('slide-right');
        }
    });
    $('[data-item="inner-4"]').click(function () {
        $('.dostroy-what-we-do .inner').addClass('slide-right');
        if ($('.dostroy-what-we-do .item-2 .hiddenEl').hasClass('slide-right')) {
        }
        else {
            $('.dostroy-what-we-do .item-2 .hiddenEl.item-41').addClass('slide-right');
            $('.dostroy-what-we-do .item-2 img').addClass('slide-right');
        }
    });
    $('[data-item="inner-5"]').click(function () {
        $('.dostroy-what-we-do .inner').addClass('slide-right');
        if ($('.dostroy-what-we-do .item-2 .hiddenEl').hasClass('slide-right')) {
        }
        else {
            $('.dostroy-what-we-do .item-2 .hiddenEl.item-51').addClass('slide-right');
            $('.dostroy-what-we-do .item-2 img').addClass('slide-right');
        }
    });
    $('[data-item="inner-6"]').click(function () {
        $('.dostroy-what-we-do .inner').addClass('slide-right');
        if ($('.dostroy-what-we-do .item-2 .hiddenEl').hasClass('slide-right')) {
        }
        else {
            $('.dostroy-what-we-do .item-2 .hiddenEl.item-61').addClass('slide-right');
            $('.dostroy-what-we-do .item-2 img').addClass('slide-right');
        }
    });
    $('[data-item="inner-7"]').click(function () {
        $('.dostroy-what-we-do .inner').addClass('slide-right');
        if ($('.dostroy-what-we-do .item-2 .hiddenEl').hasClass('slide-right')) {
        }
        else {
            $('.dostroy-what-we-do .item-2 .hiddenEl.item-71').addClass('slide-right');
            $('.dostroy-what-we-do .item-2 img').addClass('slide-right');
        }
    });


    $('.dostroy-what-we-do .close-btn').click(function () {
        $('.dostroy-what-we-do .inner').removeClass('slide-right');
        $('.dostroy-what-we-do .item-2 .hiddenEl').removeClass('slide-right');
        $('.dostroy-what-we-do .item-2 img').removeClass('slide-right');


    });
    var obj;
    $('.header .has-inner-menu > a').hover(function () {
        var status = $(this).attr('class');
        if (status != 'test') {
            var maxWidth = 0;
            var width = 0;
            var obj = $(this);
            var countli = $(this).parent().find('.dropdown-menu li').length;
            $(this).parent().find('.dropdown-menu li').each(function (i) {
                //add width
                width = this.offsetWidth;
                if (maxWidth < width) {
                    maxWidth = width;
                } else {
                    if ((countli - 1) == i && maxWidth != 0 && i != 0) {
                        var max = 0;
                        var max = maxWidth;
                        add_width(max, obj);
                    }
                }
            });
        }
    });
});

function add_width(max, obj) {
    obj.addClass('test');
    obj.parent().find('.dropdown-menu').css('width', max);
}

$(document).ready(function () {
    $('.vocabulary-menu a').click(function (e) {
        e.preventDefault();
        var that = $(this).attr('data-choice');

        $('.vocabulary-menu a').removeClass('active');
        $('.vocabulary-list .output').removeClass('active');

        $(this).addClass('active');
        $("#" + that).addClass('active');
    });
    /*comunications*/
    var $targetForm = $('.form-credit');
    $targetForm.find('input[type=text], input[type=tel], input[type=email]').attr('disabled', true);
    $('input[type="checkbox"]').click(function () {
        var $c1 = $('#checkbox1');
        var $c2 = $('#checkbox2');


        if ($c1.is(':checked')) {
            $targetForm.find('input[type=text], input[type=tel], input[type=email]').attr('disabled', false);
            $targetForm.find('[data-item="cost-house"]').attr('disabled', true);
        }

        if ($c2.is(':checked')) {
            $targetForm.find('input[type=text], input[type=tel], input[type=email]').attr('disabled', false);
            $targetForm.find('[data-item="cost-house"]').attr('disabled', false);
            $targetForm.find('[data-item="cost-credit"], [data-item="period-credit"]').attr('disabled', true);
        }

        if ($c1.is(':checked') && $c2.is(':checked')) {
            $targetForm.find('input[type=text], input[type=tel], input[type=email]').attr('disabled', false);
        }

        if ($c1.is(':checked') == false && $c2.is(':checked') == false) {
            $targetForm.find('input[type=text], input[type=tel], input[type=email]').attr('disabled', true);
        }



        $('[data-item="checked-items"]').val('');



        var chek = document.getElementsByName('chk[]');

        var check_array = new Array();

        $('input:checkbox').each(function () {
            if ($(this).is(':checked')) {
                check_array.push($(this).val());
            }
        });





        for (i = 0; i < check_array.length; i++) {
            var check_all = $('[data-item="checked-items"]').val();
            if (i > 0) {
                $('[data-item="checked-items"]').val(check_all + ', ' + check_array[i]);
            } else {
                $('[data-item="checked-items"]').val(check_all + '' + check_array[i]);
            }

        }

        //console.log(check_array);
    });
    /*comunications END*/
});



$(document).ready(function () {
    $('.my-tab-list a').click(function (e) {
        e.preventDefault();
        var tab_id = $(this).attr('data-tab');
        $('.my-tab-list a').removeClass('active');
        $('[data-item="my-tab-btns"] > div').removeClass('active');
        $(this).addClass('active');
        $("#" + tab_id).addClass('active');
    });
    $('.my-tab-list a').click(function (e) {
        e.preventDefault();
        var tab_id = $(this).attr('data-tab');
        $('.my-tab-list a').removeClass('active');
        $('[data-item="my-tab-btns"] > div').removeClass('active');
        $(this).addClass('active');
        $("#" + tab_id).addClass('active');
    });
});

$(document).ready(function () {
    var that = $('.content.with-top-padding');
    var banner = $('body .my-item-slider .inner .baner .inner');
    var win = $(window).height() - (550 - 110 - 5);
    //var bannerOffset = $(window).height() * .1;
    var owlBack = $('[data-item="slider-back-side"]');
    var owlMain = $('[data-item="slider-item"]');
    var owlCatalog = $('[data-item="slider-item-catalog"]');

    var owlNewCatalog = $('[data-item="slider-item-new-catalog"]');
    that.css('margin-top', win);

    owlNewCatalog.owlCarousel({
        // responsive: {
        //     0: {
        //         autoWidth: true
        //     },
        //     1999: {
        //         autoWidth: false
        //     }
        // },
        stagePadding: 0,
        loop: false,
        margin: 0,
        nav: true,
        dots: false,
        items: 1,
        autoHeight: true,
        autoplay: false,
        navText: [
        "<i class='my-arrow-left'></i>",
        "<i class='my-arrow-right'></i>"
        ]
        //onResized: isAdaptive
    });

    // function isAdaptive() {
    //     console.log(1);
    //     owlNewCatalog.trigger('refresh.owl.carousel');
    // }


    owlCatalog.owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        dots: false,
        items: 1,
        autoplay: false,
        autoHeight: true,
        autoHeightClass: 'owl-height',
        navText: [
        "<i class='my-arrow-left'></i>",
        "<i class='my-arrow-right'></i>"
        ],
        dots: true,
    });
  

    owlCatalog.on('changed.owl.carousel', function (e) {
        var carrentSlide = e.page.index;
        $('.left-side-trigger').removeClass('active');
        $('.left-side-trigger').each(function (carrentTarget) {
            $(this).removeClass('state_0');
            $(this).removeClass('state_1');
            $(this).removeClass('state_2');
            $(this).addClass('state_' + carrentSlide);
        });
    });

    owlMain.on('initialized.owl.carousel', function (e) {
        var carrentSlide = e.page.index;
        $('.trigger').removeClass('active');
        $('.trigger').each(function (carrentTarget) {
            if (carrentSlide == carrentTarget) {
                $(this).addClass('active');
            }
        });
    });
    owlMain.owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        dots: false,
        items: 1,
        autoplay: false,
        navText: [
        "<i class='my-arrow-left'></i>",
        "<i class='my-arrow-right'></i>"
        ],
        dots: true,
    });

    owlBack.owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        dots: true,
        items: 1,
        navContainer: '.main-navigation',
        dotsContainer: '.main-dots',
        autoplayHoverPause: true,
        autoplay: false,
        navSpeed: 500,
        dotsSpeed: 500,
        dots: true,
    });

    owlMain.on('changed.owl.carousel', function (that) {
        var carrentSlide = that.page.index;
        $('.trigger').removeClass('active');
        $('.trigger').each(function (carrentTarget) {
            if (carrentSlide == carrentTarget) {
                $(this).addClass('active');
            }
        });
    });

    onStart();
});

$(window).scroll(function () {
    var scroll_r = $(this).scrollTop();
    var parallaxUp = $('[data-parallax="up"]');
    var parallaxFix = $('inner.with-top-padding.content');
    var parallaxDown = $('[data-parallax="down"]');
    var opacity = $('[data-opacity="true"]');
    var opacityMain = $('[data-opacity-main="true"]');
    var transform = scroll_r * .05;
    var options = (((($(window).height() - scroll_r) - $(window).height()) / 1000) + 0.5) < 0.2 ? 0.2 : (((($(window).height() - scroll_r) - $(window).height()) / 1000) + 0.5);
    //var options2 = (((($(window).height() - scroll_r) - $(window).height()) / 1000) + 0.5) < 0.2 ? 0.2 : (((($(window).height() - scroll_r) - $(window).height()) / 1000) + 0.5);
    var optionsMain = (((($(window).height() - scroll_r) - $(window).height()) / 1000) + 1) < 0.2 ? 0.2 : (((($(window).height() - scroll_r) - $(window).height()) / 1000) + 1);

    opacityMain.css('opacity', optionsMain);
    opacity.css('opacity', options);
    parallaxDown.css('top', (scroll_r * .08));

    menuTop();
    logos();
    bgUP();
    bgDown();
});

function opacityBg() {
    var parallaxUp = $('[data-parallax="up"]');
    var scroll_r = $(this).scrollTop();
    if ($(this).scrollTop() < 800) {
        parallaxUp.css('top', (scroll_r * .035));
    } else if ($(this).scrollTop() <= 800) {
        parallaxUp.css('top', (scroll_r * 0));
    }
}

function bgUP() {
    var parallaxUp = $('[data-parallax="up"]');
    var scroll_r = $(this).scrollTop();
    if ($(this).scrollTop() < 800) {
        parallaxUp.css('top', (scroll_r * .035));
    } else if ($(this).scrollTop() <= 800) {
        parallaxUp.css('top', (scroll_r * 0));
    }
}

function bgDown() {
    var parallaxDown = $('[data-parallax="down"]');
    var scroll_r = $(this).scrollTop();
    if ($(this).scrollTop() < 800) {
        parallaxDown.css('top', (scroll_r * .08));
    } else if ($(this).scrollTop() <= 800) {
        parallaxDown.css('top', (scroll_r * .08));
    }
}

function menuTop() {
    var pushLeft = $('[data-item="push-left"]');
    if ($(this).scrollTop() > 10) {
        $('[data-item="header"]').addClass('fix-header');
        $('[data-item="header"] .navbar-header .logo a').addClass('active');
        pushLeft.addClass('top-bar-left-offset');
        logo = 'down';
        logos();

    } else if ($(this).scrollTop() <= 10) {
        $('[data-item="header"]').removeClass('fix-header');
        $('[data-item="header"] .navbar-header .logo a').removeClass('active');
        pushLeft.removeClass('top-bar-left-offset');
        logo = 'up';
        logos();
    }
}

function onStart() {
    var scroll_r = $(this).scrollTop();
    var parallaxUp = $('[data-parallax="up"]');
    var parallaxDown = $('[data-parallax="down"]');
    var opacity = $('[data-opacity="true"]');
    var opacityMain = $('[data-opacity-main="true"]');
    var transform = scroll_r * .05;
    var winHeight = $(this).height();
    //var options = (((( winHeight - scroll_r) - winHeight) / 1000) + 1) < 0.3 ? 0.3 : ((((winHeight - scroll_r) - winHeight) / 1000) + 1);
    var options = ((((winHeight - scroll_r) - winHeight) / 1000) + 0.5) < 0.3 ? 0.3 : ((((winHeight - scroll_r) - winHeight) / 1000) + 0.5);
    var optionsMain = ((((winHeight - scroll_r) - winHeight) / 1000) + 1) < 0.3 ? 0.3 : ((((winHeight - scroll_r) - winHeight) / 1000) + 1);
    opacity.css('opacity', options);
    opacityMain.css('opacity', optionsMain);
    parallaxDown.css('top', (scroll_r * .08));
    menuTop();
    bgUP();
    bgDown();
    logos();
}

function logos() {
    if (logo == 'down') {
        $('.header .has-inner-menu .dropdown-menu').each(function (i) {
            var s = $(this).attr('class');
            var r = $(this).css('width');
            $(this).css('width', r);


            if (s == 'dropdown-menu up-logo' || s == 'dropdown-menu') {
                var w = $(this).css('width').substr(0, $(this).css('width').length - 2);
                $(this).css('width', parseInt(w) + 10);
                $(this).addClass('down-logo');
                $(this).removeClass('up-logo');
            }
        });


    } else {
        $('.header .has-inner-menu .dropdown-menu').each(function (i) {
            var s = $(this).attr('class');
            var r = $(this).css('width');
            $(this).css('width', r);



            if (s == 'dropdown-menu down-logo') {
                var w = $(this).css('width').substr(0, $(this).css('width').length - 2);
                $(this).css('width', parseInt(w) - 10);
                $(this).addClass('up-logo');
                $(this).removeClass('down-logo');
            }
        });

    }
}




