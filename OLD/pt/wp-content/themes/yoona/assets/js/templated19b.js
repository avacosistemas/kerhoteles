jQuery(document).ready(function() {
    "use strict";
    var a = jQuery("body").css("direction");
    jQuery("#go-up").click(function() {
        jQuery("body,html").animate({
            scrollTop: 0
        }, 1e3)
    }),

    jQuery.custom_bxslider = function() {
        jQuery(".bxslider").bxSlider({
            //pagerCustom: "#bx-pager",
            speed: 1e3,
            pager: !1,
            mode: "fade",
            auto: !0,
            pause: 8e3
        })
    },

    jQuery.fn.bxSlider && jQuery.custom_bxslider(),

    jQuery.internal_custom_bxslider = function() {
        jQuery(".bxslider-internal").bxSlider({
            pagerCustom: "#bx-pager-internal",
            speed: 1e3,
            controls: !1,
            mode: "fade",
            auto: !0,
            pause: 5e3
        })
    },
    
    jQuery.fn.bxSlider && jQuery.internal_custom_bxslider(),
    
    jQuery.welcome_custom_bxslider = function() {
        jQuery.fn.bxSlider && jQuery(".bxslider-welcome").bxSlider({
            speed: 1e3,
            controls: !0,
            auto: !0,
            mode: "fade",
            pause: 5e3,
            pager: !1
        })
    },
    
    jQuery.fn.bxSlider && jQuery.welcome_custom_bxslider(),

    jQuery.fn.owlCarousel && jQuery("#testimonials-slider").owlCarousel({
        items : 3,
        itemsTablet : [1024,1],
        navigation: !0,
        pagination: !1
    }),

    jQuery.fn.owlCarousel && jQuery("#services-box").owlCarousel({
        items : 3,
        itemsTablet : [980,2],
        itemsMobile : [480,1],
        navigation : !0,
        pagination : !1
    }),

    jQuery.fn.parsley && jQuery("#contact-form").length !== 0 && jQuery("#contact-form").parsley(),

    jQuery.fn.isMobile && null == isMobile.any() && jQuery("[data-background='parallax']").css("background-size", ""),

    jQuery(".search-form .input-daterange").datepicker({
        format: "mm-dd-yyyy",
        language: "en",
        startDate: new Date(), 
    }).on('changeDate', function(e){
        var $this = jQuery(e.target);
        
        if($this.hasClass('check-in')){
            var newDate = new Date(e.date)
          if(jQuery(".check-out").val() == '') {
            newDate.setDate(newDate.getDate() + 1);
            jQuery(".check-out").datepicker('update', newDate);
          }else if(jQuery(".check-in").datepicker('getDate').valueOf() < newDate){
            newDate.setDate(newDate.getDate() + 1);
            jQuery(".check-out").datepicker('update', newDate);
          }
        }else{
        }
        
        $this.val(e.format('mm-dd-yyyy'))
    }),

    // Booking Section
    "rtl" === a ? jQuery("#booking-tab-contents .booking-dates").datepicker({
        format: "mm-dd-yyyy",
        rtl: !0,
        language: "ar",
        startDate: new Date(), 
        inputs: jQuery('.booking-date-fields-container')
    }).on('changeDate', function(e){
        var $this = jQuery(e.target);
        $this.find('input[type=hidden]').val(e.format('mm-dd-yyyy'))
    }) : jQuery("#booking-tab-contents .booking-dates").datepicker({
        format: "mm-dd-yyyy",
        startDate: new Date(),
        inputs: jQuery('.booking-date-fields-container')
    }).on('changeDate', function(e){
        var $this = jQuery(e.target);
        $this.find('input[type=hidden]').val(e.format('mm-dd-yyyy'))
    }),

    // Enable forms by ajax
    jQuery('.event-boxes .book-now, .event-row-container .book-now,  #login-form-butt, #register-form-butt').magnificPopup({
        type: 'inline',
        removalDelay: 600,
        mainClass: 'mfp-fade'
    }),

    // Enable Gallery popup
    jQuery('.gallery-img-container').magnificPopup({
        delegate: 'a',
        type: 'image',
        removalDelay: 600,
        mainClass: 'mfp-fade',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1]
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
        }
    }),

    // Enable Gallery Hover effect
    /*jQuery(' .gallery-img-container > li ').each( function() { jQuery(this).hoverdir(); } ),*/

    // Login Ajax
    jQuery('#login-form form').on("submit",function(e){
        e.preventDefault();
        jQuery('#login-form form').addClass("loading");
        jQuery('#login-form form .error-box').removeClass("alert alert-danger").text('');
        jQuery.ajax({
            type: 'POST',
            dataType: 'json',
            url: ajax_login_object.ajaxurl,
            data: { 
                'action': 'ajaxlogin', 
                'username': jQuery('#login-form form .email').val(), 
                'password': jQuery('#login-form form .pass').val(), 
                'security': jQuery('#login-form form #security-login').val() },
            success: function(data){
                jQuery('#login-form form').removeClass("loading");
                if (data.loggedin == true){
                    document.location.href = ajax_login_object.redirecturl;
                }
                else{
                    jQuery('#login-form form .error-box').addClass("alert alert-danger").text(data.message);                    
                }
            }
        });
    }),

    // Register Ajax
    jQuery('#register-form form').on("submit",function(e){
        e.preventDefault();
        jQuery('#register-form form').addClass("loading");
        jQuery('#register-form form .error-box').removeClass("alert alert-danger").text('');
        jQuery.ajax({
            type: 'POST',
            dataType: 'json',
            url: ajax_login_object.ajaxurl,
            data: { 
                'action': 'ajaxregister', 
                'username': jQuery('#register-form form .user-name').val(), 
                'email': jQuery('#register-form form .email').val(), 
                'security': jQuery('#register-form form #security-register').val() },
            success: function(data){
                jQuery('#register-form form').removeClass("loading");
                if (data.loggedin == true){
                    document.location.href = ajax_login_object.redirecturl;
                }
                else{
                    jQuery('#register-form form .error-box').addClass("alert alert-danger").text(data.message);                    
                }
            }
        });
    });
    jQuery('.menu-item-579 a').magnificPopup({
      items: {
          src: '#ModalKerClub',
          type: 'inline'
      }
    });
});

