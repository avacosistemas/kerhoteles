var SliderItem = 0;
var IntervalSlide = false;

function SliderExecute() {
  var index = SliderItem;
  jQuery('#slider h3:eq(' + index + ')').css('top', '-500px').css('display', 'block').css('opacity', '0');
  jQuery('#slider h3:eq(' + index + ')').animate({
    'top': '5%',
    opacity: 1
  }, 300, function () {
    setTimeout(function () {
      jQuery('#slider h3:eq(' + index + ')').animate({
        'left': '-500px',
        opacity: 1
      }, 300, function () {
        jQuery('#slider h3:eq(' + index + ')').attr("style", "");
      });
    }, 5000);
  });
  SliderItem++;
  if (jQuery('#slider h3').length == SliderItem) {
    SliderItem = 0;
  }
}

function days_between(date1, date2) {

  var date1 = new Date(date1);
  var date2 = new Date(date2);

  var ONE_DAY = 1000 * 60 * 60 * 24

  var date1_ms = date1.getTime()
  var date2_ms = date2.getTime()

  var difference_ms = Math.abs(date1_ms - date2_ms)

  return Math.round(difference_ms / ONE_DAY)
}

jQuery(document).ready(function () {
  jQuery("#main-booking-form form.search-form").submit(function (event) {
    event.preventDefault();
    event.stopPropagation();

    var slocation = location.href;
    slocation = slocation.replace(SiteURL, "").substr(0, 4);
    var idioma = 'EN_EN';
    var BookingURL = 'https://reservations.travelclick.com';
    if (slocation == '/en/') {
      idioma = 'EN_EN';
      BookingURL = 'https://reservations.travelclick.com';
    } else if (slocation == '/pt/') {
      idioma = 'PT_PT';
      BookingURL = 'https://reservations.travelclick.com';
    }
    var CIN = jQuery("#main-booking-form form.search-form input.check-in").val();
    var COUT = jQuery("#main-booking-form form.search-form input.check-out").val();
    var Noches = days_between(CIN, COUT);

    CIN = CIN.replace(/\-/g, '%2F');
    COUT = COUT.replace(/\-/g, '%2F');

    var hotel = jQuery("#main-booking-form form.search-form select#search-field2").val();
    if (hotel < '2.4') {
      //hotel = hotel.replace('2.', '1.');
      if(hotel == '2.1') hotel = '73729';
      if(hotel == '2.2') hotel = '74787';
      if(hotel == '2.3') hotel = '73742';      
      
      window.open(BookingURL + "/"+hotel +"?languageId="+idioma+"&dateIn=" + CIN + "&dateOut=" + COUT);
    } else if (hotel > '2.4') {
      window.open('https://reservations.travelclick.com/110467?room=Tipo+de+habitaci%C3%B3n&DateIn=&DateOut=&Adults=Huespedes&languageid=2#/guestsandrooms');
    }
  });

  "use strict";
  var a = jQuery("body").css("direction");
  // It's just for Demo Section (Style Selector)
  jQuery("#style-selector-handle").click(function () {
    var b = ("rtl" == a) ? "right" : "left";
    jQuery(this).hasClass("active") ? (jQuery("#style-selector").css(b, "-165px"), jQuery(this).removeClass("active")) : (jQuery("#style-selector").css(b, "0"), jQuery(this).addClass("active"))
  }),

    jQuery('#layout-selector').change(function () {
      var a = jQuery('#style-selector-box .pattern-selector');
      jQuery(this).val() == 2 ? (jQuery('body').addClass('boxed'), a.slideDown()) : (jQuery('body').removeClass('boxed'), a.slideUp());
      jQuery('#slider .bx-viewport').css('height', jQuery('#slider .active-slide img').height() + 50);
    }),

    jQuery('[id*=pattern_]').click(function () {
      var a = jQuery(this).css('background-image');
      jQuery('body').css({'background-image': a});
      jQuery('[id*=pattern_]').removeClass('selected');
      jQuery(this).addClass('selected');
    });

  jQuery("#style-selector-box [class*=preset_]").click(function () {
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

  if (jQuery('#slider h3').length > 0) {
    setTimeout(function () {
      IntervalSlide = setInterval(SliderExecute, 8000);
      SliderExecute();
    }, 1000);
  }
  jQuery('.bx-prev, .bx-next').on("click", function (e) {
    clearInterval(IntervalSlide)
    jQuery('#slider h3').attr("style", "");
    IntervalSlide = setInterval(SliderExecute, 8000);
    SliderExecute();
  });
});