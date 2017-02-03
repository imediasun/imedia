<style>
#slide1{
position:absolute;
background-image:url(/img/tobest_back.jpg);
background-size:100%;
background-repeat:no-repeat;
z-index:998;
}
#content{
display:none;
overflow:hidden;
}
#slide2_content{
z-index:999;
position:absolute;
width:100%;
height:100%;
overflow:hidden;
}
#slide2_img{
position:absolute;
width:100%;
height:100%;
overflow:hidden;
background-image:url(/img/Background_diagrams_left.png);
background-size:100%;
background-repeat:no-repeat;
z-index:997;
}
#slogan2{
position:absolute;
z-index:999;
background-image:url(/img/height.png);
background-size:100%;
background-repeat:no-repeat;
width:45%;
height:30%;
display:none;
}
#hands{
position:absolute;
z-index:999;
background-image:url(/img/hands_diagrams_left.png);
background-size:100%;
background-repeat:no-repeat;
width:100%;
height:100%;
top:0px;
left:0px;
display:none;
}
#birds_promo{
position:absolute;
z-index:999;
background-image:url(/img/birds_promo_right.png);
background-size:100%;
background-repeat:no-repeat;
width:35%;
height:100%;
right:0px;
}

</style>
<div id="content">

<div id="slide2_content" class="container_width">
<h1 id="last_works_header" class="medium_header">Graphic front-end design</h1>
<div class="promotion_menu">
<ul class="nav-list">


	<li class="nav-item">
		<a href="/ixo/" data-title="О компании" class="nav-link is-active">    
		<i style="transform: matrix(1, 0, 0, 1, 0, 0);" class="i dot"></i>
		<span class="nav-label">infographics</span>
		</a>
	</li>

	<li class="nav-item">
		<a href="/resanova/" data-title="Resanova" class="nav-link">
		<i style="transform: matrix(0.65, 0, 0, 0.65, 0, 0);" class="i dot"></i>
		<span class="nav-label">Usability</span>
		</a>
	</li>

	<li class="nav-item">
		<a href="/rose-caramelle/" data-title="Rose Caramelle" class="nav-link">
		<i style="transform: matrix(0.65, 0, 0, 0.65, 0, 0);" class="i dot"></i>
		<span class="nav-label">Graphisc systems</span>
		</a>
	</li>

	<li class="nav-item">
		<a href="/spurgin/" data-title="Spurgin" class="nav-link">
		<i style="transform: matrix(0.65, 0, 0, 0.65, 0, 0);" class="i dot"></i>
		<span class="nav-label">Promotion</span>
		</a>
	</li>

	<li class="nav-item">
			<a href="/amr/" data-title="AMR" class="nav-link">
			<i style="transform: matrix(0.65, 0, 0, 0.65, 0, 0);" class="i dot"></i>
			<span class="nav-label">Clients psrt architecture</span>
			</a>
	</li>

	<li class="nav-item">
		<a href="/923a/" data-title="923a" class="nav-link">
		<i style="transform: matrix(0.65, 0, 0, 0.65, 0, 0);" class="i dot"></i>
		<span class="nav-label">Pay systems vision design</span>
		</a>
	</li>

	<li class="nav-item">
		<a href="/agence-immo/" data-title="L’agence Immo" class="nav-link">
		<i style="transform: matrix(0.65, 0, 0, 0.65, 0, 0);" class="i dot"></i>
		<span class="nav-label">Individual Web sites design</span>
		</a>
	</li>

	<li class="nav-item">
		<a href="/pshiiit/" data-title="Pshiiit" class="nav-link">
		<i style="transform: matrix(0.65, 0, 0, 0.65, 0, 0);" class="i dot"></i>
		<span class="nav-label">Creative vision technical mind comunications</span>
		</a>
	</li>

	<li class="nav-item">
		<a href="/pshiiit/" data-title="Pshiiit" class="nav-link">
		<i style="transform: matrix(0.65, 0, 0, 0.65, 0, 0);" class="i dot"></i>
		<span class="nav-label">Pairing technology and visual advertising sales</span>
		</a>
	</li>
	

</ul>
</div>
		
			
		
		<canvas id="canvas"> Браузер не поддерживает canvas</canvas>
		<div id="promotion">
		
		<h1 style="position:absolute;z-index:9999999;" id="percent">0%</h1>
		<div id="hands">
	
		</div>
		<div style = "position:absolute;left:5%;top:0;bottom:0;right:5%;z-index:999;box-shadow:0 1px 10px #000, inset 0 0px 0px 1px #eee;border-radius:4px;">
            <canvas id="myCanvas1" width="800" height="800"></canvas>
        </div>
		
		
		</div>
			
