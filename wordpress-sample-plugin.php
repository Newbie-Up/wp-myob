<?php
class SamplePlugin {
	private $sample_plugin_options;
	private $menu_slug = 'sample-plugin';

	public function __construct() {
		add_action( 'admin_menu', array( $this, 'add_plugin_page' ) );
		add_action( 'admin_init', array( $this, 'page_init' ) );
		add_action( 'admin_enqueue_scripts', array($this, 'selectively_enqueue_admin_script') );
	}

	public function add_plugin_page() {
		add_management_page(
			'Morris Toolbank', // page_title
			'Morris Toolbank', // menu_title
			'manage_options', // capability
			$this->menu_slug, // menu_slug
			array( $this, 'create_admin_page' ) // function
		);
	}

	public function create_admin_page() {
		$this->sample_plugin_options = get_option( 'sample_plugin_option_name' ); ?>

		<div class="wrap">
			<h2>Morris Toolbank Import</h2>
			<p></p>
			<?php settings_errors(); ?>

			<!-- <form method="post" action="options.php"> -->
				<?php
					settings_fields( 'sample_plugin_option_group' );
					do_settings_sections( 'morris-toolbank-admin' );
					// submit_button();
				?>
			<!-- </form> -->
		</div>
	<?php }


	/**
	 * Enqueue a script in the WordPress admin on edit.php.
	 *
	 * @param int $hook Hook suffix for the current admin page.
	 */
	public function selectively_enqueue_admin_script( $hook ) {
	    if ( 'tools_page_'.$this->menu_slug != $hook ) {
	        return;
	    }
	    wp_enqueue_style( $this->menu_slug.'-style', plugin_dir_url( __FILE__ ) . 'admin/css/webpack-admin.css' );
	    wp_enqueue_script( $this->menu_slug.'-script', plugin_dir_url( __FILE__ ) . 'admin/js/webpack-admin.js', array(), '1.0' );
	}

}
if ( is_admin() )
	$sample_plugin = new SamplePlugin();

/* 
 * Retrieve this value with:
 * $sample_plugin_options = get_option( 'sample_plugin_option_name' ); // Array of All Options
 * $file_0 = $sample_plugin_options['file_0']; // File
 */
