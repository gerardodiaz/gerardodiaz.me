<?php

	if (function_exists('register_sidebar'))
		register_sidebar(array(
			'name' => 'Widget Area',
			'id' => 'widget-area',
			'before_widget' => '<section>',
			'after_widget' => '</section>',
			'before_title' => '<header><h1>',
			'after_title' => '</h1></header>'
		));

?>