<div id="slide2_img">
</div>

</div>		
</div><!-- #wrapper -->

<script>
function start_page() {

$('#content').fadeIn(1000).queue(function() {
setTimeout(function(){


 var a = new Lyne.Graph([ 380, 660, 320, 1760, 2090 , 440, 2090, 5280 ],
	  document.getElementById('myCanvas1'))
	  

      var canvas = document.getElementById('canvas');
      var context = canvas.getContext('2d');
	  var window_width=$(window).width();
	  var window_height=$(window).height();
	  var width=window_width/6.2
	  canvas.style.width=width;
	canvas.style.height=(width)/2;
	canvas.width=(width)*2;
	canvas.height=(width*2)/2;
	/* $('#canvas').css('left',width/1.175).css('top',width/0.7245); */
	$('#percent').css('left',width/0.587).css('top',width/0.57);
      var x = canvas.width /2;
      var y = canvas.height / 2;
       
      var counterClockwise = false;
	  var run_wight = function() {
	  var radius =width/2.9;
        var time = (new Date().getTime()- startTime)/ duration;
        var startAngle = getRadians(-90);
        var endAngle = getRadians(360);
        context.lineWidth = width/120;
        context.strokeStyle = 'rgba(255,255,255,1)';
        if(time < 1) {requestAnimationFrame(run_wight);
          endAngle = startAngle +(endAngle - startAngle)* time;
        }
        else {
          duration = 500,
          startTime = new Date().getTime();
		  run_malin();
        };
        
        context.beginPath();
		context.lineWidth = width/120;
		context.strokeStyle = 'rgba(255,255,255,1)';
		context.arc(x, y, radius, startAngle, endAngle, counterClockwise);
        context.stroke();
      };
      var run_malin = function() {
        var time = (new Date().getTime()- startTime)/ duration;
		var radius = width/2.56; 
        var startAngle = getRadians(-89);
        var endAngle = getRadians(-1);
        context.strokeStyle = 'rgba(229,14,86,1)';
		context.lineWidth = width/18;
        if(time < 1) {requestAnimationFrame(run_malin);
          endAngle = startAngle +(endAngle - startAngle)* time;
        }
        else {
          duration = 500,
          startTime = new Date().getTime();
		
          run_malin_light();
        };
        
		context.beginPath();
		context.lineWidth = width/18;
		 context.strokeStyle = 'rgba(229,14,86,1)';
        context.arc(x, y, radius, startAngle, endAngle, counterClockwise);
        context.stroke();
      };
	    var run_malin_light = function() {
        var time = (new Date().getTime()- startTime)/ duration;
		var radius = width/3.30; 
        var startAngle = getRadians(-89);
        var endAngle = getRadians(-1);
        context.strokeStyle = 'rgba(224,70,129,1)';
		context.lineWidth = width/18;
        if(time < 1) {requestAnimationFrame(run_malin_light);
          endAngle = startAngle +(endAngle - startAngle)* time;
        }
        else {
          duration = 500,
          startTime = new Date().getTime();
		
          run_green();
        };
        
		context.beginPath();
		context.lineWidth = width/18;
		 context.strokeStyle = 'rgba(224,70,129,1)';
        context.arc(x, y, radius, startAngle, endAngle, counterClockwise);
        context.stroke();
      };
       var run_green = function() {
        var time = (new Date().getTime()- startTime)/ duration;
		var radius = width/2.56; 
        var startAngle = getRadians(2);
        var endAngle = getRadians(47);
        context.strokeStyle = 'rgba(71,155,16,1)';
		context.lineWidth =width/18;
        if(time < 1) {requestAnimationFrame(run_green);
          endAngle = startAngle +(endAngle - startAngle)* time;
        }
        else {
          duration = 500,
          startTime = new Date().getTime();
		
          run_green_light();
        };
        
		context.beginPath();
		context.lineWidth = width/18;
		 context.strokeStyle = 'rgba(71,155,16,1)';
        context.arc(x, y, radius, startAngle, endAngle, counterClockwise);
        context.stroke();
      };
	   var run_green_light = function() {
        var time = (new Date().getTime()- startTime)/ duration;
		var radius = width/3.30; 
        var startAngle = getRadians(2);
        var endAngle = getRadians(47);
        context.strokeStyle = 'rgba(71,155,16,1)';
		context.lineWidth = width/18;
        if(time < 1) {requestAnimationFrame(run_green_light);
          endAngle = startAngle +(endAngle - startAngle)* time;
        }
        else {
          duration = 500,
          startTime = new Date().getTime();
		
          run_blue();
        };
        
		context.beginPath();
		context.lineWidth = width/18;
		 context.strokeStyle = 'rgba(71,155,16,1)';
        context.arc(x, y, radius, startAngle, endAngle, counterClockwise);
        context.stroke();
      };
	     var run_blue = function() {
        var time = (new Date().getTime()- startTime)/ duration;
		var radius = width/2.56; 
        var startAngle = getRadians(49);
        var endAngle = getRadians(138);
        context.strokeStyle = 'rgba(47,173,244,1)';
		context.lineWidth = width/18;
        if(time < 1) {requestAnimationFrame(run_blue);
          endAngle = startAngle +(endAngle - startAngle)* time;
        }
        else {
          duration = 500,
          startTime = new Date().getTime();
		
          run_blue_light();
        };
        
		context.beginPath();
		context.lineWidth = width/18;
		 context.strokeStyle = 'rgba(47,173,244,1)';
        context.arc(x, y, radius, startAngle, endAngle, counterClockwise);
        context.stroke();
      };
	     var run_blue_light = function() {
        var time = (new Date().getTime()- startTime)/ duration;
		var radius = width/3.30; 
        var startAngle = getRadians(49);
        var endAngle = getRadians(138);
        context.strokeStyle = 'rgba(114,173,192,1)';
		context.lineWidth = width/18;
        if(time < 1) {requestAnimationFrame(run_blue_light);
          endAngle = startAngle +(endAngle - startAngle)* time;
        }
        else {
          duration = 300,
          startTime = new Date().getTime();
		
          run_brown();
        };
        
		context.beginPath();
		context.lineWidth = width/18;
		 context.strokeStyle = 'rgba(114,173,192,1)';
        context.arc(x, y, radius, startAngle, endAngle, counterClockwise);
        context.stroke();
      };
	     var run_brown = function() {
        var time = (new Date().getTime()- startTime)/ duration;
		var radius = width/2.56; 
        var startAngle = getRadians(140);
        var endAngle = getRadians(160);
        context.strokeStyle = 'rgba(130,33,4,1)';
		context.lineWidth = width/18;
        if(time < 1) {requestAnimationFrame(run_brown);
          endAngle = startAngle +(endAngle - startAngle)* time;
        }
        else {
          duration = 300,
          startTime = new Date().getTime();
		
          run_brown_light();
        };
        
		context.beginPath();
		context.lineWidth = width/18;
		 context.strokeStyle = 'rgba(130,33,4,1)';
        context.arc(x, y, radius, startAngle, endAngle, counterClockwise);
        context.stroke();
      };
	     var run_brown_light = function() {
        var time = (new Date().getTime()- startTime)/ duration;
		var radius = width/3.30; 
        var startAngle = getRadians(140);
        var endAngle = getRadians(160);
        context.strokeStyle = 'rgba(188,51,19,1)';
		context.lineWidth = width/18;
        if(time < 1) {requestAnimationFrame(run_brown_light);
          endAngle = startAngle +(endAngle - startAngle)* time;
        }
        else {
          duration = 500,
          startTime = new Date().getTime();
		
          run_orange();
        };
        
		context.beginPath();
		context.lineWidth = width/18;
		 context.strokeStyle = 'rgba(188,51,19,1)';
        context.arc(x, y, radius, startAngle, endAngle, counterClockwise);
        context.stroke();
      };
	       var run_orange = function() {
        var time = (new Date().getTime()- startTime)/ duration;
		var radius = width/2.56; 
        var startAngle = getRadians(162);
        var endAngle = getRadians(198);
        context.strokeStyle = 'rgba(209,138,50,1)';
		context.lineWidth = width/18;
        if(time < 1) {requestAnimationFrame(run_orange);
          endAngle = startAngle +(endAngle - startAngle)* time;
        }
        else {
          duration = 500,
          startTime = new Date().getTime();
		
          run_orange_light();
        };
        
		context.beginPath();
		context.lineWidth = width/18;
		 context.strokeStyle = 'rgba(209,138,50,1)';
        context.arc(x, y, radius, startAngle, endAngle, counterClockwise);
        context.stroke();
      };
	       var run_orange_light = function() {
        var time = (new Date().getTime()- startTime)/ duration;
		var radius = width/3.30; 
        var startAngle = getRadians(162);
        var endAngle = getRadians(198);
        context.strokeStyle = 'rgba(232,177,16,1)';
		context.lineWidth = width/18;
        if(time < 1) {requestAnimationFrame(run_orange_light);
          endAngle = startAngle +(endAngle - startAngle)* time;
        }
        else {
          duration = 500,
          startTime = new Date().getTime();
		
          run_dark_blue();
        };
        
		context.beginPath();
		context.lineWidth = width/18;
		 context.strokeStyle = 'rgba(232,177,16,1)';
        context.arc(x, y, radius, startAngle, endAngle, counterClockwise);
        context.stroke();
      };
	  	var run_dark_blue = function() {
        var time = (new Date().getTime()- startTime)/ duration;
		var radius = width/2.56; 
        var startAngle = getRadians(200);
        var endAngle = getRadians(240);
        context.strokeStyle = 'rgba(36,60,89,1)';
		context.lineWidth = width/18;
        if(time < 1) {requestAnimationFrame(run_dark_blue);
          endAngle = startAngle +(endAngle - startAngle)* time;
        }
        else {
          duration = 500,
          startTime = new Date().getTime();
		
          run_dark_blue_light();
        };
        
		context.beginPath();
		context.lineWidth = width/18;
		 context.strokeStyle = 'rgba(36,60,89,1)';
        context.arc(x, y, radius, startAngle, endAngle, counterClockwise);
        context.stroke();
      };
	    var run_dark_blue_light = function() {
        var time = (new Date().getTime()- startTime)/ duration;
		var radius = width/3.30; 
        var startAngle = getRadians(200);
        var endAngle = getRadians(240);
        context.strokeStyle = 'rgba(96,187,239,1)';
		context.lineWidth = width/18;
        if(time < 1) {requestAnimationFrame(run_dark_blue_light);
          endAngle = startAngle +(endAngle - startAngle)* time;
        }
        else {
          duration = 500,
          startTime = new Date().getTime();
		
          run_yellow();
        };
        
		context.beginPath();
		context.lineWidth = width/18;
		 context.strokeStyle = 'rgba(96,187,239,1)';
        context.arc(x, y, radius, startAngle, endAngle, counterClockwise);
        context.stroke();
      };
	     var run_yellow = function() {
        var time = (new Date().getTime()- startTime)/ duration;
		var radius = width/2.56; 
        var startAngle = getRadians(242);
        var endAngle = getRadians(267);
        context.strokeStyle = 'rgba(233,185,14,1)';
		context.lineWidth = width/18;
        if(time < 1) {requestAnimationFrame(run_yellow);
          endAngle = startAngle +(endAngle - startAngle)* time;
        }
        else {
          duration = 500,
          startTime = new Date().getTime();
		
          run_yellow_light();
        };
        
		context.beginPath();
		context.lineWidth = width/18;
		 context.strokeStyle = 'rgba(233,185,14,1)';
        context.arc(x, y, radius, startAngle, endAngle, counterClockwise);
        context.stroke();
      };
	   function run_yellow_light()
      {
        var time = (new Date().getTime()- startTime)/ duration;
        var startAngle = getRadians(242);
        var endAngle = getRadians(267);
		 var radius = width/3.30;
		 context.strokeStyle = 'rgba(247,220,132,1)';
        context.lineWidth = width/18;
     
        if(time < 1) {requestAnimationFrame(run_yellow_light);
          endAngle = startAngle +(endAngle - startAngle)* time;
        };
        
		context.beginPath();
		 context.strokeStyle = 'rgba(247,220,132,1)';
        context.arc(x, y, radius, startAngle, endAngle, counterClockwise);
        context.stroke();
       
      }
      var duration = 1000,
      startTime = new Date().getTime();
      run_wight();
	  $(function ()
    { var percent_func = function(percent, time) {
    $('#percent').prop({numberValue: percent}).animate({numberValue: 100}, {
    duration: time,
    easing: 'linear',
    step: function(a, b) {
    $(this).text((b.now|0) + ' %');
    }
})}
 
  percent_func(0, 7300);
 
})
	  
	 function getRadians(degrees) {
        return degrees * (Math.PI / 180);
    }
    $('#hands').fadeIn(1000);
	}, 500);});
}

</script>

<script>

var obj_width=$(window).width();
var obj_height=$(window).height();
var slogan_top=obj_height/58.0;
var slogan_left=obj_width/3.5;
$('#slogan2').css({left: slogan_left});
setTimeout(function(){
$('#slogan2').fadeIn();
}, 4500);
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
}
</script-->
</body>
</html>					
					
					
					

