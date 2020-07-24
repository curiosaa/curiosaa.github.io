(function(d){var h=[];d.loadImages=function(a,e){"string"==typeof a&&(a=[a]);for(var f=a.length,g=0,b=0;b<f;b++){var c=document.createElement("img");c.onload=function(){g++;g==f&&d.isFunction(e)&&e()};c.src=a[b];h.push(c)}}})(window.jQuery);
$.fn.hasAttr = function(name) { var attr = $(this).attr(name); return typeof attr !== typeof undefined && attr !== false; };


$(document).ready(function() {
r=function(){dpi=window.devicePixelRatio;$('.js5').attr('src', (dpi>1) ? 'images/circle-cropped-150.png' : 'images/circle-cropped-75.png');
$('.js2').attr('src', (dpi>1) ? 'images/graham-holtshausen-funfez3vlv4-unsplash-1920.jpg' : 'images/graham-holtshausen-funfez3vlv4-unsplash-960.jpg');
$('.js4').attr('src', (dpi>1) ? 'images/laura-chouette-gyrd56hmvvg-unsplash-556.jpg' : 'images/laura-chouette-gyrd56hmvvg-unsplash-278.jpg');};
if(!window.HTMLPictureElement){r();}
if(! document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image", "1.1")) {
$('.js6').attr('src', 'images/instagram-26.png');
$('.js7').attr('src', 'images/twitter-26.png');

}
(function(){$('a[href^="#"]:not(.allowConsent,.noConsent,.denyConsent,.removeConsent)').each(function(i,e){$(e).click(function(){var t=e.hash.length>1?$('[name="'+e.hash.slice(1)+'"]').offset().top:0;return $("html, body").animate({scrollTop:t},400),!1})})})();
$('form').h5Validate();initMenu($('#m1')[0]);
var wl = new woolite();
wl.init();
wl.addAnimation($('.js3')[0], "1.00s", "0.00s", 1, 100);
wl.start();

});