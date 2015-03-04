

/***************************************************
prettyPhoto
***************************************************/

jQuery(document).ready(function () {
    jQuery("a[rel^='prettyPhoto']").prettyPhoto({ 
	animation_speed: 'normal', 
	theme: 'light_square', 
	slideshow: 3000, 
	autoplay_slideshow: false, 
	social_tools: false 
	});

});

/***************************************************
responsive menu
***************************************************/

jQuery(function (jQuery) {

    jQuery("#main-nav").append("<div class='pull-right menu-responsive'><i class='fa fa-bars'></i><ul class='responsive dropdown-menu'></ul></div>");

    jQuery("#main-nav .responsive-visible").each(function(){
        var el = jQuery(this);
        var prefix = '';
        switch (el.parents().length) {
            case (11):
                prefix = '-';
                break;
            case (13):
                prefix = '--';
                break;
            default:
                prefix = '';
                break
        }
        jQuery("<li></li>", {
            html: "<a href='"+el.attr("href")+"'>"+prefix + el.text()+"</a>"
        }).appendTo("#main-nav div .responsive");
    });

    jQuery(".menu-responsive").click(function(){
        jQuery(this).toggleClass('active');
        jQuery(".responsive").toggle();
    });
});



