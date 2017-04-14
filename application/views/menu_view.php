
<div id="article_page">



</div>
<div class="template_banner">
<div id="logo_articles">

</div>
</div>
<style>

</style>
<div id="menu_block">
<div id="menu">
<ul>
		<li id="main_link_menu" class="menu_item">
		<h3>Main</h3>
		</li>
		<li id="portfolio_link_menu" class="menu_item">
		<h3>Portfolio</h3>
		</li>
		<li id="back_link_menu" class="menu_item">
		<h3>Back-end</h3>
		</li>
		<li id="promo_link_menu" class="menu_item">
		<h3>Front-end</h3>
		</li>
		<li id="contacts_link_menu" class="menu_item">
		<h3>Contacts</h3>
		</li>
		<!--li class="left_arrows sub_menu_item">
		<h3>Статьи</h3>
			<ul class="submenu">
			<li id="web_design" class="sub_menu_item_hidden">
			<h3>Веб дизайн</h3>
			</li>
			<li class="sub_menu_item_hidden">
			<h3>Ценообразование</h3>
			</li>
			<li class="sub_menu_item_hidden">
			<h3>Продвижение</h3>
			</li>
			<li class="sub_menu_item_hidden">
			<h3>Изготовление сайтов</h3>
			</li>
			<li class="sub_menu_item_hidden">
			<h3>Официальный сайт</h3>
			</li>
			</ul> 
		</li--> 
</ul>		
</div>	
		

<div id="menu_quad" class="open_quad">
<h4 id="menu_head_name">Меню</h4>
</div>	

</div>

<script>
window.menu=1;
function close_menu(){

$('#menu_block').animate({left:"-=315px"});
$('.container_width').animate({"left": "-=315px"})
$('#menu_head_name').text('Меню')
window.menu=1;
console.log(window.menu)
setTimeout(function(){
	$('.logo_l').animate({"left": "-=20px"});
	$('.logo_l').animate({"left": "+=20px"});
	$('.logo_l').css('position','fixed');
	$('.second_menu').css('position','fixed'); }, 300);
	$('.content').animate({"left": "+=315px"},800,'easeInOutQuint')

}
$('#menu_quad').click(function(){
$('.logo_l').css('position','absolute');
$('.second_menu').css('position','absolute');
var left = $('#menu_block').offset().left;
if(left==-315 ){
$('.content').animate({"left": "-=315px"},800,'easeInOutElastic')
$(this).animate({left:"+=315px"});
$('#menu_block').animate({left:"+=315px"});
$('.container_width').animate({"left": "+315px"})
$('#menu_head_name').html('X');


window.menu=0;
console.log(window.menu)
}
else{

close_menu();
$(this).animate({left:"0px"});
}

})
$('.menu_item').click(function(){

var this_m=$(this);
$('#menu_block').animate({left:"-=315px"});
$('#menu_quad').animate({left:"-=315px"});
$('.container_width').animate({"left": "-=315px"})
if (this_m.attr('id')=='main_link_menu'){
	var url="/main_controller/pages/index";
	}
	if (this_m.attr('id')=='portfolio_link_menu'){
	var url="/main_controller/pages/portfolio";
	}
	if (this_m.attr('id')=='prices_link_menu'){
	var url="/main_controller/pages/packages";
	}
	if (this_m.attr('id')=='back_link_menu'){
	var url="/main_controller/pages/back";
	}
	if (this_m.attr('id')=='promo_link_menu'){
	var url="/main_controller/pages/promotion";
	}
	if (this_m.attr('id')=='contacts_link_menu'){
	var url="/main_controller/pages/contacts";
	}
	    window.location=url;
		 
    });
$('#menu_head_name').text('Меню').queue(function() {

$('.container_width').animate({"top": "100%"}, 600,  'easeOutQuart').queue(function() {
setTimeout(function(){
location.reload();
},1000)


	});
	
});


$('.sub_menu_item').click(function(){
 $('.submenu').toggle("slow", function() {
// Animation complete.

}); 
var this_ar = this;
$(this).toggleClass(function() {
if ($(this).hasClass('left_arrows') ) {
return "down_arrows";
}
else 
{
 return "left_arrows"; 
}
});
});
$('.sub_menu_item_hidden').click(function(){
var this_l=$(this);
$('#menu_quad').animate({left:"-=315px"});
close_menu()
$('#menu_article_block').animate({"top":"0px"},600,  'easeOutQuart');
$('#article_page').fadeIn();
$('#article_page').animate({"left":"0"},600,  'easeOutQuart').queue(function() {

setTimeout(function(){
location.reload();
},1000)
if (this_l.attr('id')=='web_design'){
	var url="http://imedia.in.ua/articles/pages/webdesign";
	}
	    window.location=url;
});
});
</script>