

<div id="wrapper">
<div id="content">
<div class="container">

<div class="row">
<div class="span12" id="main_content">

<div class="top_elem"></div>
<div class="info_button"></div>
<div class="info_block">

<h3 class="head_kved" style="color:#cc0033">Информация о методах которыми мы будем продвигать Ваш сайт</h3>
<ul>
<li><h6 class="leters_thin">Каждый запрос продвигается вручную опытными специалистами.</h6>
<li><h6 class="leters_thin">Всегда используется статейное,ссылочное социальное и медиа продвижение.</h6>
<li><h6 class="leters_thin">Мы гарантируем профессиональный подход к каждому поисковому запросу, 
но не можем гарантировать позицию вашего сайта, так как позиция зависит от многих факторов.</h6>
<li><h6 class="leters_thin">Сумма за позицию сайта приведена для информации.Это тот бюджет который по нашему профессиональному мнению приблизит вас к выбранной позиции за указанный срок.
Но Ваши конкуренты могут в то же время производить действия по увеличению своих позиций</h6>
<li><h6 class="leters_thin">Все эти факторы учтены при рекомендации суммы которую Вам следует потратить на продвижение и контекстную рекламу.</h6>
<li><h6 class="leters_thin">Вы можете и увеличить расходуемый бюджет это даст вам более высокие шансы перед вашими конкурентами.</h6>
<li><h6 class="leters_thin">В указанную сумму не входят изменения Вашего сайта, 
но Вы обязательно получите от нас рекомендации по работе над ним и цены по которым сделаем это мы.
Вполне возможно Вам даже понадобится новый сайт(не обязательно дорогой) чтобы напрасно не тратить деньги на продвижение ежемесячно.Вы получите рекомендации но сначала оформите запрос.</h6>
</ul>
</div>



<div id="keywords_block">
	
	<h3 class="head_kved">Введите минимум 5 поисковых ключевых запросов по которым хотите чтобы находили Вас клиенты</h3>
	<h6 class="leters">Каждый новый запрос с новой строки без запятых</h6>
	<textarea style="width: 100%" id="search_list" rows="6"></textarea>
	<h3 class="head_kved">Введите имя домена вашего сайта без www</h3>
	<input style="width: 45%" id="url">
	
	<div id="check" class="button" style="height:20px;width:100px;left:450px">Проверить</div>
	<div class="button_long" style="height:20px;width:200px;left:650px">У меня нет сайта, заказать.</div>
</div>

<div class="result_block">

	<div class="domen"></div>
	<div id="query_block"></div>
	<div class="competitors"></div>
</div>

</div><!-- #content-->
</div>
<div class="row main_adver_promotion_block">
	<div class="span4 adver_block">
		<div class="block_line" id="block_line_1" >
		
		</div>  
	<img class="shadow" src="/img/shadow.png">
	</div>		
	<div class="span4 adver_block">
	<img class="shadow" src="/img/shadow.png">
	</div>	
	<div class="span4 adver_block">
	<img class="shadow" src="/img/shadow.png">
	</div>	
</div>
<div class="prosloyka">

</div> 
</div><!-- #container-->
</div>
<script>
$('.info_button').mouseover(function(){
$('.info_block').fadeIn().stop(true,true);
});
$('.info_button').mouseleave(function(){
$('.info_block').fadeOut().stop(true,true);
});
</script>
<script>
function get_price(i){
var base_price;
if (i>=15){
base_price=300;
}
if (i>0 && i<=5){
base_price=1000;
}
if (i>5 && i<=10){
base_price=700;
}
if (i>10 && i<15){
base_price=550;
}
var price=base_price;
return price;
}
function get_pr2(url,i,c){
var base_price = get_price(c);
	$.ajax(
		{
			url: '/checker/worker.php?service=pr2&url=' + url,
			dataType: 'text',
			success: 
				function(data){
				
				var pr;
				var price;
				if (data<=1){
				pr=base_price+(data*100);}
				if (data==2){
				pr=base_price+(data*100);}
				if (data==3){
				pr=base_price+(data*100);}
				if (data==4){
				pr=base_price+(data*250);}
				if (data==5){
				pr=base_price+(data*300);}
				if (data==6){
				pr=base_price+(data*350);}
				if (data==7){
				pr=base_price+(data*450);}
				if (data==8){
				pr=base_price+(data*650);}
				if (data>=9){
				pr=base_price+(data*1350);}
				price=pr
				data.length ? $('#glue_cy_' + i).html(price+'<span>грн.</span>') : $('#glue_cy_' + i).html('N/A');
				
				},
			error:
				function(){
					
				}
		
		}
		
	);

}


