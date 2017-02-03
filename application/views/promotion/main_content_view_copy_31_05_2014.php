<style>
#slide1{
position:absolute;
background-image:url(/img/tobest_back.jpg);
background-size:100%;
background-repeat:no-repeat;
z-index:998;
}
#slide2_img{ 
background-image:url(/img/Background_diagrams.png);
background-size:100%;
background-repeat:no-repeat;
z-index:998;
position:absolute;
width:100%;
height:100%;
overflow:hidden;
}
#slide2_content{
position:absolute;
width:100%;
height:100%;
overflow:hidden;
}
#slogan2{
position:absolute;
z-index:999;
background-image:url(/img/height.png);
background-size:100%;
background-repeat:no-repeat;
width:45%;
height:30%;
}
#birds_promo{
position:absolute;
z-index:999;
background-image:url(/img/birds_promo.png);
background-size:100%;
background-repeat:no-repeat;
width:35%;
height:100%;
}
</style>
<div id="content">
<div id="slide1"></div>

<div id="slide2_content" class="container_width">
		<div id="slogan2">
	
		</div>
		<div id="birds_promo">
	
		</div>
		<div id="slide2_img">
		<div id="promotion">
		<canvas id="canvas"> Браузер не поддерживает canvas</canvas>
		123
		</div>
		</div>	
</div>
</div>		
</div><!-- #wrapper -->
<script>
// обработчик события onload , литерал будет вызван после полной загрузки документа
//и построения его обьектной модели
  
/* window.onload = function (){
var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');
var context_a = canvas.getContext('2d');
//координаты центра окружности (распологается в центре холсте)
var x = canvas.width /2;
var y = canvas.height / 2;
 
//радиус 100px
var radius = 50;
 
//начальный и конечный углы (тригонометрия x_X)
var startAngle = 17*Math.PI/7;
var endAngle = 13*Math.PI/2.9;
var counterClockwise = false;//направление дуги. По умолчанию false

context.lineWidth = 22;
context.strokeStyle = 'rgba(255,255,255,1)';
 
//начало пути, рисуем круг с нашими параметрами и обводим
context.beginPath();
context.arc(x, y, radius, startAngle, endAngle, counterClockwise);
context.stroke();
var startAngle2 = 10*Math.PI/7;
var endAngle2 = 2*Math.PI/1.0;

var radius2 = 55;
 context_a.lineWidth = 8;
context_a.strokeStyle = 'rgba(204,0,65,1)';
 
//начало пути, рисуем круг с нашими параметрами и обводим
context_a.beginPath();
context_a.arc(x, y, radius2, startAngle2, endAngle2, counterClockwise);
context_a.stroke();

var radius2 = 45;
 context_a.lineWidth = 8;
context_a.strokeStyle = 'rgba(251,79,134,1)';
 
//начало пути, рисуем круг с нашими параметрами и обводим
context_a.beginPath();
context_a.arc(x, y, radius2, startAngle2, endAngle2, counterClockwise);
context_a.stroke();
//ширина и цвет круга





}
 */
