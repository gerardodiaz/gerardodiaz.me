<?php
/*
Template Name: Goodies
*/
?>

<?php get_header(); ?>

<section id="content-wide">
	<div class="gallery-nav">			
		<ul>
			<li><a href="/portfolio">Portfolio</a></li>
			<li><a class="active" href="/goodies">Goodies</a></li>
		</ul>
	</div>
	<div class="feature-poster">
		<?php query_posts('p=78'); ?>
		<?php the_post(); ?>
		<?php the_content();?>
	</div>
	
	<div class="gallery-header">
		<h1 class="gallery-title"><? the_title(); ?></h1>
		<div class="gallery-excerpt center"><?php  the_excerpt(); ?></div>
	</div>
	
	<aside>
		<ul class="thumbnails">
			<?php query_posts('showposts=100' . '&cat=4'); ?>
			<?php while (have_posts()) : the_post(); ?>			
				<li><a href="<?php the_permalink(); ?> "><img alt="" src="<?php echo get_post_meta($post->ID, "Thumbnail", true);?>" /></a></li>
			<?php endwhile;?>
		</ul>
	</aside>
	
</section>




<?php get_footer(); ?>