function get_cy(url,i){
	$.ajax(
		{
			url: '/checker/worker.php?service=cy&url=' + url,
			dataType: 'text',
			success: 
				function(data,textStatus){
					data.length ? $('#cy_' + i).html(data) : $('#cy_' + i).html('N/A');
				},
			error:
				function(){
					$('#cy_' + i).html('<font color="red">Ошибка</font>');
				}
		}
	);
}

function get_pr(url,i){
	$.ajax(
		{
			url: '/checker/worker.php?service=pr&url=' + url,
			dataType: 'text',
			success: 
				function(data,textStatus){
					data.length ? $('#pr_' + i).html(data) : $('#pr_' + i).html('N/A');
				},
			error:
				function(){
					$('#pr_' + i).html('<font color="red">Ошибка</font>');
				}
		}
	);

}

function get_dmoz(url,i){
	$.ajax(
		{
			url: '/checker/worker.php?service=dmoz&url=' + url,
			dataType: 'text',
			success: 
				function(data,textStatus){
					data.length ? $('#dmoz_' + i).html(data) : $('#dmoz_' + i).html('N/A');
				},
			error:
				function(){
					$('#dmoz_' + i).html('<font color="red">Ошибка</font>');
				}
		}
	);
}

function get_wa(url,i){
	$.ajax(
		{
			url: '/checker/worker.php?service=wa&url=' + url,
			dataType: 'text',
			success: 
				function(data,textStatus){
					data.length ? $('#wa_' + i).html(data) : $('#wa_' + i).html('N/A');
				},
			error:
				function(){
					$('#wa_' + i).html('<font color="red">Ошибка</font>');
				}
		}
	);
}

	

/* 	var select = $('<select id="query" />');
	$.each(url,function() {
	    $('<option/>', {
	        val:  this,
	        text: this
	    }).appendTo(select);
		
	}); */
// select.prop('selectedIndex', 0);
 // var url=$("select option:selected").text().split(/\s*,\s*/); 
// get_top(0,0,10,url);

$("#query").change(function(){
alert('change')
var url=$("select option:selected").text().split(/\s*,\s*/);
alert('selected'+url);
$('.result_block').remove();
$('#content').append('<div class="result_block"><div class="domen"></div><div class="competitors"></div></div>');
$('.result_block').css('display','block');
get_top(0,0,10,url);
// get_position(domen,url);
});
function get_query(url,domen){

alert('url '+url+' домен '+domen);



var y = url.length; 
$('#keywords_block').css('display','none');
$('.result_block').css('display','block');

$('.result_block').prepend('<h3 class="head_competitors">Ключевые фразы (выбор отобразит соответствующий анализ и цены)</h3><br>');
$('.result_block').prepend('<h3 class="head_competitors">Анализ сайта, конкурентов и предполагаемых затрат по ключевым словам</h3><br>');

$('#query_block').append('<table width="100%" align="center" cellpadding="1" cellspacing="0" class="query_table"></table>');
$('.query_table').html('<tr class="table_header"><td width="3%" align="center">Выбор</td><td width="3%" align="center">Номер</td><td width="45%">Поисковый запрос(ключевая фраза)</td><td align="center" width="10%">Ваш сайт сейчас</td><td align="center" width="10%">На продвижение</td><td align="center" width="10%">На контекст</td></tr>');
 var color = (0 % 2 == 0) ? 'F5F5EA' : 'FFFCF8';//?
 

$.each(url,function(key, val) {
	alert('each query'+key+val)
	// input type="radio" id="query_position_'+e+'" name="query_position"
	/* $(".query_table").append('<tr class="tr_query" bgcolor="#'+ color +'"><div class="div_tr"><td align="center">&nbsp;&nbsp;<div class="down_arrow"></div></td><td align="center">'+(e+1)+'</td><td><input class="query_input" style="width:100%" type="text" value="'+ this +'"></td><td align="center" id="site_position_'+e+'" ><img src="/checker/ajax-loader.gif" border="0" /></td><td vertical-align="middle"><input type="text" style="margin-top:10px;max-width:80px"></td><td vertical-align="middle"><input type="text" style="margin-top:10px;max-width:80px"></td></div></tr>'); 
	$(".query_table").append('<tr style="width:100%" class="after_tr" bgcolor="#'+ color +'"></tr>'); 
	$('.after_tr').html('<td width="100%" style="width:100%" class="after_td" colspan="4"></td>');*/
	


		get_position(domen,val,key);  
	}); 

function get_position(domen,keyword,n){
alert('position_function '+domen+keyword+n);
// $('.domen').remove();
// $('.result_block').append('<div class="domen"></div>');

$.ajax({
   type: "POST",
   url: "/site_pos/google_position",
   data:{data:domen,keyword:keyword},
   dataType: 'json',
   success: function(url_pos){
   alert('position '+url_pos);
   if (url_pos==0){
   $('#site_position_'+n+'').html('<span>Нет в Топ-100</span>');
   }
   else{
   
    /*$$('.domen').append('<h3 class="head_competitors">Позиция Вашего сайта '+domen+' по данному ключевому запросу в Google'+url_pos+'</h3>');*/
   $('#site_position_'+n+'').html(url_pos); 
 	}	
},
			  error:  function(xhr, str){
			   alert('Возникла ошибка: ' + xhr.responseCode);
			   } 

  });
};

$('.down_arrow').click(function(){
	    var $input = $('input[type="text"]', $(this).closest('tr'));
		// $(this).closest('tr').next('tr').find('.after_td').html('<td width="100%" style="width:100%" class="table_header" > </td>');
		var tr = $(this).closest('tr').next('tr').find('.after_td');
		get_top(0,0,10,url,tr);
		
		$(this).closest('tr').next('tr').slideDown();
		$(this).removeClass("down_arrow").addClass("up_arrow");
	    // alert($input.val());


});
$('.up_arrow').click(function(){
	    
		$(this).closest('tr').next('tr').slideUp();
		$(this).removeClass("up_arrow").addClass("down_arrow");
	   
});	




}

