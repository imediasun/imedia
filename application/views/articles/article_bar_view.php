<div id="menu_bar">
<div class="menu_bar">
<a href="http://imedia.in.ua"><div id="bar_logo"></div></a>
<div id="search_icon"></div>
<div id="bar_menu"></div>
<div id="date_icon"></div>
</div>
<div id="search_container">
	<div id="search_form">
		<input class="search_png" disabled>
		<input class="search" name="search">
		<button style="margin:20px auto;float:right;margin-right:15px;" class="btn btn-primary btn-lg" type="submit">Найти</button>
	</div>
</div>
<div id="articles_date">
<div class="menu_item_head"><span>Найти статьи по дате<span></div>
<div id="getSetInlinePicker" style="position:relative;float:left;left:80px;">

</div>
</div>
<div id="articles_menu">
<div class="menu_item_head"><span>Разделы темы Веб-дизайн<span></div>
<ul>

<li class="art_menu_item">Верстка
<li class="art_menu_item">Макетирование
<li class="art_menu_item">Креатив
</ul>
</div>

</div>
<script>
$('#getSetInlinePicker').datepick({multiSelect: 31, showTrigger: '#calImg'});
</script>
 <script>
  /*   $(window).load(function(){
      $("#menu_bar").sticky({ topSpacing: 60 });
    }); */

  </script>	
<script>
$(document).ready(function(){
window.button = 0;
window.button2 = 0; 
window.button3 = 0;
var doc_height=$('body').height();
alert(doc_height)
$('#bar_menu').click(function(){
toggle_i(window.button);
 function toggle_i(button)
{

     switch(button)
     {
           case 1://открыто меню=> закрыть его

				 window.button = 0;
				$('#articles_menu').fadeOut();
				$('#black_screen').css('display','none');
			break;
			
			case 0://если закрыто меню => открыть меню
				
				//если закрыто меню и открыт календарь => закрыть календарь, открыть меню
				if(window.button2 == 1){
				window.button2 = 0
				$('#articles_date').fadeOut();
				}
				if(window.button3 ==1){
				window.button3 =0
				$('#search_container').fadeOut();
				
				}
				window.button = 1;
				
				$('#articles_menu').fadeIn();
				$('#black_screen').css('height', doc_height+'px');
				$('#black_screen').css('display','block');
			break;
     }
}
});
$('#date_icon').click(function(){
toggle_i(window.button2);
 function toggle_i(button2)
{
     switch(button2)
     {
            case 1://открыт календарь=> закрыть его

				 window.button2 = 0;
				$('#articles_date').fadeOut();
				$('#black_screen').css('display','none');
			break;
			
			case 0://если закрыт календарь => открыть календарь
				//если закрыт календарь и открыто меню => закрыть меню, открыть календарь
				if(window.button ==1){
				window.button =0
				$('#articles_menu').fadeOut();
				
				}
				if(window.button3 ==1){
				window.button3 =0
				$('#search_container').fadeOut();
				
				}
				window.button2 = 1;
				
				$('#articles_date').fadeIn();
				$('#black_screen').css('height', doc_height+'px');
				$('#black_screen').css('display','block');
			break;
     }
}
});

$('#search_icon').click(function(){
toggle_i(window.button3);
 function toggle_i(button3)
{
     switch(button3)
     {
            case 1://открыт календарь=> закрыть его

				 window.button3 = 0;
				$('#search_container').fadeOut();
				$('#black_screen').css('display','none');
			break;
			
			case 0://если закрыт календарь => открыть календарь
				//если закрыт календарь и открыто меню => закрыть меню, открыть календарь
				if(window.button ==1){
				window.button =0
				$('#articles_menu').fadeOut();
				
				}
				if(window.button2 ==1){
				window.button2 =0
				$('#articles_date').fadeOut();
				
				}
				window.button3 = 1;
				
				$('#search_container').fadeIn();
				$('#black_screen').css('height', doc_height+'px');
				$('#black_screen').css('display','block');
			break;
     }
}
});
}) 
</script> 
