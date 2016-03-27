<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8">
		
		<!-- END OF HEADER - Add Menu here -->
<div class="row">
	<div class="twelve columns hcolor">
		<?php wp_nav_menu(array(
			'menu' => 'Main Menu',
			'sort_column' => 'menu_order',
			'container_class' => 'blank-menu-header'
			));?>
		</div>
	</div>
<!-- END OF HEADER - Add Menu here -->

        <title><?php bloginfo('name'); ?></title>

        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
   <?php wp_head(); ?>
   </head>
    <body>
       <!-- <div class="container">
            <header class="row blue"> -->
            
           
            <header class="row hcolor">
            
            
                <div class="twelve columns hcolor">
                   <center> <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
                    <h2><?php bloginfo('description'); ?></h2> </center>
                </div>
				<!-- <div class="three columns">
					<?php get_search_form(); ?>
				<div> -->
            </header>

 <div class="container blue">

<a href='<?php the_permalink(); ?>'>