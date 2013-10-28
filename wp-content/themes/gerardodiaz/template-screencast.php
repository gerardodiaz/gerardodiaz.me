<?php
/*
Template Name: Screencast
*/
?>

<?php get_header(); ?>

<section id="content-wide">
	<?php the_post() ?>
	<article>
		<header>
			<h1><?php the_title(); ?></h1>
		</header>
		<? the_content(); ?>
		<p> </p>			
		<p> </p>				
	</article>
</section>

<?php get_footer(); ?>
