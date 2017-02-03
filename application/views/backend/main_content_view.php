


	<style type="text/css">
	.slide2{
	z-index:999;
	}
#content{display:none;}

#slide2{ 
background-image:url(/img/monblanc5.jpg);
background-size:100%;
background-repeat:no-repeat;
z-index:998;
position:absolute;
width:100%;
height:100%;
overflow:hidden;
}




</style>
















<div  id="slide2" style="z-index:999;" class="slide2 container_width">
<div class="stripe"></div>
<img class="logo_l" style="" src="/img/logo_wight_wire2.png" >
<h1 id="last_works_header" class="medium_header">BACK-END</h1>
 <div id="content">

		<ul id="preview_main_block">
			<li class="preview" id="port_0">
				<div class="prev_img">	
					
					<img class="main_preview" src="/img/laravel_preview.png" ></img>
					<a href="http://wisdom-services.net"><div class="link_block1">
					<div class="link"></div>
					</div></a>
					<img class="main_preview" src="/img/zend_preview2.png"></img>
					<a href=""><div class="link_block2">
					<div class="link"></div>
					</div></a>
				</div>
			</li>
			<li class="preview" id="port_1">
				<div class="prev_img">	
					<img class="main_preview" src="/img/magento_preview.png"  ></img>
					<img class="main_preview" src="/img/codeigniter_preview.png"  ></img>
					<a href="http://midia.com.ua"><div class="link_block2">
					<div class="link"></div>
					</div></a>
				</div>
			</li>
			
</ul>
<!--div class="button_long">Выбрать готовый сайт дешевле</div-->
<!--div class="button">Закажите свой сайт</div-->
	

</div>

	<!--h1 id="portfolio_header" class="big_header">ПОРТФОЛИО</h1-->
		
		<h1  id="right" class="portfolio_arrow portfolio_right_arrow">><h1>	
		<h1 id="left" class="portfolio_arrow portfolio_left_arrow"><<h1>
</div>


		
	
		





<link type="text/css" rel="stylesheet" href="/css/style_portfolio.css" />
<link type="text/css" rel="stylesheet" href="/css/style.css" />


	
	
</div><!-- #wrapper -->
<script>
// window.addEventListener('popstate', function(event) { 
  // // выводим в консоль данные состояния  страницы "event.state": 
  // console.log("Page state data:", event.state); 
