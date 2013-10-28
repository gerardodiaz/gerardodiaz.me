<?php get_header(); ?>

	<section id="content">
	
		<?php query_posts('cat=12,13'.'&paged='.$paged); ?>
		<?php while ( have_posts() ) : the_post() ?>
				<?php if ( in_category('13')) { ?>
					<article>
						<header>
							<time datetime="<?php echo the_time('Y-m-d'); ?>"><?php the_time('F j, Y'); ?></time>
							<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						</header>
						<? the_content(); ?>
						<footer><p>Published <?php the_tags(); ?></p></footer>
					</article>
				<?php } else { ?>
					<article>
						<header>
							<time datetime="<?php echo the_time('Y-m-j'); ?>"><?php the_date(); ?></time>
							<h1><a href="<?php echo get_post_meta($post->ID, "Source Url", true);?>"><?php the_title(); ?></a></h1>
						</header>
						<? the_content(); ?>
					</article>
				<?php } ?>				
		<?php endwhile; ?>
		<div class="next-prev">
			<span class="previous"><?php next_posts_link('&larr; Older Entries', 0,'12'); ?></span> 
			<span class="next"><?php previous_posts_link('Newer Entries &rarr;', 0,'12') ?></span> 
		</div>		
	</section>

<!-- ENDS CONTENT, BEGINS SIDEBAR WIDGETS -->

<section id="widgets">
	<? get_sidebar(); ?>
</section> 

<!-- ENDS SIDEBAR WIDGETS -->

<?php get_footer(); ?>
