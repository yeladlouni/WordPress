<?php
function sp_load_admin_styles() {
	wp_enqueue_style(
		'schoolpress-plugin-admin',
		plugins_url( 'css/admin.css', __FILE__ ),
		array(),
		SCHOOLPRESS_VERSION,
		'screen'
	);
}
add_action( 'admin_enqueue_scripts', 'sp_load_admin_styles' );

function sp_load_frontend_styles() {
    wp_enqueue_style(
        'schoolpress-plugin-frontend',
        plugins_url( 'css/frontend.css', __FILE__ ),
        array(),
        SCHOOLPRESS_VERSION,
        'screen'
    );
}
add_action( 'wp_enqueue_scripts', 'sp_load_frontend_styles' );

function sp_load_admin_scripts() {
	wp_enqueue_script(
		'schoolpress-plugin-admin',
		plugins_url( 'js/admin.js', __FILE__ ),
		array( 'jquery' ),
		SCHOOLPRESS_VERSION
	);
}
add_action( 'admin_enqueue_scripts', 'sp_load_admin_scripts' );

function sp_load_frontend_scripts() {
	wp_enqueue_script(
		'schoolpress-plugin-frontend',
		plugins_url( 'js/frontend.js', __FILE__ ),
		array( 'jquery' ),
		SCHOOLPRESS_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'sp_load_frontend_scripts' );

function sp_stub_preheader() {
	if ( !is_admin() ) {
		global $post, $current_user;
		if ( !empty( $post->post_content ) && strpos
		   ( $post->post_content, '[sp_stub]' ) !== false ) {
			/*
				Put your preheader code here.
			*/
		}
	}
}
add_action( 'wp', 'sp_stub_preheader', 1 );

// shortcode [sp_stub]
function sp_stub_shortcode() {
	ob_start();
	?>
	Place your HTML/etc code here.
	<?php
	$temp_content = ob_get_contents();
	ob_end_clean();
	return $temp_content;
}
add_shortcode( 'sp_stub', 'sp_stub_shortcode' );


?>