// Moved these to global scope as you don't want to re-declare 
    // them in your draw method each time your animation loop runs
    var canvas = document.getElementById("canvas");
    var context = canvas.getContext("2d");
	canvas.style.width=600;
	canvas.style.height=300;
	canvas.width=1200;
	canvas.height=600;
    var x = canvas.width / 2;
    var y = canvas.height / 2;
    var radius = 150;

    // Use objects to hold our draw and erase props
    var drawProps = {
      startAngle: -90,
      speed: 2,
      color: 'black',
      counterClockwise: false,
      globalCompositeOperation: context.globalCompositeOperation,
      lineWidth: 22            
    };

    /* var eraseProps = {
      startAngle: 180,
      speed: -2,
      color: 'white',
      counterClockwise: true,
      globalCompositeOperation: "destination-out",
      lineWidth: 15 // artefacts appear unless we increase lineWidth for erase
    }; */

    // Let's work in degrees as they're easier for humans to understand
    var degrees = -90; 
    var props = drawProps;

    // start the animation loop
	
	setInterval(draw.bind(null,0), 10).queue(function() {alert()});
	
	
    function draw(as) { /***************/
		
        degrees += props.speed;
		if (degrees >= as) {
        return false;
		}
		else{
		
        context.beginPath();
        context.arc(
            x, 
            y, 
            radius, 
            getRadians(props.startAngle), 
            getRadians(degrees), 
            props.counterClockwise
        );
        context.lineWidth = props.lineWidth;
        context.strokeStyle = props.color;
        context.stroke();
		}
        // Start erasing when we hit 360 degrees
       /*  if (degrees >= 360) {
            context.closePath();
            props = eraseProps;
            context.globalCompositeOperation = props.globalCompositeOperation;
        }

        // Start drawing again when we get back to 0 degrees
        if (degrees <= 0) {
            canvas.width = canvas.width; // Clear the canvas for better performance (I think)
            context.closePath();
            props = drawProps;
            context.globalCompositeOperation = props.globalCompositeOperation;
        } */
        /************************************************/
    }  

    // Helper method to convert degrees to radians
    function getRadians(degrees) {
        return degrees * (Math.PI / 180);
    }
	
	function makeHighRes(c) {
    var ctx = c.getContext('2d');
    // finally query the various pixel ratios
    var devicePixelRatio = window.devicePixelRatio || 1;
    var backingStoreRatio = ctx.webkitBackingStorePixelRatio ||
        ctx.mozBackingStorePixelRatio ||
        ctx.msBackingStorePixelRatio ||
        ctx.oBackingStorePixelRatio ||
        ctx.backingStorePixelRatio || 1;
    var ratio = devicePixelRatio / backingStoreRatio;
    // upscale canvas if the two ratios don't match
    if (devicePixelRatio !== backingStoreRatio) {
    
        var oldWidth = c.width;
        var oldHeight = c.height;
        c.width = Math.round(oldWidth * ratio);
        c.height = Math.round(oldHeight * ratio);
        c.style.width = oldWidth + 'px';
        c.style.height = oldHeight + 'px';
        // now scale the context to counter
        // the fact that we've manually scaled
        // our canvas element
        ctx.scale(ratio, ratio);
    }
}


var a1=dojo.create('div',{id:"a1"},document.body);
var a2=dojo.create('div',{id:"a2"},document.body);
var a3=dojo.create('div',{id:"a3"},document.body);


var a=dojo.create('canvas', { width: "200", height: "100" },a1);
var b=dojo.create('canvas', { width: "200", height: "100" },a2);
var c=dojo.create('canvas', { width: "200", height: "100" },a3);


dojo.byId("d2").innerHTML="devicePixelRatio: "+window.devicePixelRatio;


makeHighRes(canvas);




// Red block (fudge factor)
for(var i=0; i<a.width; i++) {
    atx.fillRect( i, 0, 1.3, a.height );
}
// Blue block (intentional gaps)
for(var i=0; i<b.width/2; i++) {
    btx.fillRect( i*2, 0, 1, b.height );
}
// Green block (no fudge factor)
for(var i=0; i<c.width; i++) {
    ctx.fillRect( i, 0, 1, c.height );
}

</script>

<script>

var obj_width=$('#slide2_img').width();
var obj_height=$('#slide2_img').height();
var slogan_top=obj_height/58.0;
var slogan_left=obj_width/3.5;
$('#slogan2').css({left: slogan_left});
$('#slogan2').fadeIn();
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
	$('#slide2_content').animate({"top": "100%"}, 600,  'easeOutQuart', function() {
	var url="http://pasalskiy.com.ua/main/pages/packages";
	
	    window.location=url;
		  
    });
	
		
		
		
	}
	if (delta<0){
	$('#slide2_content').animate({"top": "-100%"}, 600,  'easeOutQuart', function() {
	var url="http://pasalskiy.com.ua/main/pages/promotion";
	
	    window.location=url;
		  
    });
	
		
		
		
	}
  }

</script>
</body>
</html>					
					
					
					

