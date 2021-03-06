function days_between(date1, date2) {

    var date1 = new Date(date1);
    var date2 = new Date(date2);

    var ONE_DAY = 1000 * 60 * 60 * 24

    var date1_ms = date1.getTime()
    var date2_ms = date2.getTime()

    var difference_ms = Math.abs(date1_ms - date2_ms)

    return Math.round(difference_ms / ONE_DAY)
}
jQuery(document).ready(function() {
    jQuery("#main-booking-form form.search-form").submit(function(event) {
        event.preventDefault();
        event.stopPropagation();

        
        var idioma = 'EN_EN';
        var BookingURL = 'https://reservations.travelclick.com';
        
        var CIN = jQuery("#main-booking-form form.search-form input.check-in").val();
        var COUT = jQuery("#main-booking-form form.search-form input.check-out").val();
        var Noches = days_between(CIN, COUT);

         function checkMaintenanceDays() {
            var dateFrom = "12-16-2019";
            var dateTo = "12-20-2019";
            var dateCheckFrom = CIN;
            var dateCheckTo = COUT;

            var d1 = dateFrom.split("-");
            var d2 = dateTo.split("-");
            var c1 = dateCheckFrom.split("-");
            var c2 = dateCheckTo.split("-");

            var from = new Date(d1[2], parseInt(d1[1]) - 1, d1[0]); // -1 because months are from 0 to 11
            var to = new Date(d2[2], parseInt(d2[1]) - 1, d2[0]);
            var checkFrom = new Date(c1[2], parseInt(c1[1]) - 1, c1[0]);
            var checkTo = new Date(c2[2], parseInt(c2[1]) - 1, c2[0]);

             var popup = '<div id="maintenance-popup" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: 999999; background: rgba(0,0,0,.9); text-align: center; display: none; justify-content: center; align-items: center; flex-direction: column;"><img style="width:100%; max-width: 800px; margin-bottom: 15px;" src="//recoleta.kerhoteles.com.ar/img/KER_ARMONIA_SPA_AVISO_ingles.jpg"/><a href="#" style="width: 200px; height: 40px; background: #21352a; color: #fff; text-transform: uppercase; line-height: 40px; text-decoration: none;">I agree</a></div>'   

            jQuery('body').append(popup);
            
            jQuery("body").find('#maintenance-popup a').click(function(){
                jQuery("#maintenance-popup").remove();
                window.open(BookingURL + "/73729?languageId=" + idioma + "&dateIn=" + CIN + "&dateOut=" + COUT);
                 maintenance = false;
            })

            if ((from <= checkTo) && (checkFrom <= to)){
              jQuery("body").find('#maintenance-popup').css('display', 'flex')
              maintenance = true;
              return false;  
            } 
            if ((dateCheckFrom >= from) && (dateCheckFrom <= to)) {
                jQuery("body").find('#maintenance-popup').css('display', 'flex')
                maintenance = true;
                return false;
            }
            if ((dateCheckTo >= from) && (dateCheckTo <= to)) {
                jQuery("body").find('#maintenance-popup').css('display', 'flex')
                maintenance = true;
              return false;
            }
        }

        checkMaintenanceDays()

        CIN = CIN.replace(/\-/g, '%2F');
        COUT = COUT.replace(/\-/g, '%2F');

        if(!maintenance) window.open(BookingURL + "/73729?languageId=" + idioma + "&dateIn=" + CIN + "&dateOut=" + COUT);
    });

    "use strict";
    var a = jQuery("body").css("direction");
    // It's just for Demo Section (Style Selector)
    jQuery("#style-selector-handle").click(function() {
            var b = ("rtl" == a) ? "right" : "left";
            jQuery(this).hasClass("active") ? (jQuery("#style-selector").css(b, "-165px"), jQuery(this).removeClass("active")) : (jQuery("#style-selector").css(b, "0"), jQuery(this).addClass("active"))
        }),

        jQuery('#layout-selector').change(function() {
            var a = jQuery('#style-selector-box .pattern-selector');
            jQuery(this).val() == 2 ? (jQuery('body').addClass('boxed'), a.slideDown()) : (jQuery('body').removeClass('boxed'), a.slideUp());
            jQuery('#slider .bx-viewport').css('height', jQuery('#slider .active-slide img').height());
        }),

        jQuery('[id*=pattern_]').click(function() {
            var a = jQuery(this).css('background-image');
            jQuery('body').css({ 'background-image': a });
            jQuery('[id*=pattern_]').removeClass('selected');
            jQuery(this).addClass('selected');
        });

    jQuery("#style-selector-box [class*=preset_]").click(function() {
        var b = jQuery(this).attr("data-preset-name");
        jQuery("#main-style-file-css").attr("href");
        var d = jQuery("#style-selector-box .selected[class*=preset_]").attr("data-preset-name");
        if ("0" === b) {
            if ("rtl" == a) var e = jQuery("#main-style-file-css").attr("href").replace("styles-rtl_" + d, "styles-rtl");
            else var e = jQuery("#main-style-file-css").attr("href").replace("styles_" + d, "styles");
            jQuery("#main-style-file-css").attr("href", e)
        } else {
            if ("0" === d)
                if ("rtl" == a) var e = jQuery("#main-style-file-css").attr("href").replace("styles-rtl", "styles-rtl_" + b);
                else var e = jQuery("#main-style-file-css").attr("href").replace("styles", "styles_" + b);
            else if ("rtl" == a) var e = jQuery("#main-style-file-css").attr("href").replace("styles-rtl_" + d, "styles-rtl_" + b);
            else var e = jQuery("#main-style-file-css").attr("href").replace("styles_" + d, "styles_" + b);
            jQuery("#main-style-file-css").attr("href", e)
        }
        jQuery("#style-selector-box [class*=preset_]").removeClass("selected"), jQuery(this).addClass("selected")
    })
    // End of Style Selector codes
});