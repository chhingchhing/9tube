<?php
function get_css_files()
{	
	return array(
		array('path' =>'assets/css/bootstrap.min.css', 'media' => 'all'),
		array('path' =>'assets/css/bootstrap-theme.min.css', 'media' => 'print'),
		array('path' =>'css/login.css', 'media' => 'print'),
		array('path' =>'css/carousel.css', 'media' => 'print'),
	);
}

function get_js_files()
{	
	return array(
		array('path' =>'js/1.11.0-jquery.min.js'),
		array('path' =>'assets/js/bootstrap.min.js'),
		array('path' =>'js/docs.min.js'),
	);
}
?>