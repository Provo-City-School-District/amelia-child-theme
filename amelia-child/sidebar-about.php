<aside id="mainSidebar">
	<h1>School Information</h1>
	<?php //echo do_shortcode( '[schoolinfo]' ); 
		//$content = file_get_contents(get_theme_file_uri() . '/template-parts/mega-menu-dropdowns-schoolInfo.php');
		$content = get_template_part( 'template-parts/mega-menu-dropdowns', 'schoolInfo');
		$divStripped = preg_replace("/<\/?div[^>]*\>/i", "", $content);
		$result = str_replace(array('<h3>','</h3>'),array('<h2>','</h2>'),$content);
		//echo $result;	
	?>
</aside>