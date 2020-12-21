var SiteURL = "//www.kerhoteles.com.ar";
jQuery(document).ready(function() {
	jQuery('.input-daterange i').click(function(){ jQuery(this).parent().find('input').focus(); });
	var slocation = location.href.replace("https:", "").replace("http:", "");
	slocation = slocation.replace(SiteURL, "").substr(0,4);
    if(slocation == '/en/'){
		jQuery("#language-switcher").val("EN");
	}else if(slocation == '/pt/'){
		jQuery("#language-switcher").val("PT");
	}
	
	jQuery("#language-switcher").change(function(e) {
		var slocation = location.href.replace("https:", "").replace("http:", "");
		slocation = slocation.replace(SiteURL, "").replace("/en/", "/").replace("/pt/", "/");
		switch(jQuery(this).val()){
			case "ES":
				top.location = SiteURL+slocation;
			break;
			case "EN":
				top.location = SiteURL+'/en'+slocation;
			break;
			case "PT":
				top.location = SiteURL+'/pt'+slocation;
			break;
		}
    });
	
    "use strict";
	window.win_width  = jQuery(window).width(),
	window.win_height = jQuery(window).height(),

    jQuery.parallax_func = function() {
        null == isMobile.any() && (jQuery("[data-background='parallax']").css("background-attachment", "fixed"),
        	jQuery("[data-background='parallax']").each(function() {
            var a = jQuery(this);
            a.appear(function() {
                var b = a;
                b.parallax("50%", .1)
            })
        }))
    },

    jQuery.smoothLoad = function() {
        jQuery("[data-animation]").each(function() {
            var a = jQuery(this);
            a.addClass("appear-animation"),
            jQuery(window).width() > 767 ? a.appear(function() {
                var b = a.attr("data-animation-delay") ? a.attr("data-animation-delay") : "";
                b && a.css("animation-delay", b + "s"), a.addClass(a.attr("data-animation")), setTimeout(function() {
                    a.addClass("appear-animation-visible")
                }, b)
            }, {
                accX: 0,
                accY: -150
            }) : a.addClass("appear-animation-visible")
        })
    },

    jQuery.height_100 = function() {
        var a = 900;
        a >= win_height && jQuery("#slider .items").height(win_height),
        win_height > a && (jQuery("#slider .items").height(a),
        jQuery("#main-menu, #active-menu-sheild").height(win_height))
    },

    jQuery.run_chosen = function() {
        jQuery("select:not(.rate-items)").chosen({
            disable_search_threshold: 10,
            no_results_text: "Oops, nothing found!"
        })
    },

    jQuery.mobile_menu_height = function() {
        var a = jQuery("#main-header").height() + jQuery('#main-header-top').height();
        jQuery(window).scrollTop() > 122 ?  a = 60 : a = 122;
        jQuery("#main-menu").height(win_height - a);
    },

    jQuery.mobile_menu_active = function() {
        var a = jQuery("body").css("direction");
        var b = ("rtl" == a) ? "left" : "right";
        jQuery("#main-menu-handle").click(function() {
            jQuery(this).hasClass("active") ? (jQuery(this).removeClass("active"), jQuery("#main-menu").css(b, "-180px")) : (jQuery(this).addClass("active"), jQuery("#main-menu").css(b, "0"))
        })
    },

    jQuery.chosen_drop_down = function(){
        jQuery('.chosen-container:not(#event-booking-form .chosen-container)').each(function(){
            var a = ( window.win_height - jQuery(this).offset().top) + jQuery(window).scrollTop();
            (a < 240 ) ? jQuery(this).addClass('top-dropdown') : jQuery(this).removeClass('top-dropdown');
        })
    },

    //jQuery.height_100(),
    jQuery.run_chosen(),
    jQuery.smoothLoad(),
    jQuery.parallax_func(),
    jQuery.mobile_menu_active(),

    992 >= win_width && jQuery.mobile_menu_height(),

    jQuery( document ).ajaxComplete(function() {
        jQuery.run_chosen();
    }),

    jQuery(window).scroll(function() {
        jQuery(document).scrollTop() > 122 && (jQuery("#main-header, #main-header-top").addClass("sticky"),

        992 >= win_width && jQuery.mobile_menu_height()),

        jQuery(document).scrollTop() < 72 && (jQuery("#main-header, #main-header-top").removeClass("sticky"),

        992 >= win_width && jQuery.mobile_menu_height()), jQuery.parallax_func(),

        jQuery.chosen_drop_down()
    }),
    jQuery(window).resize(function() {
        var window_width = jQuery(window).width();

        992 >= window_width && jQuery.mobile_menu_height()
    })
}),

jQuery(window).load(function() {
    "use strict";
    jQuery.chosen_drop_down()
});