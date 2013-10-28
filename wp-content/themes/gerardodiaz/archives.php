<?php
/*
Template Name: Archives
*/
get_header(); ?>

<section id="content">

	<header>
		<h1 class="addborder"><?php the_title(); ?></h1>
	</header>
	
	<? the_content(); ?>
	
	<h2>Archives by Month:</h2>
	<ul>
		<?php wp_get_archives('type=monthly'); ?>
	</ul>
	
	<h2>Archives by Subject:</h2>
	<ul>
		 <?php wp_list_categories(); ?>
	</ul>

</section>
<!-- ENDS CONTENT, BEGINS SIDEBAR WIDGETS -->

<section id="widgets">
	<? get_sidebar(); ?>
</section> 

<!-- ENDS SIDEBAR WIDGETS -->

<?php get_footer(); ?>