<?php get_header(); ?>


<!-- Featured post --> 
    <section class="row black">
		<div class="twelve columns">
		
		
		
	<section class="row red margin">
		<div class="six columns red">
	
Empty space
           
    
			</div>
			
			<div class="six columns red">
	
Empty space
           
    
			</div>
			
    </section>
   
 <!-- End featured post -->
    
    
    
 <!-- Authors -->
    
   <section class="row red margin">
		
<div class="twelve columns yellow">	

<div class="three columns authorheight">  
Empty </div>

<div class="three columns authorheight">  
Empty </div>

<div class="three columns authorheight">  
Empty </div>

<div class="three columns authorheight">  
Empty </div>

</div>

<div class="twelve columns yellow">	

<div class="three columns authorheight">  
Empty </div>

<div class="three columns authorheight">  
Empty </div>

<div class="three columns authorheight">  
Empty </div>

<div class="three columns authorheight">  
Empty </div>

</div>

<!-- <div class="authorcon row">  
Empty </div>
<div class="authorcon row">  
Empty </div>
<div class="authorcon row">  
Empty </div>

<div class="authorcon row">  
Empty </div> -->


    </section>
    	
	
		
	

          
            
            <section class="row red margin">
                <div class="sidebar row">
 sidebar
 </div>
 <!-- BEGIN LOOP -->
       <?php 
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();?>
					<div class="maincon row">  
					<p> By <?php the_author(); ?> </p>
					<p> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
				<center>	<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail('thumbnail');	
					} ?> </center>

					<?php the_excerpt();?>
					<a href="<?php the_permalink(); ?>"> Read More.... </a>  </div>
		<?php     } // end while
            } // end if
            ?>

 
          
			
    </section>
    
    
    
    
     <section class="row red margin">
		<div class="twelve columns red">
	
<!-- BEGIN LOOP -->
           
            
       <?php 
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();?>
					<div class="border"> <div class="postbox"> <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> </div>
					<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail('thumbnail');	
					} ?>

					<?php the_excerpt();?>
					<a href="<?php the_permalink(); ?>"> Read More.... </a>  </div>
		<?php     } // end while
            } // end if
            ?>

 
            
            
            
			</div>
    </section>
    
    
<?php get_footer(); ?>