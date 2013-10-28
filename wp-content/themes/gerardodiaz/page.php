<?php get_header(); ?>
<section id="content">
	<?php the_post() ?>
	<article>
		<header>
			<h1><?php the_title(); ?></h1>
		</header>
		
		<? the_content(); ?>
						
	</article>
</section>

<!-- ENDS CONTENT, BEGINS SIDEBAR WIDGETS -->

<aside id="widgets">
	<?php get_sidebar(); ?>
</aside> 

<!-- ENDS SIDEBAR WIDGETS -->

<?php get_footer(); ?>
