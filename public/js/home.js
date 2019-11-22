$("#content-slider").lightSlider({
    loop:true,
    keyPress:true,
    auto:true
});

function add_list(){
    var ul = document.getElementById("fp-nav").childNodes;
    var liNodes = [];
    console.log(ul[0].childNodes.length);
    list_class = ["page1 nav-item","page2 nav-item","page3 nav-item","page4 nav-item","page5 nav-item"];

    ul[0].className='list_number'

    for (var i = 0; i < ul[0].childNodes.length; i++) {
        if (ul[0].childNodes[i].nodeName == "LI") {
            ul[0].childNodes[i].className = list_class[i];
            // $('.'+list_class[i]).html(i+1);
             $('.'+list_class[i]).attr('id', 'page'+(i+1));
            ul[0].childNodes[i].childNodes[0].text = i +1
            //console.log(ul[0].childNodes[i].childNodes[0].text = i +1);
        }
    }
}


$('[id^=li]').hover(function () {
    //console.log(this.id);
    if(this.id == 'li-fourth'){
        $("#li-fourth").css("background-color", "#3D7EC1");
    }else{
        $("#li-fourth").css("background-color", "#153486");
    }

});

function count(){
    $('.count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 7000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
}

count();




function onScrollCheck(element, animation, option=null){
    $(element).each(function() {
        if (isScrolledIntoView(this) == true) {
            //check_out_first(element);
            if(option){
                $(this).addClass(animation);
            }else{
                $(this).addClass('animated '+animation);
            }
        }
    });
}


function onScrollCheckDiv(element, array_div, array_animation, option=null){
    $(element).each(function() {
        if (isScrolledIntoView(element) == true) {
            /**--  start --**/
            /**--for --**/
            for (var i = 0, len = array_div.length; i < len; i++) {
                if(option){
                    if($(array_div[i]).hasClass(array_animation[i])){
                        checkscroll(element);i=i+array_div.length;
                    }else{
                        $(array_div[i]).addClass(array_animation[i]);

                    }
                }else{
                    $(array_div[i]).addClass('animated '+array_animation[i]);
                }
            }
            /**-- end:for --**/
            /**-- end --**/
        }
    });
}

function replace(array_div, array_animation, array_replacer){
    if(array_animation.length != array_replacer.length){
        console.log('panjang animasi dan replacer tidak sama| animasi:'+array_animation+' replacer:'+array_replacer);
    }else{
        /** -- if array animation same length as array replacer **/
        for (var i = 0, len = array_div.length; i < len; i++) {
            $(array_div[i]).removeClass(array_animation[i]);
            $(array_div[i]).addClass(array_replacer[i]);
        }
        /** end **/
    }
}


function addAnimation(array_div, array_animation){
    for (var i = 0, len = array_div.length; i < len; i++) {
        $(array_div[i]).addClass('animated '+array_animation[i]);
    }
}


var now_element = '.menu_header';


function show(){
    $('.stick_scroll_down').show();
    $('.stick_scroll_up').hide();
    $('#stick_p').html('Scroll Down');
}

$(".stick_footer").click(function(){
    console.log(now_element);
    if(now_element == '.menu_header' ){
        show();
        $('html, body').animate({
            scrollTop: $(".service_div").offset().top
        }, 2000);
        now_element='.service_div';

    }else if(now_element =='.service_div'){
        show();
        $('html, body').animate({
            scrollTop: $(".equipment").offset().top
        }, 2000);
        now_element='.equipment';
    }else if(now_element =='.equipment'){
        show();
        $('html, body').animate({
            scrollTop: $(".our_lattest_update").offset().top
        });
        now_element='.our_lattest_update';
    }else if(now_element =='.our_lattest_update'){

        $('html, body').animate({
            scrollTop: $(".statistic").offset().top
        });
        $('.stick_scroll_down').hide();
        $('.stick_scroll_up').show();
        $('#stick_p').html('Scroll Up');
        now_element='.statistic';
    }else{
        if(now_element == '.statistic'){
            now_element='.menu_header';
            show();
            $('html, body').animate({
                scrollTop: $(".menu_header").offset().top
            });

        }
    }
}); var now_element = '.menu_header';
$('.stick_scroll_up').hide();

function show(){
    $('.stick_scroll_down').show();
    $('.stick_scroll_up').hide();
    $('#stick_p').html('Scroll Down');
}

$(".stick_footer").click(function(){
    console.log(now_element);
    if(now_element == '.menu_header' ){
        show();
        $('html, body').animate({
            scrollTop: $(".service_div").offset().top
        }, 2000);
        now_element='.service_div';

    }else if(now_element =='.service_div'){
        show();
        $('html, body').animate({
            scrollTop: $(".equipment").offset().top
        }, 2000);
        now_element='.equipment';
    }else if(now_element =='.equipment'){
        show();
        $('html, body').animate({
            scrollTop: $(".our_lattest_update").offset().top
        });
        now_element='.our_lattest_update';
    }else if(now_element =='.our_lattest_update'){

        $('html, body').animate({
            scrollTop: $(".statistic").offset().top
        });
        $('.stick_scroll_down').hide();
        $('.stick_scroll_up').show();
        $('#stick_p').html('Scroll Up');
        now_element='.statistic';
    }else{
        if(now_element == '.statistic'){
            now_element='.menu_header';
            show();
            $('html, body').animate({
                scrollTop: $(".menu_header").offset().top
            });

        }
    }
});