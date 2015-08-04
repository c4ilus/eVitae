$(document).ready(function()
{
    // ------- Accordion -------------------------------------------------------
    $('h2').click(function()
    {
        $('h2').removeClass('current');
        $('.conteneur').slideUp('normal');

        if($(this).next().is(':hidden') == true)
        {
            $(this).addClass('current');
            $(this).next().slideDown('normal');
	      }
    });
    $('.conteneur').hide();

    // ----- Transitions entre les pages ---------------------------------------
    $("body").css("display", "none");

    $("body").fadeIn(1000);

    $("a.transition").click(function(event){
	event.preventDefault();
	linkLocation = this.href;
	$("body").fadeOut(1000, redirectPage);
    });

    function redirectPage() {
	window.location = linkLocation;
    }

    // ----- Notification accueil ----------------------------------------------
    $(".notification-accueil").delay(8000).fadeOut(1000);
    $(".close").click(function(){
      $(".notification-accueil").hide();
    });

    // ----- Validation formulaire de contact ----------------------------------
    $("#contact-form").validationEngine();
    $(".notification-mail-envoye").delay(5000).fadeOut(1000);

});

// ------- Retour haut de page -------------------------------------------------

$(window).scroll(function() {
    if($(window).scrollTop() == 0){
        $('.retourhaut').fadeOut("fast");
    }else{
        if($('.retourhaut').length == 0){
            $('body').append('<div class="retourhaut"><a href="#">Haut de page</a></div>');
        }
        $('.retourhaut').fadeIn("fast");
    }
});

$('.retourhaut a').live('click', function(event){
    event.preventDefault();
    $('html,body').animate({scrollTop: 0}, 'slow');
});


