
<?php get_header(); ?>
		<nav>
			<!-- <ul>
				<li><a href="index.htm">home</a></li>
			</ul> -->
			
		<!-- <ul>
  <li><a href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul> -->

		</nav>

		
	<!--	<div class="sidebar">
		sidebar
		</div> -->

		
		
 		<article>
 			<h1>The article title</h1>
			
<!-- BEGIN LOOP -->
			
            <?php if (have_posts()) :      
                while (have_posts()) : the_post(); ?> 
				<!-- this is going to happen over and over again -->
                  <div class="postcontentbox">  <h2><?php the_title(); ?></h2>
					<p> By <?php the_author(); ?> </p>
						<div class="postbox"> <?php the_excerpt();?> </div> </div>
						<?php 
                endwhile; 
            endif; ?> 
			
			
<!-- END LOOP -->
	
			
			
			
		</article>
		
		<article class="authorbox">
		<center> <div class="bloggeroftheweek">
		Blogger of the week
		</div> </center>
		
		
		<section class="authorleft">
		<div class="authortitle">
		Author title
		</div>
		
	<div class="authorimage"> 
	Author image
	</div>

		</section>
		
		
		
		<section class="authorleft">
		<p class="navtext"> dfdf </p>
		</section>
		
		<section class="authorright">
		dfdf
		</section>
		
		<section class="authorright">
		dfdf
		</section>
		
		
		<section class="authorleft">
		dfdf
		</section>
		
		
		
		<section class="authorleft">
		dfdf
		</section>
		
		<section class="authorright">
		dfdf
		</section>
		
		<section class="authorright">
		dfdf
		</section>
		
		
	<!--	<section class="author">
		dfdf
		</section>
		<section class="authorright">
		dfdf
		</section>
		<section class="authorright">
		dfdf
		</section>
	
	<section class="author">
		dfdf
		</section> -->
		
		</article>
		
	<article class="content">
	<div class="newposts">
	<p> New posts </p>
	</div>

	
	
	<div class="contentsidebar">

	</div>
	
		<!-- BEGIN LOOP -->
            <?php if (have_posts()) : 
                /* OUR DATA CONTEXT IS DEFINED  */      
                while (have_posts()) : the_post(); ?> 
                    <h2><?php the_title(); ?></h2>
					<p> By <?php the_author(); ?> </p>
						<?php the_excerpt();
                endwhile; 
            endif; ?> 

<!-- END LOOP -->

<!-- original post html	<section class="contentleft">
		<div class="postauthor">Author name
		</div>
		<div class="postimage">
		post image
		</div>
		<div class="postimagetitle">
	
	
	
		</div>
		</section> -->
		
		
			<!-- <section class="contentleft">
		<div class="postauthor">Author name
		</div>
		<div class="postimage">
		post image
		</div>
		<div class="postimagetitle">
	
	
	
		</div>
		</section> -->
		
	
	
<!--
	<section class="contentleft">
		dfdf
		</section>
		
	<section class="contentleft">
		dfdf
		</section>
		
	<section class="contentleft">
		dfdf
		</section>
		
	<section class="contentleft">
		dfdf
		</section>
		
	<section class="contentleft">
		dfdf
		</section>

	
	<section class="contentleft">
		dfdf
		</section>
		
	<section class="contentleft">
		dfdf
		</section>
		
	<section class="contentleft">
		dfdf
		</section>
-->

		
	</article>
		
<?php get_footer(); ?>
	