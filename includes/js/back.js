$(document).ready(function()
{
    // ------ Formulaire d'ajout -----------------------------------------------
    $('.add').click(function()
    {
        $('.add').removeClass('current');
        $('.add_form').slideUp('normal');

        if($(this).next().is(':hidden') == true)
        {
            $(this).addClass('current');
            $(this).next().slideDown('normal');
	      }
    });

    $('.add_form').hide();

    // ------ Formulaire d'edition ---------------------------------------------
    $('.btnedit').click(function()
    {
        $('.edit_form').slideUp('normal');

        if($(this).next().is(':hidden') == true)
        {
            $(this).next().slideDown('normal');
}
    });

    $('.edit_form').hide();

    // ----- Validation formulaire de contact ----------------------------------
    $(".notification").delay(3000).fadeOut(500);
    $("#edit_form").validationEngine();
    $("#add_form").validationEngine();
});

/* ----
tinyMCE.init({
		mode : "textareas",
		theme : "simple",
    width : "350"
	});
--- */
