(function(c){var b,a;a=typeof window!=="undefined"&&window!==null?window:global;a.BarRating=b=(function(){function d(){this.show=function(){var g=c(this.elem),j,f,h=this.options,e,i;if(!g.data("barrating")){if(h.initialRating){i=c('option[value="'+h.initialRating+'"]',g)}else{i=c("option:selected",g)}g.data("barrating",{currentRatingValue:i.val(),currentRatingText:i.text(),originalRatingValue:i.val(),originalRatingText:i.text()});j=c("<div />",{"class":"br-widget"}).insertAfter(g);g.find("option").each(function(){var n,m,l,k;n=c(this).val();if(n){m=c(this).text();l=c("<a />",{href:"#","data-rating-value":n,"data-rating-text":m});k=c("<span />",{text:(h.showValues)?m:""});j.append(l.append(k))}});if(h.showSelectedRating){j.append(c("<div />",{text:"","class":"br-current-rating"}))}g.data("barrating").deselectable=(!g.find("option:first").val())?true:false;if(h.reverse){e="nextAll"}else{e="prevAll"}if(h.reverse){j.addClass("br-reverse")}if(h.readonly){j.addClass("br-readonly")}j.on("ratingchange",function(k,l,m){l=l?l:g.data("barrating").currentRatingValue;m=m?m:g.data("barrating").currentRatingText;g.find('option[value="'+l+'"]').prop("selected",true);g.change();if(h.showSelectedRating){c(this).find(".br-current-rating").text(m)}}).trigger("ratingchange");j.on("updaterating",function(k){c(this).find('a[data-rating-value="'+g.data("barrating").currentRatingValue+'"]').addClass("br-selected br-current")[e]().addClass("br-selected")}).trigger("updaterating");f=j.find("a");f.on("touchstart",function(k){k.preventDefault();k.stopPropagation();c(this).click()});if(h.readonly){f.on("click",function(k){k.preventDefault()})}if(!h.readonly){f.on("click",function(k){var m=c(this),l,n;k.preventDefault();f.removeClass("br-active br-selected");m.addClass("br-selected")[e]().addClass("br-selected");l=m.attr("data-rating-value");n=m.attr("data-rating-text");if(m.hasClass("br-current")&&g.data("barrating").deselectable){m.removeClass("br-selected br-current")[e]().removeClass("br-selected br-current");l="",n=""}else{f.removeClass("br-current");m.addClass("br-current")}g.data("barrating").currentRatingValue=l;g.data("barrating").currentRatingText=n;j.trigger("ratingchange");h.onSelect.call(this,g.data("barrating").currentRatingValue,g.data("barrating").currentRatingText);return false});f.on({mouseenter:function(){var k=c(this);f.removeClass("br-active").removeClass("br-selected");k.addClass("br-active")[e]().addClass("br-active");j.trigger("ratingchange",[k.attr("data-rating-value"),k.attr("data-rating-text")])}});j.on({mouseleave:function(){f.removeClass("br-active");j.trigger("ratingchange").trigger("updaterating")}})}g.hide()}};this.clear=function(){var e=c(this.elem);var f=e.next(".br-widget");if(f&&e.data("barrating")){f.find("a").removeClass("br-selected br-current");e.data("barrating").currentRatingValue=e.data("barrating").originalRatingValue;e.data("barrating").currentRatingText=e.data("barrating").originalRatingText;f.trigger("ratingchange").trigger("updaterating");this.options.onClear.call(this,e.data("barrating").currentRatingValue,e.data("barrating").currentRatingText)}};this.destroy=function(){var f=c(this.elem);var h=f.next(".br-widget");if(h&&f.data("barrating")){var e=f.data("barrating").currentRatingValue;var g=f.data("barrating").currentRatingText;f.removeData("barrating");h.off().remove();f.show();this.options.onDestroy.call(this,e,g)}}}d.prototype.init=function(f,g){var e;e=this;e.elem=g;return e.options=c.extend({},c.fn.barrating.defaults,f)};return d})();c.fn.barrating=function(e,d){return this.each(function(){var f=new b();if(!c(this).is("select")){c.error("Sorry, this plugin only works with select fields.")}if(f.hasOwnProperty(e)){f.init(d,this);return f[e]()}else{if(typeof e==="object"||!e){d=e;f.init(d,this);return f.show()}else{c.error("Method "+e+" does not exist on jQuery.barrating")}}})};return c.fn.barrating.defaults={initialRating:null,showValues:false,showSelectedRating:true,reverse:false,readonly:false,onSelect:function(d,e){},onClear:function(d,e){},onDestroy:function(d,e){}}})(jQuery);
