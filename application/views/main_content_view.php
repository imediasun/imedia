<div id="slide2" class="container_width">
			
</div>
<div id="slide1" style="" class="container_width">
	<div class="container-fluid">
		<div  class="row-fluid">
		
		
		</div> 		
				
				
			
		
	</div>		
</div>					
</div><!-- #wrapper -->
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
    // alert(delta); Выводим направление колёсика мыши
	if (delta<0){
	$('#slide1').animate({"top": "-100%"},  'easeOutQuart');
	    $('#slide2').animate({"top": "0"},  'easeOutQuart', function() {
      self.unfreeze();
	    });
	}
  }

</script>
</body>
</html>					
					
					
					

