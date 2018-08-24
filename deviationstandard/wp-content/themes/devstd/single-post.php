
<?php

# 2/25/17 New Posts template page

global $rd_data;
$post=$wp_query->post;
$post_design = $rd_data['rd_blog_design_type'];
$templatePath = get_stylesheet_directory();

if(get_post_type() == 'portfolio'){
	include($templatePath.'/single-portfolio.php');
}elseif(get_post_type() == 'partners'){
	include($templatePath.'/single-staff.php');
}
elseif($post_design == 'business'){
	include($templatePath.'/single-business.php');
}
else{
	include($templatePath.'/single-default.php');
}

?>