window.tbtw=window.tbtw||{},tbtw.respond={init:function(){tbtw.mobile=!0,$(window).resize(function(a){tbtw.respond.mobileChange()}),setTimeout(function(){tbtw.respond.mobileChange()},0)},mobileChange:function(){var a=$(window).width()<767;a===tbtw.mobile&&"undefined"!=typeof tbtw.mobile||(tbtw.respond.mobileClassing(a),$(window).trigger("mobileChange",a),tbtw.mobile=a)},mobileClassing:function(a){a?($("body").addClass("mobile"),$("body").removeClass("desktop")):($("body").removeClass("mobile"),$("body").addClass("desktop"))}},tbtw.scrollToAnchor={init:function(){$("a.scroll-to[href*=#]:not([href=#])").click(function(a){if(location.pathname.replace(/^\//,"")===this.pathname.replace(/^\//,"")&&location.hostname===this.hostname){var b=$(this.hash);b=b.length?b:$("[name="+this.hash.slice(1)+"]");var c=$(this).data("offset")||20,d=$(this).data("speed")||600,e=$(this).data("ease")||"swing",f=$(this).data("default")||"true";if(b.length){var g=b.offset().top-c;tbtw.scrollToAnchor.scrollTo(g,d,e),"true"===f&&a.preventDefault()}}})},scrollTo:function(a,b,c){$("html,body").animate({scrollTop:a},b,c),$("html, body").bind("scroll mousedown DOMMouseScroll mousewheel keyup scrollstart touchstart touchmove",function(){$("html, body").stop()})}},tbtw.resizeHero={heroResize:$(".hero-resize"),defaultHeroHeight:850,mobileHeight:450,sectionOffset:3,init:function(){$(window).resize(function(a){tbtw.resizeHero.setHero()}),$(window).scroll(function(a){tbtw.resizeHero.setHero()}),setTimeout(function(){tbtw.resizeHero.setHero()},0)},setHero:function(){var a=380;tbtw.mobile?tbtw.resizeHero.heroResize.css({height:"","min-height":""}):(a=$(window).height()-tbtw.resizeHero.sectionOffset,a<=tbtw.resizeHero.mobileHeight?tbtw.resizeHero.heroResize.css({height:tbtw.resizeHero.mobileHeight+"px","min-height":tbtw.resizeHero.mobileHeight+"px"}):a>=tbtw.resizeHero.defaultHeroHeight?tbtw.resizeHero.heroResize.css({height:tbtw.resizeHero.defaultHeroHeight+"px","min-height":tbtw.resizeHero.defaultHeroHeight+"px"}):tbtw.resizeHero.heroResize.css({height:a+"px","min-height":a+"px"}))}},jQuery(document).ready(function(){tbtw.respond.init(),tbtw.resizeHero.init(),tbtw.scrollToAnchor.init()});