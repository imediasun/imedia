<div id="menu_article_block">
	

</div>

<style>
#menu_article_block{
top:-65px;
}
</style>
<div id="menu_block">
<div id="menu">
<ul>
		<li id="main_link_menu" class="menu_item">
		<h3>Главная</h3>
		</li>
		<li id="portfolio_link_menu" class="menu_item">
		<h3>Портфолио</h3>
		</li>
		<li id="prices_link_menu" class="menu_item">
		<h3>Цены</h3>
		</li>
		<li id="promo_link_menu" class="menu_item">
		<h3>Продвижение</h3>
		</li>
		<li class="left_arrows sub_menu_item">
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
		</li> 
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
}
$('#menu_quad').click(function(){
var left = $('#menu_block').offset().left;
if(left==-315 ){
$(this).animate({left:"+=315px"});
$('#menu_block').animate({left:"+=315px"});
$('.container_width').animate({"left": "+315px"})
$('#menu_head_name').html('X');
window.menu=0;
$('#menu').scroll();
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
$('.container_width').animate({"left": "-=315px"})
$('#menu_head_name').text('Меню').queue(function() {

$('.container_width').animate({"top": "100%"}, 600,  'easeOutQuart').queue(function() {
setTimeout(function(){
location.reload();
},1000)

if (this_m.attr('id')=='main_link_menu'){
	var url="http://pasalskiy.com.ua/main/pages/index";
	}
	if (this_m.attr('id')=='portfolio_link_menu'){
	var url="http://pasalskiy.com.ua/main/pages/portfolio";
	}
	if (this_m.attr('id')=='prices_link_menu'){
	var url="http://pasalskiy.com.ua/main/pages/packages";
	}
	if (this_m.attr('id')=='promo_link_menu'){
	var url="http://pasalskiy.com.ua/main/pages/promotion";
	}
	    window.location=url;
		 
    ;});});
	
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
close_menu()
$('#menu_article_block').animate({"top":"0px"},600,  'easeOutQuart');
$('#article_page').animate({"left":"0"},600,  'easeOutQuart').queue(function() {
setTimeout(function(){
location.reload();
},1000)
if (this_l.attr('id')=='web_design'){
	var url="http://pasalskiy.com.ua/articles/pages/webdesign";
	}
	    window.location=url;
});
});
</script>