// },  false); 
</script>	
<script>
/* $('#slide2').css('z-index','999'); */
function start_page() {
$('#content').fadeIn(1000);
var obj_width=$('#slide2').width();//экранная ширина
var obj_height=$('#slide2').height();
var length=$('.preview').length;//колличество элементов li
$('.preview').css('width',obj_width)//задаем ширину li в экран
$('.main_preview').width(obj_width/3.2);//ширина фотки экран/3
$('.prev_img').width(obj_width/1.48);//контейнер для 2 фото
var window_width=$(window).width();//ширина окна
var portfolio_left_after=window_width/18.5;//величина первого съезда влево
var portfolio_left=-obj_width;//ширина надписи = -ширине экрана
var main_left=obj_width;
var main_left_after=window_width/7.5;
$('#portfolio_header').css({left: -obj_width/* portfolio_left */});
setTimeout(function(){
$('#portfolio_header').animate({left: portfolio_left_after},600,'easeInOutBack')//выезд надписи влево
 // $('#preview_main_block .preview:nth-child(1)').css('display','block');

var active_port=$('#preview_main_block .preview:nth-child(1)');
active_port.animate({left: -obj_width},600,'easeInOutBack')//выезд 2 фото влево
active_port.addClass('active_port');
$('#port_'+(length-1)+'').css({left:-obj_width*2})
//первым 2 ум фото задан класс - это первый порт
}, 1000);

/*$('.preview ').css('display','none')



 $('.portfolio_left_arrow').click(function(){



var index=$(this).parent('.preview').index('li');

if(index==0){
index_slide=length-1;
}
else{
index_slide=index-1;
}
$(this).parent('.preview').fadeOut();
$(this).parent('.preview').css('display','none');
$(this).parent('.preview').css('left','100%');
 $('#slider_slide_'+index_slide+'').css({display:'block'});
$('#slider_slide_'+index_slide+'').css({left:'-100%'});
$('#slider_slide_'+index_slide+'').animate({left: main_left_after},600,'easeInOutBack') 

}); */

/* var length=$('.preview').length;
 var index=$(this).parent('.preview').index('li');
 if(index==length-1){
 index_slide=0;
}
else{
index_slide=index+1;
}
$(this).parent('.preview').fadeOut();
$(this).parent('.preview').css('display','none');
$(this).parent('.preview').css('left','100%');
 $('#slider_slide_'+index_slide+'').css({display:'block'});
 $('#slider_slide_'+index_slide+'').css({left:'100%'});
 $('#slider_slide_'+index_slide+'').animate({left: main_left_after},600,'easeInOutBack')  */
var this_p;
function side_animate(side){
index_slide=port_index($('.active_port'))
switch(side){
case 'left':
$('.active_port').animate({left: obj_width*2},600,'easeInOutBack')//при нажатии анимируем влево на ширину экрана
if(index_slide>=2){
$('#port_'+(index_slide-1)+'').animate({left: -obj_width},600,'easeInOutBack')
this_=$('#port_'+(index_slide-1)+'')
$('#port_'+(index_slide-2)+'').css({left:-obj_width*2})
}
else if (index_slide==1){
$('#port_'+0+'').animate({left: -obj_width},600,'easeInOutBack')
this_=$('#port_'+0+'')
$('#port_'+(length-1)+'').css({left:-obj_width*2})
}
else if (index_slide==0){
$('#port_'+(length-1)+'').animate({left: -obj_width},600,'easeInOutBack')
this_=$('#port_'+(length-1)+'')
$('#port_'+(length-2)+'').css({left:-obj_width*2})
}
$('.active_port').removeClass('active_port');
this_.addClass('active_port')


break;
case 'right':
$('.active_port').animate({left: -obj_width*2},600,'easeInOutBack')//при нажатии анимируем вправо на ширину экрана
if(index_slide==(length-1)){
$('#port_'+0+'').animate({left: -obj_width},600,'easeInOutBack')
this_=$('#port_'+0+'')
$('#port_'+(length-2)+'').css({left:obj_width*2})
}
else if (index_slide==0) {
$('#port_'+1+'').animate({left: -obj_width},600,'easeInOutBack')
this_=$('#port_'+1+'')
$('#port_'+(length-1)+'').css({left:obj_width*2})
}
else{
$('#port_'+(index_slide+1)+'').animate({left: -obj_width},600,'easeInOutBack')
this_=$('#port_'+(index_slide+1)+'')
$('#port_'+0+'').css({left:obj_width*2})
}
$('.active_port').removeClass('active_port');
this_.addClass('active_port')
break;
}

}

function port_index(this_){
var index=this_.index();
if(index<0){
index=0
}
return index
}

$('.portfolio_arrow').click(function(){
var side=$(this).attr('id');

side_animate(side);
/* 
var index=$('.active_port').index();//устанавливаем индекс порта

alert(index)
this_.removeClass('active_port');//удаляем класс первого порта
if(index+1<length){//если индекс +1 меньше длины списка
alert(index)
this_p=$('#preview_main_block .preview:nth-child('+(index+1)+')')//устанавливаем переменную последующего ребенка
this_p.css('left',obj_width) //смещаем последующий элемент li
this_p.animate({left: -obj_width},600,'easeInOutBack')//анимируем его влево на -obj_width
this_p.addClass('active_port');//этому элементу liзадаем класс active_port для последующих операций
}
else{//если индекс +1 больше либо равен длине списка
alert(index)
this_p=$('#preview_main_block .preview:nth-child(1)')//устанавливаем последующим портом первого ребенка
this_p.css('left',obj_width)
this_p.animate({left: -obj_width},600,'easeInOutBack')
this_p.addClass('active_port');
}
 */

 });
 
 
 
 
 
 
/* $('.portfolio_left_arrow').click(function(){

this_=$('.active_port');
var index=$('.active_port').index();
this_.animate({right: obj_width*2},600,'easeInOutBack') 
this_.removeClass('active_port'); 
if(index+1<length){
this_p=$('#preview_main_block .preview:nth-child('+(index+1)+')')
$('#preview_main_block .preview:not(.active_port)').css('right',obj_width)
this_p.animate({right: -obj_width},600,'easeInOutBack')
this_p.addClass('active_port');
}
else{
this_p=$('#preview_main_block .preview:nth-child(1)')
this_p.css('left',-obj_width)
this_p.animate({right: -obj_width},600,'easeInOutBack')
this_p.addClass('active_port');
}

}); */
 
 
 
}
</script>




<!--script>

 if (window.menu>0 ){
 scroll_page()
 }
 function scroll_page(){
// Функция для добавления обработчика событий
  function addHandler(object, event, handler) {
    if (object.addEventListener) {
      object.addEventListener(event, handler, false);
    }
    else if (object.attachEvent) {
      object.attachEvent('on' + event, handler);
    }
    else alert("Обработчик не поддерживается");
  }
  // Добавляем обработчики для разных браузеров
  

 
  addHandler(window, 'DOMMouseScroll', wheel);
  addHandler(window, 'mousewheel', wheel);
  addHandler(document, 'mousewheel', wheel);

  // Функция, обрабатывающая событие
  function wheel(event) {
    var delta; // Направление колёсика мыши
    event = event || window.event;
    // Opera и IE работают со свойством wheelDelta
    if (event.wheelDelta) { // В Opera и IE
      delta = event.wheelDelta / 120;
      // В Опере значение wheelDelta такое же, но с противоположным знаком
      if (window.opera) delta = -delta; // Дополнительно для Opera
    }
    else if (event.detail) { // Для Gecko
      delta = -event.detail / 3;
    }
    // Запрещаем обработку события браузером по умолчанию
    if (event.preventDefault) event.preventDefault();
    event.returnValue = false;
    //alert(delta); Выводим направление колёсика мыши
	
	if (delta>0 && window.menu>0){
	
	$('.slide2').animate({"top": "100%"}, 600,  'easeOutQuart', function() {
	var url="http://imedia.in.ua/main/pages/index";
	
	    window.location=url;
		  
    });
	
		
		
		
	}
	if (delta<0 && window.menu>0){
	
	$('#slide3').css('z-index','998')
	$('.slide2').animate({"top": "-100%"}, 600,  'easeOutQuart', function() {
	var url="http://imedia.in.ua/main/pages/packages";
	
	    window.location=url;
		  
    });
	
		
		
		
	}
	
	
  }
}
</script-->
</body>
</html>					
					
					
					

