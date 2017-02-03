<div id="content">
<div id="slide1"></div>

<div id="slide2" class="container_width">
		<div id="packages">
		<div class="container-fluid" style="height:inherit;">
			<div class="row-fluid" id="pack_block">
			
				<div id="package1" class="pack_class span3">
				<div class="price_bird_block">
					<img class="bird_pack" src="/img/bird1_pack.png">
					<h1 class="middle_header" style="padding:30px">Визитка</h1>
					<div class="price_block">
					<h1 class="middle_header" style="padding:30px">от 270$</h1>
					</div>
					</div>
				</div>
				<div id="package2" class="pack_class span3">
				<div class="price_bird_block">
					<img class="bird_pack" src="/img/bird2_pack.png">
					<h1 class="middle_header">Корпаротивный</h1></div>
					<div class="price_block">
					<h1 class="middle_header" style="padding:30px">от 770$</h1>
					</div>
				</div>
				<div id="package3" class="pack_class span3">
				<div class="price_bird_block">
					<img class="bird_pack" src="/img/bird3_pack.png">
					<h1 class="middle_header" style="padding:30px">Интернет магазин</h1></div>
					<div class="price_block">
					<h1 class="middle_header" style="padding:30px">от 800$</h1>
					</div>
				</div>
				<div id="package4" class="pack_class span3">
				<div class="price_bird_block">
					<img class="bird_pack" src="/img/bird4_pack.png">
					<h1 class="middle_header">Индивидуальный</h1></div>
					<div class="price_block">
					<h1 class="middle_header" style="padding:30px">от 1700$</h1>
					</div>
				</div>
			</div>
		
		<div class="row-fluid" id="proposition_block">
		<div id="price_proposition_header" class="span6">
		<h1 class="big_header" style="position:relative;">ОСНОВНЫЕ ЦЕНОВЫЕ<br> ПРЕДЛОЖЕНИЯ</h1>
		</div>
		</div>
		</div>
		
		</div>
			
</div>
</div>		
</div><!-- #wrapper -->
<style>
#slide1{
background:rgb(255,95,64);

z-index:998;
}
#slide2{
background-image:url(/img/tobest_back.jpg);
background-size:100%;
z-index:997;
background-repeat:no-repeat;
z-index:999;
}
</style>
<script>
$('#package1').animate({"height":'+=65%'}, 600,  'easeInOutBack').queue(function() {
$('#package3').animate({"height":'+=85%'}, 800,  'easeInOutBack').queue(function() {
$('#package2').animate({"height":'+=65%'}, 500,  'easeInOutBack').queue(function() {
$('#package4').animate({"height":'+=70%'}, 400,  'easeInOutBack');
$('#proposition_block').animate({"margin-left":'+=100%'}, 400,  'easeInOutBack');
$('.price_bird_block').fadeIn();
});
});
});

</script>


<script>


</script>

<script>


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
	if (delta>0){
	$('#slide2').animate({"top": "100%"}, 600,  'easeOutQuart', function() {
	var url="http://pasalskiy.com.ua/main/pages/portfolio";
	
	    window.location=url;
		  
    });
	
		
		
		
	}
	if (delta<0){
	$('#slide2').animate({"top": "-100%"}, 600,  'easeOutQuart', function() {
	var url="http://pasalskiy.com.ua/main/pages/packeges";
	
	    window.location=url;
		  
    });
	
		
		
		
	}
  }

</script>
</body>
</html>					
					
					
					

