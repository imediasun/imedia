

<div id="slide2_content" class="container_width">

		
		
			
		
		
<div id="promotion">
		<div id="phone">
		<h3 class="phone">+380(96)544-11-20</h3>
		
		</div>
		<div id="social">
		<div id="facebook">
		</div>
		<div id="google">
		</div>
		<div id="youtube">
		</div>
		<div id="skype">
		
		</div>
		
		</div>
	</div>		
		<div style = "position:absolute;left:0;top:0;bottom:0;right:0;z-index:999;">
        <div id="dove"></div>
		
		<div class="fs-form-wrap" id="fs-form-wrap" style="top:0px;left:0px;overflow-y:auto;height:100%">
				<form id="myform" class="fs-form fs-form-full" autocomplete="off" method="post" action="/contacts_action">
					<ol class="fs-fields">
						<li>
							<label class="fs-field-label fs-anim-upper" for="q1">Как Ваше имя?</label>
							<input class="fs-anim-lower" id="q1" name="q1" type="text" placeholder="Dean Moriarty" required/>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q1">Какой у Вас номер телефона?</label>
							<input class="fs-anim-lower" id="q2" name="q2" type="text" placeholder="777-77-77" required/>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q2" data-info="Мы не будем отправлять Вам спам...">Какой Ваш email адрес?</label>
							<input class="fs-anim-lower" id="q3" name="q3" type="email" placeholder="dean@road.us" required/>
						</li>
						<!--li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" for="q3" data-info="Это поможет нам понять какой сайт Вы хотите">Для чего Вам Ваш новый веб сайт?</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="q3b" name="q3" type="radio" value="conversion"/><label for="q3b" class="radio-conversion">Продажа товаров</label></span>
								<span><input id="q3c" name="q3" type="radio" value="social"/><label for="q3c" class="radio-social">Увеличить популярность</label></span>
								<span><input id="q3a" name="q3" type="radio" value="mobile"/><label for="q3a" class="radio-mobile">Информировать общественность</label></span>
							</div>
						</li>
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" data-info="We'll make sure to use it all over">Какой цвет из этой цветовой гаммы Вы выбираете.</label>
							<select class="cs-select cs-skin-boxes fs-anim-lower">
								<option value="" disabled selected>Pick a color</option>
								<option value="#588c75" data-class="color-588c75">#588c75</option>
								<option value="#b0c47f" data-class="color-b0c47f">#b0c47f</option>
								<option value="#f3e395" data-class="color-f3e395">#f3e395</option>
								<option value="#f3ae73" data-class="color-f3ae73">#f3ae73</option>
								<option value="#da645a" data-class="color-da645a">#da645a</option>
								<option value="#79a38f" data-class="color-79a38f">#79a38f</option>
								<option value="#c1d099" data-class="color-c1d099">#c1d099</option>
								<option value="#f5eaaa" data-class="color-f5eaaa">#f5eaaa</option>
								<option value="#f5be8f" data-class="color-f5be8f">#f5be8f</option>
								<option value="#e1837b" data-class="color-e1837b">#e1837b</option>
								<option value="#9bbaab" data-class="color-9bbaab">#9bbaab</option>
								<option value="#d1dcb2" data-class="color-d1dcb2">#d1dcb2</option>
								<option value="#f9eec0" data-class="color-f9eec0">#f9eec0</option>
								<option value="#f7cda9" data-class="color-f7cda9">#f7cda9</option>
								<option value="#e8a19b" data-class="color-e8a19b">#e8a19b</option>
								<option value="#bdd1c8" data-class="color-bdd1c8">#bdd1c8</option>
								<option value="#e1e7cd" data-class="color-e1e7cd">#e1e7cd</option>
								<option value="#faf4d4" data-class="color-faf4d4">#faf4d4</option>
								<option value="#fbdfc9" data-class="color-fbdfc9">#fbdfc9</option>
								<option value="#f1c1bd" data-class="color-f1c1bd">#f1c1bd</option>
							</select>
						</li-->
						<li>
							<label class="fs-field-label fs-anim-upper" for="q4">Опишите каким бы Вы хотели видеть Ваш новый веб сайт</label>
							<textarea class="fs-anim-lower" id="q4" name="q4" placeholder="Describe here"></textarea>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q5">Какой у Вас бюджет на сайт?</label>
							<input class="fs-mark fs-anim-lower" id="q5" name="q5" type="number" placeholder="1000" step="10" min="100"/>
						</li>
					</ol><!-- /fs-fields -->
					<button class="fs-submit" type="submit">Отправить</button>
				</form><!-- /fs-form -->
				</div><!-- /fs-form-wrap -->
		
        </div>
	


</div>		

<script>
			(function() {
				var formWrap = document.getElementById( 'fs-form-wrap' );

				[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
					new SelectFx( el, {
						stickyPlaceholder: false,
						onChange: function(val){
							document.querySelector('span.cs-placeholder').style.backgroundColor = val;
						}
					});
				} );

				new FForm( formWrap, {
					onReview : function() {
					alert()
						/* classie.add( document.body, 'overview' ); */ // for demo purposes only
					}
				} );
			})();
		</script>


<script>
function start_page() {

$('#content').fadeIn(1000)

}

</script>



<script>
/*  if (window.menu>0 ){
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
	var url="http://imedia.in.ua/main/pages/packages";
	
	    window.location=url;
		  
    });
	
		
		
		
	}
	if (delta<0 && window.menu>0){
	$('#slide2_content').animate({"top": "-100%"}, 600,  'easeOutQuart', function() {
	var url="http://imedia.in.ua/main/pages/promotion";
	
	    window.location=url;
		  
    });
	
		
		
		
	}
  }
} */
</script>
</body>
</html>					
					
					
					

