var YtSettings = { tplurl: '/templates/guacu', color: 'blue' };
var caminho =''; jQuery.noConflict();
		window.addEvent('domready', function() {
			SqueezeBox.initialize({});
			$$('a.modal').each(function(el) {
				el.addEvent('click', function(e) {
					new Event(e).stop();
					SqueezeBox.fromElement(el);
				});
			});
		});
window.addEvent('domready',function(){var Slider94 = new DJImageSlider({id: '94', slider_type: 0, slide_size: 240, visible_slides: 1, show_buttons: 0, show_arrows: 2, preload: 1000},{auto: 1, transition: Fx.Transitions.Expo.easeInOut, duration: 1000, delay: 4000})});
function mycarousel_initCallback(carousel)
			{
					carousel.buttonNext.bind('click', function() {
						carousel.startAuto(0);
					});
					carousel.buttonPrev.bind('click', function() {
						carousel.startAuto(0);
				});
					carousel.clip.hover(function() {
						carousel.stopAuto();
					}, function() {
						carousel.startAuto();
					});
};			
jQuery(document).ready(function() {
jQuery('#mycarousel').jcarousel({
auto: 3,
scroll:1,
wrap: 'last',
animation: 'slow',
initCallback: mycarousel_initCallback
});
});
/*<![CDATA[*/
	var ajax_live_site = 'http://guacutur.com.br/index.php';
/*]]>*/
var freq='always'
var autohide=['no', 10]
if (parseInt(freq)!=NaN)
var random_num=Math.floor(Math.random()*freq)
var ie=document.all
var dom=document.getElementById
var ns4=document.layers
var calunits=document.layers? '' : 'px'
var bouncelimit='32'
var direction='up';
function initbox(){
if (!dom&&!ie&&!ns4)
return
crossobj=(dom)?document.getElementById('dropin').style : ie? document.all.dropin : document.dropin;
scroll_top=(ie)? truebody().scrollTop : window.pageYOffset;
crossobj.top=scroll_top-250+calunits;
crossobj.visibility=(dom||ie)? 'visible' : 'show';
dropstart=setInterval('dropin()',50);
autoclose();
};
function dropin(){
scroll_top=(ie)? truebody().scrollTop : window.pageYOffset
if (parseInt(crossobj.top)			<100+scroll_top)
crossobj.top=parseInt(crossobj.top)+40+calunits
else{
clearInterval(dropstart)
bouncestart=setInterval('bouncein()',50)
autoclose()
}
}
function bouncein(){
crossobj.top=parseInt(crossobj.top)-bouncelimit+calunits
if (bouncelimit	<0)
bouncelimit+=8
bouncelimit=bouncelimit*-1
if (bouncelimit==0){
clearInterval(bouncestart)
autoclose()
}
}
function dismissbox(){
if (window.bouncestart) clearInterval(bouncestart)
crossobj.visibility='hidden'
}
function autoclose(){
if (autohide[0]=='yes'){
setTimeout('dismissbox()', autohide[1]*1000)}}
function dropwin(){
bouncelimit=32
direction='up'
initbox()
}
function truebody(){
return (document.compatMode && document.compatMode!='BackCompat')? document.documentElement : document.body
}
function get_cookie(Name) {
var search = Name + '='
var returnvalue = ''
if (document.cookie.length > 0) {
offset = document.cookie.indexOf(search)
if (offset != -1) {
offset += search.length
end = document.cookie.indexOf(';', offset)
if (end == -1)
end = document.cookie.length;
returnvalue=unescape(document.cookie.substring(offset, end))
}
}
return returnvalue;
}
if (freq=='oncepersession' && get_cookie('dropinmod')=='' || freq=='always' || parseInt(freq)!=NaN && random_num==0){
if (document.getElementById || document.all)
window.onload=initbox
if (freq=='oncepersession')
document.cookie='dropinmod=yes';
if (freq=='never')
initibox();
}
var YtSettings = { tplurl: '/templates/guacu', color: 'blue' };
var caminho =''; jQuery.noConflict();