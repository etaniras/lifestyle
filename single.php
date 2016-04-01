<?php get_header(); ?>

<div class="twelve columns margin lpad white">

  <div class="row lpad">  

		
     <div class ="nine columns pageborder">
            <?php 
			if (have_posts()) {        
				while (have_posts() ) {
					the_post();?> 
                    <h3><?php the_title(); ?></h3>
                    <?php the_content();
				} // end while;
            } // endif; 
			?>
			</div>
			
			 <div class="three columns pageborder sbwidth">
		<?php include 'pagesidebar.php';?>
		</div> 
		
			</div>
 
       
	
</div>


<?php get_footer(); ?>