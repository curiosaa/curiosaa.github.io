(function(d){var h=[];d.loadImages=function(a,e){"string"==typeof a&&(a=[a]);for(var f=a.length,g=0,b=0;b<f;b++){var c=document.createElement("img");c.onload=function(){g++;g==f&&d.isFunction(e)&&e()};c.src=a[b];h.push(c)}}})(window.jQuery);
$.fn.hasAttr = function(name) { var attr = $(this).attr(name); return typeof attr !== typeof undefined && attr !== false; };


$(document).ready(function() {
r=function(){dpi=window.devicePixelRatio;$('.js12').attr('src', (dpi>1) ? 'images/img_5883-1604.jpg' : 'images/img_5883-802.jpg');
$('.js13').attr('src', (dpi>1) ? 'images/img_8493-1602.jpg' : 'images/img_8493-801.jpg');
$('.js14').attr('src', (dpi>1) ? 'images/img_0361-1614.jpg' : 'images/img_0361-807.jpg');
$('.js15').attr('src', (dpi>1) ? 'images/circle-cropped-150-1.png' : 'images/circle-cropped-75-1.png');};
if(!window.HTMLPictureElement){r();}
if(! document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image", "1.1")) {
$('.js16').attr('src', 'images/instagram-26-1.png');
$('.js17').attr('src', 'images/twitter-26-1.png');

}
(function(){$('a[href^="#"]:not(.allowConsent,.noConsent,.denyConsent,.removeConsent)').each(function(i,e){$(e).click(function(){var t=e.hash.length>1?$('[name="'+e.hash.slice(1)+'"]').offset().top:0;return $("html, body").animate({scrollTop:t},400),!1})})})();
$('form').h5Validate();initMenu($('#m1')[0]);
var wl = new woolite();
wl.init();
wl.addAnimation($('.js11')[0], "1.00s", "0.00s", 1, 100);
wl.start();

});