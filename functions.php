<?php
if (! defined('WP_DEBUG')) {
	die( 'Direct access forbidden.' );
}

function afkc_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( 'parent-style' ),
		wp_get_theme()->get('Version')
	);
}
add_action( 'wp_enqueue_scripts', 'afkc_enqueue_styles' );

function afkc_analytics() { ?>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-174905385-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-174905385-1');
	</script>

<?php }
add_action( 'wp_head','afkc_analytics', 20 );
