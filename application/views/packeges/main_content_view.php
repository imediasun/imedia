<style>
#slide1{
background:rgb(255,95,64);
z-index:998;
}
#slide3{
background:#3399ff;
z-index:997;
}
#slide2_content{
background-image:url(/img/tobest_back.jpg);
background-size:100%;
background-repeat:no-repeat;
z-index:999;
position:absolute;
width:100%;
height:100%;
overflow:hidden;
}
#content{display:none;
overflow:hidden;}






</style>

<div id="content" class="container-fluid">
<div class="row-fluid">
<div id="slide2_content" class="container_width span12">
		<div id="packages">
		<div class="container-fluid" style="height:inherit;">
			<div class="row-fluid" id="pack_block">
			
				<div id="package1" class="pack_class span3">
				<div class="price_bird_block">
					<img class="bird_pack" src="/img/bird1_pack.png">
					<h1 class="middle_header" >Визитка</h1>
					<div class="price_block">
					<h1 class="middle_header" >от 270$</h1>
					</div>
					</div>
				</div>
				<div id="package2" class="pack_class span3">
				<div class="price_bird_block">
					<img class="bird_pack" src="/img/bird2_pack.png">
					<h1 class="middle_header">Корпоративный</h1>
					<div class="price_block">
					<h1 class="middle_header" >от 670$</h1>
					</div>
				</div>
				</div>
				<div id="package3" class="pack_class span3">
				<div class="price_bird_block">
					<img class="bird_pack" src="/img/bird3_pack.png">
					<h1 class="middle_header" >Интернет магазин</h1>
					<div class="price_block">
					<h1 class="middle_header" >от 800$</h1>
					</div>
				</div>
				</div>
				<div id="package4" class="pack_class span3">
				<div class="price_bird_block">
					<img class="bird_pack" src="/img/bird4_pack.png">
					<h1 class="middle_header">Индивидуальный</h1>
					<div class="price_block">
					<h1 class="middle_header" >от 1500$</h1>
					</div>
				</div>
				</div>
			</div>
		
		
		</div>
		
		</div>
<div class="button_long">Выбрать готовый сайт дешевле</div>
<div class="button">Закажите свой сайт</div>			
</div>
</div>
</div>		
</div><!-- #wrapper -->

<script>
function start_page() {
$('#content').fadeIn(1000);
setTimeout(function(){

  

$('#package1').animate({"height":'+=75%'}, 600,  'easeInOutBack').queue(function() {
$('#package3').animate({"height":'+=80%'}, 800,  'easeInOutBack').queue(function() {
$('#package2').animate({"height":'+=70%'}, 500,  'easeInOutBack').queue(function() {
$('#package4').animate({"height":'+=80%'}, 400,  'easeInOutBack');

$('.price_bird_block').fadeIn();
$('.price_block').animate({"width":'+=100%'}, 400,  'easeInOutBack'); 
$('.pack_class').mouseover(function(){
$(this).css('background','rgba(247,199,104,1)');
$(this).find('.price_block').css('background','#33cccc')
})
$('.pack_class').mouseleave(function(){
$(this).css('background','rgba(247,199,104,0.6)');
$(this).find('.price_block').css('background','#19b2f6')
})
});
});
});
  }, 1000);
$('.pack_class').mouseover(function(){
$(this).css('background','rgba(247,199,104,1)');
})
$('.pack_class').mouseleave(function(){
$(this).css('background','rgba(247,199,104,0.6)');
})
}
</script>


<script>

</script>

<script>
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
	$('#slide2_content').animate({"top": "100%"}, 600,  'easeOutQuart', function() {
	var url="http://imedia.in.ua/main/pages/portfolio";
	
	    window.location=url;
		  
    });
	
		
		
		
	}
	if (delta<0 && window.menu>0){
	$('#slide3').css('z-index','998');
	$('#slide2_content').animate({"top": "-100%"}, 600,  'easeOutQuart', function() {
	var url="http://pasalskiy.com.ua/main/pages/promotion";
	
	    window.location=url;
		  
    });
	
		
		
		
	}
  }
}
</script>
</body>
</html>					
					
					
					

