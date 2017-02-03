<div class="loader" style="background:#fff;width:100%;position:absolute;z-index:9;top:400px;">

</div>


<div class="side_bar span3" style="overflow:auto;position:relative;z-index:999;left:100px;float:left;text-align:center;margin:0 auto;height:auto;background:rgba(200,200,200,0.9);" >

		
		<div style="height:100%;">
		
		<h3>Области Украины</h3>
		<div class="filter-parametrs-i-header">
		<span class="sprite-side filter-parametrs-i-title" name="filter_parameters_title">Области Украины</span>
		</div>
		<div name="filter_parameters" style="margin: 0px;" class="">
		<ul class="filter-parametrs-i-l" id="sort_area">
		<li class="filter-parametrs-i-l-i filter-parametrs-i-l-i-default">
		<label class="filter-parametrs-i-l-i-label">
		<input class="all_ukraine hidden"  type="checkbox" >
		
		<span class="filter-parametrs-i-l-i-text filter-parametrs-i-l-i-checkbox sprite-side">
		<i class="filter-parametrs-i-l-i-default-title">Вся Украина</i>&nbsp;
		</span>
		</label>
		</li>
		<div style="width:100%;height:10px;background:#ee9;"></div>

		<?
		//при выборе области открываются внизу города принадлежащие к этой области
		 foreach($areas as $key=>$value){
		?>	
		<li class="li_region filter-parametrs-i-l-i filter-parametrs-i-l-i-default">
		<label class="filter-parametrs-i-l-i-label">
		<input class="region hidden" type="checkbox" >
		<span class="filter-parametrs-i-l-i-text filter-parametrs-i-l-i-checkbox sprite-side">
		<input class="hidden_region" type="hidden" value="<? echo $value['id'];?>">
		<i class="filter-parametrs-i-l-i-default-title"><? echo $value['name'];?></i>&nbsp;
		<?
		$cities=$this->cities_region_model->get_obj($value['id']);
		?>
		<i class="filter-parametrs-i-l-i-default-count">(<?=count($cities)?>)</i></span>
		</label>
		</li>
		<?}?>

		</ul>
		</div>
		









		<div class="foot_addon" style="height:200px;position:relative" ></div>
		</div>
</div>















<div class="side_bar span3 cities_row" style="overflow:auto;position:relative;display:none;z-index:999;left:100px;float:left;text-align:center;margin:0 auto;height:auto;background:rgba(200,200,200,0.9);" >

		<div style="overflow:auto;height:100%">
		
		<h3>Города Украины</h3>


		
		<div style="">
		<div class="filter-parametrs-i-header">
		<span class="sprite-side filter-parametrs-i-title" name="filter_parameters_title">Города милионники</span>
		</div>

		<div name="filter_parameters" data-without-effect="0" style="margin: 0px;" class="">
		<ul class="filter-parametrs-i-l" id="sort_area">

		<?
		//при выборе области открываются внизу города принадлежащие к этой области
		 foreach($cities_million as $key=>$value){
		?>						
		<li class="filter-parametrs-i-l-i filter-parametrs-i-l-i-default">
		<label class="filter-parametrs-i-l-i-label">
		<input class="hidden" onclick="window.location='http://imedia.in.ua/results/area=kiev'" type="checkbox">
		<a href="http://imedia.in.ua/results/area=kiev">
		<span class="filter-parametrs-i-l-i-text filter-parametrs-i-l-i-checkbox sprite-side">
		<i class="filter-parametrs-i-l-i-default-title"><? echo $value['name'];?></i>&nbsp;
		<i class="filter-parametrs-i-l-i-default-count">(28)</i></span></a>
		</label>
		</li>
		<?}?>
		</ul>


		<a href="#" class="filter-parametrs-i-more sprite-side novisited opened hidden" name="hide_more_parameters">Свернуть</a>
									
		 </div>
			
		</div>	
			
		<div style="">
		<div class="filter-parametrs-i-header">
		<div style="width:50px;height:50px;background:url(/img/reply_all_arrow1600.png);"></div>
		<span class="sprite-side filter-parametrs-i-title" name="filter_parameters_title">Города Украины по выбранным областям</span>
		</div>
		<div name="filter_parameters" data-without-effect="0" style="margin: 0px;" class="">
		<ul class="filter-parametrs-i-l" id="sort_area">
		<li class="filter-parametrs-i-l-i filter-parametrs-i-l-i-default">
		<label class="filter-parametrs-i-l-i-label">
		<input class="hidden" onclick="" type="checkbox">
		
		<span class="filter-parametrs-i-l-i-text filter-parametrs-i-l-i-checkbox sprite-side">
		<i class="filter-parametrs-i-l-i-default-title">Вся Украина</i>&nbsp;
		</span>
		</label>
		</li>
		</ul>
		</div>

		</div>

