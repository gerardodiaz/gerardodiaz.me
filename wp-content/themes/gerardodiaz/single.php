<?php get_header(); ?>


<?php the_post(); ?>

	<?php if ( in_category('3') ) { ?>

		<section id="content">
			<article>
				<header>
					<time datetime="<?php echo the_time('Y-m-d'); ?>"><?php the_time('F j, Y'); ?></time>
					<h1><?php the_title(); ?></h1>
					<span class="author"> by <?php the_author(); ?></span>
				</header>
				
				<? the_content(); ?>
				
				<footer>
					<p>Published <?php the_tags(); ?></p>
				</footer>
				
				<div class="next-prev">
					<span class="previous"><?php previous_post_link('%link','Previous:<br /> %title',TRUE); ?> </span> 
					<span class="next"><?php next_post_link('%link','Next:<br /> %title',TRUE); ?> </span> 
				</div>
				
			</article>
		</section>

		<!-- ENDS CONTENT, BEGINS SIDEBAR WIDGETS -->
		
		<aside id="widgets">
			<?php get_sidebar(); ?>
		</aside> 

	<!-- ENDS TEXT BLOG ENTRIES, BEGINS PORTFOLIO AND GOODIES POST FORMATS-->


	<?php } else if ( in_category('6') || in_category('4') ) { ?>
	
		<section id="content-wide">

			<div class="gallery-nav">	
			
				<?php if ( in_category('6')) { ?>
					
					<ul>
						<li><a class="active" href="/portfolio">Portfolio</a></li>
						<li><a href="/goodies">Goodies</a></li>
					</ul>
					
				<?php } else { ?>
				
					<ul>
						<li><a href="/portfolio">Portfolio</a></li>
						<li><a class="active" href="/goodies">Goodies</a></li>
					</ul>
					
				<?php } ?>				
			</div>
			<div class="feature-poster">
				<? the_content(); ?>
			</div>
							
			<?php if ( in_category('6') ) { ?>
				<h1 class="gallery-title"><? the_title(); ?></h1>
				<div class="gallery-excerpt center"><?php the_excerpt(); ?></div>
				<aside>
					<ul class="thumbnails">
						<?php query_posts('showposts=100' . '&cat=6'); ?>
						<?php while (have_posts()) : the_post(); ?>
						<li><a href="<?php the_permalink(); ?> "><img alt="" src="<?php echo get_post_meta($post->ID, "Thumbnail", true);?>" /></a></li>
						<?php endwhile;?>
					</ul>
				</aside>
			<?php } else { ?>
			<div class="gallery-header">
				<h1 class="gallery-title"><? the_title(); ?></h1>
				<div class="gallery-excerpt center"><?php the_excerpt(); ?></div>
			</div>
				<aside>
					<ul class="thumbnails">
						<?php query_posts('showposts=100' . '&cat=4'); ?>
						<?php while (have_posts()) : the_post(); ?>
						<li><a href="<?php the_permalink(); ?> "><img alt="" src="<?php echo get_post_meta($post->ID, "Thumbnail", true);?>" /></a></li>
						<?php endwhile;?>
					</ul>
				</aside>
			<?php } ?>
			
		</section>
	
	<?php } ?>

<?php get_footer(); ?>
