$(document).ready(function()
{
    var menu = $('.lexique-menu');
    menu.css({'position': 'absolute'});

    var currenttoppadding = menu.offset().top;
    var left_point = $('.left').offset().left;
    var newpaddingtop = 20;
    var top = currenttoppadding - newpaddingtop;
    var isFixed = (menu.css('position') == 'fixed');

    $(window).scroll(function () {
        if ($(window).scrollTop() > top) {
            if ($.browser.msie && $.browser.version == "6.0") {
                menu.css('top', $(window).scrollTop() + newpaddingtop);
            } else if (!isFixed) {
                menu.css({left: left_point,top: newpaddingtop,position: 'fixed'});
        	      isFixed = true;
            }
        } else {
            if (isFixed) {
                menu.css({position: 'absolute',top: currenttoppadding,left: ''});
                isFixed = false;
            }
        }
    });

    // ---- SmoothScroll -------------------------------------------------------
    function SmoothScroll(element){
        $(element).click(function(){
            var goscroll = false;
            var the_hash = $(this).attr("href");
            var regex = new RegExp("\#(.*)","gi");
            if(the_hash.match("\#")) {
                the_hash = the_hash.replace(regex,"$1");
                if($("a[name=" + the_hash + "]").length>0) {
                    the_element = "a[name=" + the_hash + "]";
                    goscroll = true;
                }
                if(goscroll) {
                    $('html, body').animate({
                        scrollTop:$(the_element).offset().top
                    }, 'slow');
                    return false;
                }
            }
        });
    };
    SmoothScroll('a[href^="#"]');
});
