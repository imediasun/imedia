<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Display_lib

{
//$data - массив с переменными, $name - начало имени файла вида

			public function main_page($page,$data)
			{
                $CI =& get_instance ();
				
				$CI->load->view($page.'/preheader_view',$data);
				$CI->load->view('header_view',$data);
				$CI->load->view('menu_view');
				
				$CI->load->view($page.'/main_content_view',$data);
				/* $CI->load->view('nav_view'); */
		    }

			public function portfolio_page($page,$data)
			{
                $CI =& get_instance ();
				
				$CI->load->view($page.'/preheader_view',$data);
				$CI->load->view('header_view',$data);
				$CI->load->view('menu_view');
				
				$CI->load->view($page.'/main_content_view',$data);
				$CI->load->view('nav_view');
		    } 
public function backend_page($page,$data)
			{
                $CI =& get_instance ();
				
				$CI->load->view($page.'/preheader_view',$data);
				$CI->load->view('header_view',$data);
				$CI->load->view('menu_view');
				
				$CI->load->view($page.'/main_content_view',$data);
				$CI->load->view('nav_view');
		    } 						
			public function article_page($page,$data)
			{
                $CI =& get_instance ();
				
				$CI->load->view('/preheader_articles_view',$data);
				$CI->load->view('header_view',$data);
				
				$CI->load->view('menu_view');
				$CI->load->view('/menu_articles_view');
				
				$CI->load->view('/articles/start_articles_view');
				$CI->load->view('/articles/article_bar_view');
				$CI->load->view($page.'/main_content_view',$data);
				
				$CI->load->view('footer_article_view');
		    } 
				public function promotion_page($page,$data)
			{
                $CI =& get_instance ();
				
				$CI->load->view('preheader_promotion_view',$data);
				$CI->load->view('header_view',$data);
				$CI->load->view('menu_articles_left_view');
				$CI->load->view($page.'/menu_articles_view');
				$CI->load->view($page.'/content_table_view',$data);
				$CI->load->view('footer_article_view');
		    } 
			public function templates_page($page,$data)
			{
                $CI =& get_instance ();
				
				$CI->load->view('preheader_templates_view',$data);
				$CI->load->view('header_view',$data);
				$CI->load->view('menu_articles_left_view');
				$CI->load->view($page.'/menu_articles_view');
				$CI->load->view($page.'/main_content_view',$data);
				$CI->load->view('footer_article_view');
		    } 
}
?>