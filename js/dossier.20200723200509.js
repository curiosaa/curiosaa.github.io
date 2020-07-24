(function(d){var h=[];d.loadImages=function(a,e){"string"==typeof a&&(a=[a]);for(var f=a.length,g=0,b=0;b<f;b++){var c=document.createElement("img");c.onload=function(){g++;g==f&&d.isFunction(e)&&e()};c.src=a[b];h.push(c)}}})(window.jQuery);
$.fn.hasAttr = function(name) { var attr = $(this).attr(name); return typeof attr !== typeof undefined && attr !== false; };


$(document).ready(function() {
r=function(){dpi=window.devicePixelRatio;$('.js9').attr('src', (dpi>1) ? 'images/img_5883-1324.jpg' : 'images/img_5883-662.jpg');
$('.js10').attr('src', (dpi>1) ? 'images/img_8493-1330.jpg' : 'images/img_8493-665.jpg');
$('.js11').attr('src', (dpi>1) ? 'images/img_0361-1336.jpg' : 'images/img_0361-668.jpg');
$('.js12').attr('src', (dpi>1) ? 'images/circle-cropped-150.png' : 'images/circle-cropped-75.png');};
if(!window.HTMLPictureElement){r();}
if(! document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image", "1.1")) {
$('.js13').attr('src', 'images/instagram-26.png');
$('.js14').attr('src', 'images/twitter-26.png');

}
(function(){$('a[href^="#"]:not(.allowConsent,.noConsent,.denyConsent,.removeConsent)').each(function(i,e){$(e).click(function(){var t=e.hash.length>1?$('[name="'+e.hash.slice(1)+'"]').offset().top:0;return $("html, body").animate({scrollTop:t},400),!1})})})();
$('form').h5Validate();initMenu($('#m1')[0]);

});