function get_top(n,x,y,query,tr){
alert('n'+n+'x'+x+'y'+y+'url '+query);
$.ajax({
   type: "POST",
   url: "/sengine/google_competitors",
   data:{data:query},
   dataType: 'json',
   success: function(url_list){
  

var url_array = url_list;

 color = (n % 2 == 0) ? 'F5F5EA' : 'FFFCF8';


// $('.result_block').append('<h3 class="head_competitors">Анализ конкурентов и необходимых затрат для примерного достижения уровня позиции по ключевому запросу</h3><br><h3 class="head_competitors">А так же в таблице приведены рекомендуемые затраты на контекстную рекламу</h3><br><div class="demands">');
tr.append('<span>Ниже приведен перечень конкурентов в выдаче и информация об ориентировочной цене для борьбы за определенное место</span>');
tr.append('</div><br><br><div id="top10_btn" class="top">1-10</div><div id="top20_btn" class="top">11-20</div><div id="top30_btn"class="top">21-30</div><div id="top40_btn"class="top">31-40</div><div id="top50_btn"class="top">41-50</div><div id="top60_btn"class="top">51-60</div><div id="top70_btn"class="top">61-70</div><div id="top80_btn"class="top">71-80</div><div id="top90_btn"class="top">81-90</div><div id="top100_btn"class="top">91-100</div><br><div class="competitors"><table align="center" cellpadding="7" cellspacing="0" id="result_'+n+'"></table></div>');
/* $('#result_'+n+'') */tr.append('<tr class="table_header" style="width:100%"><td width="2%">Выбор</td><td width="3%">Позиция</td><td width="15%">Ссылка/Домен</td><td width="3%">ТИЦ</td><td width="3%">PR</td><td width="3%">DMOZ</td><td width="3%">WA</td><td width="5%">Продвижение/месяц</td><td width="3%">Контекст/месяц</td></tr>');

			
for( var i = x; i < y; i++ ){


/* $('#result_'+n+'') */tr.append('<tr bgcolor="#'+ color +'"><td>&nbsp;&nbsp;<input type="radio" id="position'+i+'" name="position"></td><td>'+(i+1)+'</td><td>'+ url_array[n][i] +'</td><td id="cy_'+ x+i +'"><img src="/checker/ajax-loader.gif" border="0" /></td><td id="pr_'+ x+''+i +'"><img src="/checker/ajax-loader.gif" border="0" /></td><td id="dmoz_'+ x+''+i +'"><img src="/checker/ajax-loader.gif" border="0" /></td><td id="wa_'+ x+''+i +'"><img src="/checker/ajax-loader.gif" border="0" /></td><td id="glue_cy_'+ x+''+i +'"><img src="/checker/ajax-loader.gif" border="0" /><td id="glue_pr_'+ x+''+i +'"><img src="/checker/ajax-loader.gif" border="0" /></td></tr>')


$('#position'+i+'').click(function(){
alert('rtg')
});			
			
			
			
			
			
			
			get_cy(url_array[n][i],x+''+i);
			get_pr(url_array[n][i],x+''+i);
			get_dmoz(url_array[n][i],x+''+i);
			get_wa(url_array[n][i],x+''+i);
			get_pr2(url_array[n][i],x+''+i,i+1);
			
	}
tr.append('<tr class="table_header"  style="width:100%"><td align="center" class="table_big" colspan="7" >Суммы к оплате по данному ключевому слову (редактируется на Ваше усмотрение)</td><td vertical-align="middle"><input type="text" style="margin-top:10px;max-width:80px"></td><td><input type="text" style="margin-top:10px;max-width:80px"></td></tr>');

} 
 
 

 

});


};

