<?php get_header(); ?>
    
	<div class="red row margin lpad">
<!-- begin sidebar -->

<!-- end sidebar -->
	<div class="nine columns">
		<?php if (have_posts()) :
			while (have_posts()) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content();
			endwhile;
		endif; ?>
	</div>
	
	
	
<div class="three columns">
	
	<?php include 'pagesidebar.php';?>
</div>

</div>

<?php get_footer(); ?>
	
	
	