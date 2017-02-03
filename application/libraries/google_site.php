<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Google_site extends CI_Controller

{
	 public function index($word,$domen)
	{
	
	
	//$keywords = file('search/words.txt'); файл с ключевыми словами
	$site = array($domen);//синонимы домена в одинарных кавычках через запятую
	$word=strval($word[0]);
	
		$lk = $this->getGoogleLinks(trim($word));
		$position = 0;
		foreach($lk as $n=>$url){
		if($this->IsMyDomen($url, $site))
			{
				// echo '<b>Фраза: </b>' . $word . ' <b>Место: </b>' ;
				$position = $n+1; 
				flush();
			}

		}
		
	return $position;
	
	}
	
	  
	 function getGoogleLinks($keyword)
	 {
		$countPage = 100;
		$pageNum = 1;
		$url = 'http://www.google.com.ua/search?q=' . urlencode( $keyword) . '&num='.$countPage.'&hl=ru&start=' . $pageNum . '&ie=UTF-8';
		$page = file_get_contents($url);
		if(!$page)
			$page = $this->curlgoogle($url);
			  
		if(!$page)
		{
			echo 'Page dont downloaded<br>';
			return array();
		}
		else
		{
			  
			if(preg_match_all('/<h3 class="r"><a href="(.+?)"/is', $page, $match))
				return $match['1'];
			else
				print('По запросу "'.$keyword.'" линков в гугле нет ?<br>');
			return array();
		}
	}
	  
	function IsMyDomen($url, $site)
	{
	   
		$U1 = explode('/', $url);
		
		$rest = substr($U1['1'], 0, 6);
		if ($rest!='images'){
		
		foreach($site as $url2)
		{
			$www = explode('.', $U1['3']);
			$domen='';
			if($www[0]=='www'){
			unset($www[0]);
			$count=count($www);
			$n=0;
			foreach ($www as $value){
			$n=$n+1;
			if ($n==$count){
			$domen.=$value;
			}
			else{
			$domen.=$value.'.';
			}
			}
			}
			else{
			$domen=$U1['3'];
			}
			
			if($domen == $url2){
				return true;
			}
		}
		}
		else{
		// print("false");
		}
	return false;	
		
	}


	  
	function curlgoogle($url)
	{
		$curl = curl_init();
		curl_setopt($curl,CURLOPT_URL,$url);
		curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
		curl_setopt($curl,CURLOPT_FOLLOWLOCATION,true);
		curl_setopt($curl,CURLOPT_CONNECTTIMEOUT,300);
		return curl_exec($curl);
	}
			


}
?>