$(document).ready(function(){
	$('#check').click(function(){
	
	var string = $('#search_list');
	alert(string.val())
	var search_array=string.val().split('\n');
	/*$.each(search_array,function(key,val){
	alert(val)
	}); */
	
	 var domen = $('#url').val();
	get_query(search_array,domen) 
	// get_competitors(search_array,domen);
	
	
});

});	
$('#top10_btn').click(function(){
url=$("#query:selected").text();
$('.result_block').remove();
$('#content').append('<div class="result_block"><div class="domen"></div><div class="competitors"></div></div>');
$('.result_block').css('display','block');
get_top(0,0,10,url);
});

$('#top20_btn').click(function(){
$('.result_block').remove();
$('#content').append('<div class="result_block"><div class="domen"></div><div class="competitors"></div></div>');
$('.result_block').css('display','block');
get_top(0,10,20,url);
});	

$('#top30_btn').click(function(){
$('.result_block').remove();
$('#content').append('<div class="result_block"><div class="domen"></div><div class="competitors"></div></div>');
$('.result_block').css('display','block');
get_top(0,20,30,url);
});	

$('#top40_btn').click(function(){
$('.result_block').remove();
$('#content').append('<div class="result_block"><div class="domen"></div><div class="competitors"></div></div>');
$('.result_block').css('display','block');
get_top(0,30,40,url);
});	

$('#top50_btn').click(function(){
$('.result_block').remove();
$('#content').append('<div class="result_block"><div class="domen"></div><div class="competitors"></div></div>');
$('.result_block').css('display','block');
get_top(0,40,50,url);
});	

$('#top60_btn').click(function(){
$('.result_block').remove();
$('#content').append('<div class="result_block"><div class="domen"></div><div class="competitors"></div></div>');
$('.result_block').css('display','block');
get_top(0,50,60,url);
});	

$('#top70_btn').click(function(){
$('.result_block').remove();
$('#content').append('<div class="result_block"><div class="domen"></div><div class="competitors"></div></div>');
$('.result_block').css('display','block');
get_top(0,60,70,url);
});

$('#top80_btn').click(function(){
$('.result_block').remove();
$('#content').append('<div class="result_block"><div class="domen"></div><div class="competitors"></div></div>');
$('.result_block').css('display','block');
get_top(0,70,80,url);
});	

$('#top90_btn').click(function(){
$('.result_block').remove();
$('#content').append('<div class="result_block"><div class="domen"></div><div class="competitors"></div></div>');
$('.result_block').css('display','block');
get_top(0,80,90,url);
});	

$('#top100_btn').click(function(){
$('.result_block').remove();
$('#content').append('<div class="result_block"><div class="domen"></div><div class="competitors"></div></div>');
$('.result_block').css('display','block');
get_top(0,90,100,url);
});

</script>
<script>
function print_r(arr, level) {
    var print_red_text = "";
    if(!level) level = 0;
    var level_padding = "";
    for(var j=0; j<level+1; j++) level_padding += "    ";
    if(typeof(arr) == 'object') {
        for(var item in arr) {
            var value = arr[item];
            if(typeof(value) == 'object') {
                print_red_text += level_padding + "'" + item + "' :\n";
                print_red_text += print_r(value,level+1);
		} 
            else 
                print_red_text += level_padding + "'" + item + "' => \"" + value + "\"\n";
        }
    } 

    else  print_red_text = "===>"+arr+"<===("+typeof(arr)+")";
    return print_red_text;
}

</script>