<div style="">
		<div class="filter-parametrs-i-header">
		<div style="width:50px;height:50px;background:url(/img/reply_all_arrow1600.png);"></div>
		<span class="sprite-side filter-parametrs-i-title" name="filter_parameters_title">Города Украины по выбранным областям</span>
		</div>
		<div class="" name="filter_parameters" data-without-effect="0" style="margin: 0px;" class="">
		<ul class="cities all_ukr_cities filter-parametrs-i-l" id="sort_area"> 
		
		</ul>
		</div>

		</div>


	




	

		<div class="filter-parametrs-i-header">
		<span class="sprite-side filter-parametrs-i-title" name="filter_parameters_title">Объекты вблизи</span>
		</div>





		<div class="foot_addon" style="height:200px;position:relative" ></div>
		</div>
</div>







<div class="side_bar span3" style="overflow:auto;position:relative;display:none;z-index:999;left:100px;float:left;text-align:center;margin:0 auto;height:auto;background:rgba(200,200,200,0.9);" >

		<div style="overflow:auto;height:100%">
		
		<h3>Дополнительные фильтры</h3>


		
		




		<div class="filter-parametrs-i-header">
		<span class="sprite-side filter-parametrs-i-title" name="filter_parameters_title">Классификации</span>
		</div>



		<div style="">
		<div name="filter_parameters" data-without-effect="0" style="margin: 0px;" class="">
		<ul class="filter-parametrs-i-l" id="sort_area">

							
		<li class="filter-parametrs-i-l-i filter-parametrs-i-l-i-default">
		<label class="filter-parametrs-i-l-i-label">
		<input class="hidden" onclick="window.location='http://imedia.in.ua/results/area=kiev'" type="checkbox">
		<a href="http://imedia.in.ua/results/area=kiev">
		<span class="filter-parametrs-i-l-i-text filter-parametrs-i-l-i-checkbox sprite-side">
		<i class="filter-parametrs-i-l-i-default-title">Super VIP</i>&nbsp;
		<i class="filter-parametrs-i-l-i-default-count">(28)</i></span></a>
		</label>
		</li>

		<li class="filter-parametrs-i-l-i filter-parametrs-i-l-i-default" can_hide="1">
		<label class="filter-parametrs-i-l-i-label">
		<input class="hidden" onclick="window.location='http://imedia.in.ua/results/area=odessa'" type="checkbox">
		<a href="http://imedia.in.ua/results/area=odessa">
		<span class="filter-parametrs-i-l-i-text filter-parametrs-i-l-i-checkbox sprite-side">
		<i class="filter-parametrs-i-l-i-default-title">VIP</i>&nbsp;
		<i class="filter-parametrs-i-l-i-default-count">(7)</i></span></a>
		</label>
		</li>
		</ul>


		<a href="#" class="filter-parametrs-i-more sprite-side novisited opened hidden" name="hide_more_parameters">Свернуть</a>
									
		 </div>
			
		</div>	

		
		<div class="filter-parametrs-i-header">
		<span class="sprite-side filter-parametrs-i-title" name="filter_parameters_title">Мониторинг</span>
		</div>



		<div style="">
		<div name="filter_parameters" data-without-effect="0" style="margin: 0px;" class="">
		<ul class="filter-parametrs-i-l" id="sort_area">

							
		<li class="filter-parametrs-i-l-i filter-parametrs-i-l-i-default">
		<label class="filter-parametrs-i-l-i-label">
		<input class="hidden" onclick="window.location='http://imedia.in.ua/results/area=kiev'" type="checkbox">
		<a href="http://imedia.in.ua/results/area=kiev">
		<span class="filter-parametrs-i-l-i-text filter-parametrs-i-l-i-checkbox sprite-side">
		<i class="filter-parametrs-i-l-i-default-title">С мониторингом</i>&nbsp;
		<i class="filter-parametrs-i-l-i-default-count">(28)</i></span></a>
		</label>
		</li>

		<li class="filter-parametrs-i-l-i filter-parametrs-i-l-i-default" can_hide="1">
		<label class="filter-parametrs-i-l-i-label">
		<input class="hidden" onclick="window.location='http://imedia.in.ua/results/area=odessa'" type="checkbox">
		<a href="http://imedia.in.ua/results/area=odessa">
		<span class="filter-parametrs-i-l-i-text filter-parametrs-i-l-i-checkbox sprite-side">
		<i class="filter-parametrs-i-l-i-default-title">Можно без мониторинга</i>&nbsp;
		<i class="filter-parametrs-i-l-i-default-count">(7)</i></span></a>
		</label>
		</li>
		</ul>


		<a href="#" class="filter-parametrs-i-more sprite-side novisited opened hidden" name="hide_more_parameters">Свернуть</a>
									
		 </div>
			
		</div>	

		<div class="filter-parametrs-i-header">
		<span class="sprite-side filter-parametrs-i-title" name="filter_parameters_title">Объекты вблизи</span>
		</div>



		<div style="height: auto;">
		<div name="filter_parameters" data-without-effect="0" style="margin: 0px;" class="">
		<ul class="filter-parametrs-i-l" id="sort_area">

							
		<li class="filter-parametrs-i-l-i filter-parametrs-i-l-i-default">
		<label class="filter-parametrs-i-l-i-label">
		<input class="hidden" onclick="window.location='http://imedia.in.ua/results/area=kiev'" type="checkbox">
		<a href="http://imedia.in.ua/results/area=kiev">
		<span class="filter-parametrs-i-l-i-text filter-parametrs-i-l-i-checkbox sprite-side">
		<i class="filter-parametrs-i-l-i-default-title">Аэропорты</i>&nbsp;
		<i class="filter-parametrs-i-l-i-default-count">(28)</i></span></a>
		</label>
		</li>

		<li class="filter-parametrs-i-l-i filter-parametrs-i-l-i-default" can_hide="1">
		<label class="filter-parametrs-i-l-i-label">
		<input class="hidden" onclick="window.location='http://imedia.in.ua/results/area=odessa'" type="checkbox">
		<a href="http://imedia.in.ua/results/area=odessa">
		<span class="filter-parametrs-i-l-i-text filter-parametrs-i-l-i-checkbox sprite-side">
		<i class="filter-parametrs-i-l-i-default-title">Крупные супермаркеты</i>&nbsp;
		<i class="filter-parametrs-i-l-i-default-count">(7)</i></span></a>
		</label>
		</li>
		</ul>


		<a href="#" class="filter-parametrs-i-more sprite-side novisited opened hidden" name="hide_more_parameters">Свернуть</a>
									
		 </div>
			
		</div>	

		<div class="foot_addon" style="height:200px;position:relative" ></div>
		</div>
