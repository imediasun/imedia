
<style>
#content{
display:none;
}

</style>
<div class="wrapper">
<div id="content" class="container-fluid item">

<div class="row-fluid">	
<div id="slide1_a" class="container_width span12">
	
<div id="slogan">
	
	</div>
	<div id="logo">
	
	</div>
	<div id="slide_1_img">
		<div id="pages_btns">
			<div  class="container-fluid">
				<div class="row-fluid">
					<div class="adver_cont span4">
					<div id="img_propose"></div>
					
					<h3 class="promotion_h3"><p>Продвижение по Украине </p><p>и по всему миру</p></h3>
					<h3 class="yellow_h3">Исследовать как мы продвигаем ></h3>
					</div>
					<div class="adver_cont1 span4">
					<div id="img_adaptiv"></div>
					
					<h3 class="promotion_h3"><p>Адаптивный дизайн</p><p>и современная анимация</p></h3>
					<h3 class="yellow_h3_adaptiv">Какие технологии применяем ></h3>
					</div>
					<div class="adver_cont2 span4">
					<div id="img_portfolio"></div>
					<h3 class="promotion_h3"><p>Увлекательное портфолио</p><p>и последние работы</p></h3>
					<h3 class="red_h3_adaptiv">Какие технологии применяем ></h3>
					</div>
				</div>
			</div>
		</div>
		
		<!--canvas id="myCanvas1" style="float:right;cursor:pointer"></canvas-->
		
	<script>
	/* window.onload = function() {
		function inRad(num) {
    //я ведь говорил, что функция принимает угол в радианах?
    return num * Math.PI / 180;
}
      var canvas = document.getElementById('myCanvas1');
      
	  var cont_height=($(window).height())-200;
	  
	  var cont_width=($(window).width())/15;
	  var center_point=(cont_height/1.2)-50;
	canvas.width  = cont_width*2;
canvas.height = cont_height*2; 
canvas.style.width  = cont_width+'px';
canvas.style.height = cont_height+'px';
	var ctx = canvas.getContext('2d');
	ctx.fillStyle="red";
	ctx.strokeStyle='#fff';
	ctx.beginPath();
	ctx.lineTo(70, 40);
	ctx.lineTo(70, center_point);
	ctx.lineTo(140,center_point+70);
	ctx.lineTo(70,center_point+140);
	ctx.lineTo(70,cont_height*2);
	ctx.lineWidth = 5;
	ctx.stroke();
	
	ctx.fillStyle = "#ffF";
    ctx.strokeStyle = "#fff";
    ctx.font = "italic 25pt Arial";
	
    ctx.fillText("О Нас", 0, center_point+80);
    ctx.font = 'bold 30px sans-serif';
	
     ctx.stroke();
ctx.rotate(inRad(45));
	 } */
	</script>
	
				</div>
	
			</div>	
		</div ><!--row-fluid-->
	</div>
</div>

<script>
$('.adver_cont2').click(function(){
$('#slide1_a').animate({"top": "-100%"}, 600,  'easeOutQuart', function() {
var url="http://imedia.in.ua/main/pages/portfolio";
window.location=url;
		  
    });
})
$('.adver_cont').click(function(){
$('#slide1_a').animate({"top": "-100%"}, 600,  'easeOutQuart', function() {
var url="http://imedia.in.ua/main/pages/promotion";
window.location=url;
		  
    });
})
</script>
<script>
function start_page(){
$('#content').fadeIn(1000);
var obj_width=$('#slide_1_img').width();
var obj_height=$('#slide_1_img').height();
var logo_top=obj_height/3;
var slogan_top=obj_height/2.0;
var window_width=$(window).width();
var logo_left_after=window_width/4.5;
var logo_left=obj_width;
var slogan_left=obj_width/3.5;
$('#logo').css({top: logo_top, left: logo_left, position:'absolute'});
$('#slogan').css({top: slogan_top, left: slogan_left, position:'absolute'});
setTimeout(function(){
   $('#logo').animate({left: logo_left_after},600,'easeInOutBack')  
    }, 1000);

$('#slogan').fadeIn();}
</script>

<script>
 /* if (window.menu>0 ){
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
    // alert(delta); Выводим направление колёсика мыши
	if (delta<0 && window.menu>0){
	$('#slide1_a').animate({"top": "-100%"}, 600,  'easeOutQuart', function() {
	
	var url="http://imedia.in.ua/main/pages/portfolio";
	
	    window.location=url;
		  
    });
	
		
		
		
	}
  }
} */
</script>
</body>
</html>					
					
					
					

