<?php get_header(); ?>

	<section id="content">
	<p class="topic-title"><?php single_cat_title(); ?></p>

		<?php while ( have_posts() ) : the_post() ?>
					<article>
						<header>
							<time datetime="<?php echo the_time('Y-m-d'); ?>"><?php the_time('F j, Y'); ?></time>
							<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						</header>
						<? the_content(); ?>
						<footer><p>Published <?php the_tags(); ?></p></footer>
					</article>
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