</div>
<style>
.filter-parametrs-i-title {
    font-family: Arial, Helvetica, FreeSans, "Liberation Sans", "Nimbus Sans L", sans-serif;
    color: #3e77aa;
    font-size: 1em;
    font-weight: 400;
    padding: 0.69231em 2.76923em 0.69231em 0;
    display: block;
    cursor: pointer;
}
.filter-parametrs-i-title::before {
    background-position: 0 -1284px;
    width: 14px;
    height: 9px;
    right: 0.76923em;
    top: 50%;
    margin-top: -4px;
}
.sprite-side::before, .sprite-both::before, .sprite-both::after {
    content: '';
    position: absolute;
}
.sprite, .sprite-side::before, .sprite-both::before, .sprite-both::after {
    background-image: url("http://i.rozetka.ua/h.4f17ab/sprite.png") !important;
    background-repeat: no-repeat;
}

</style>
					
<script>
$('.all_ukraine').prop('checked',false);
$('.region').prop('checked',false);
$('.all_ukraine').click(function(){

 $.ajax({
          type: 'POST',
		  dataType:'json',
          url: '/server/functions_ajax_all_ukraine.php',
		  beforeSend: function(){
$('.loader').html('<img id="imgcode" style="position:relative;float:right;right:500px" src="/img/Loader.gif">');
	        },
          success: function(data){

			$.each( data, function( key, value ) {
				
$('.cities').append('<li class="filter-parametrs-i-l-i filter-parametrs-i-l-i-default"> <label class="filter-parametrs-i-l-i-label"> <input class="hidden" onclick="" type="checkbox"> <span class="filter-parametrs-i-l-i-text filter-parametrs-i-l-i-checkbox sprite-side"> <i class="filter-parametrs-i-l-i-default-title">'+value.name+'     ('+value.region+')</i>&nbsp;</span> </label> </li>');
 $('.cities_row').css('display','inline-block')        				

 $('.loader').html('<h3> </h3>');				
$('.loader').css('display','none');
});
			  
			  
		 /*  */},
          error:  function(xhr, str){
          alert('Возникла ошибка: ' + xhr.responseCode);
        }
        }); 
	
});
window.regions=[]
$('.region').click(function(){
$('.all_ukr_cities').empty();	
$('.all_ukraine').prop('checked',false);
var _this_region_id=$(this).closest('li').find('.hidden_region').val();

window.regions.push(_this_region_id)
$.each(window.regions, function(k,region ) {
$.ajax({
          type: 'POST',
		  dataType:'json',
          url: '/server/functions_ajax_region.php',
		  data: {region:region},
		  beforeSend: function(){
          $('.loader').html('<img id="imgcode" style="position:relative;float:right;right:500px" src="/img/Loader.gif">');
	        },
          success: function(data){

 $.each( data, function( key, val ) {
$('.cities').append('<li class="filter-parametrs-i-l-i filter-parametrs-i-l-i-default"> <label class="filter-parametrs-i-l-i-label"> <input class="hidden" onclick="" type="checkbox"> <span class="filter-parametrs-i-l-i-text filter-parametrs-i-l-i-checkbox sprite-side"> <i class="filter-parametrs-i-l-i-default-title">'+val.name+'     ('+val.region+')</i>&nbsp;</span> </label> </li>');
 $('.cities_row').css('display','inline-block');       				

 $('.loader').html('<h3> </h3>');				
$('.loader').css('display','none');
}); 
	  
		},
          error:  function(xhr, str){
          alert('Возникла ошибка: ' + xhr.responseCode);
        }
        });	

});



})













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
					

