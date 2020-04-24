<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       https://www.channchetra.com
 * @since      1.0.0
 *
 * @package    Ptc_Blocks
 * @subpackage Ptc_Blocks/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    Ptc_Blocks
 * @subpackage Ptc_Blocks/includes
 * @author     Chann Chetra <chetra-chann@mptc.gov.kh>
 */

class Ptc_Blocks {

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      Ptc_Blocks_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {
		if ( defined( 'PTC_BLOCKS_VERSION' ) ) {
			$this->version = PTC_BLOCKS_VERSION;
		} else {
			$this->version = '1.0.0';
		}
		$this->plugin_name = 'ptc-blocks';

		$this->load_dependencies();
		$this->set_locale();
		$this->define_admin_hooks();
		$this->define_public_hooks();

	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - Ptc_Blocks_Loader. Orchestrates the hooks of the plugin.
	 * - Ptc_Blocks_i18n. Defines internationalization functionality.
	 * - Ptc_Blocks_Admin. Defines all hooks for the admin area.
	 * - Ptc_Blocks_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function load_dependencies() {
		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-ptc-blocks-autoload.php';
		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-ptc-blocks-loader.php';

		/**
		 * The class responsible for defining internationalization functionality
		 * of the plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-ptc-blocks-i18n.php';

		/**
		 * The class responsible for defining all actions that occur in the admin area.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-ptc-blocks-admin.php';

		/**
		 * The class responsible for defining all actions that occur in the public-facing
		 * side of the site.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-ptc-blocks-public.php';

		$this->loader = new Ptc_Blocks_Loader();

	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the Ptc_Blocks_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_locale() {

		$plugin_i18n = new Ptc_Blocks_i18n();

		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );

	}

	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_admin_hooks() {

		$plugin_admin = new Ptc_Blocks_Admin( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );

	}

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_public_hooks() {

		$plugin_public = new Ptc_Blocks_Public( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );

	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.0
	 */
	public function run() {
		$this->loader->run();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     1.0.0
	 * @return    string    The name of the plugin.
	 */
	public function get_plugin_name() {
		return $this->plugin_name;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since     1.0.0
	 * @return    Ptc_Blocks_Loader    Orchestrates the hooks of the plugin.
	 */
	public function get_loader() {
		return $this->loader;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     1.0.0
	 * @return    string    The version number of the plugin.
	 */
	public function get_version() {
		return $this->version;
	}

	/**
	 * Function សម្រាប់ធ្វើការទាញយក Terms Taxonomy list ហើយបម្លែងទៅជា Array ដើម្បីប្រើក្នុង Select List របស់ Block ផ្សេងៗ
	 * thank to @Exit https://wordpress.stackexchange.com/questions/13480/get-terms-return-errors/13482#13482
	 * 
	 * @param [type] $term
	 * @return void
	 */
	private function custom_get_terms($term) {
		global $wpdb;
	   
		$out = array();
	   
		$a = $wpdb->get_results($wpdb->prepare("SELECT t.name,t.slug,t.term_group,x.term_taxonomy_id,x.term_id,x.taxonomy,x.description,x.parent,x.count FROM {$wpdb->prefix}term_taxonomy x LEFT JOIN {$wpdb->prefix}terms t ON (t.term_id = x.term_id) WHERE x.taxonomy=%s;",$term));
	   
		foreach ($a as $b) {
		 $obj = new stdClass();
		 $obj->term_id = $b->term_id;
		 $obj->name = $b->name;
		 $obj->slug = $b->slug;
		 $obj->term_group = $b->term_group;
		 $obj->term_taxonomy_id = $b->term_taxonomy_id;
		 $obj->taxonomy = $b->taxonomy;
		 $obj->description = $b->description;
		 $obj->parent = $b->parent;
		 $obj->count = $b->count;
		 $out[] = $obj;
		}
		return $out;
	}
	public function mptc_cat_listing($name = 'category')
	{	
		$taxonomies = $this->custom_get_terms($name);
		$data = [];
		if (!empty($taxonomies)) :
			foreach ($taxonomies as $category) {
				$new_arr = [
					'label' => $category->name,
					'value' => $category->term_id
				];
				array_push($data, $new_arr);
			}
			return $data;
		endif;
		$arr_none = [
			'label' => $name . ' not registered',
			'value' => $name . ' not registered'
		];
		array_push($data, $arr_none);
		return $data;
	}
	 /**
	 * Function ធ្វើការ Print ចេញនូវការបរិច្ឆេទ Post និមួយៗដែលត្រូវបង្ហាញក្នុង Blocks
	*
	* @return void
	*/
	public function ptc_posted_on()
	{
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if (get_the_time('U') !== get_the_modified_time('U')) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
		}
		$time_string = sprintf(
			$time_string,
			esc_attr(get_the_date(DATE_W3C)),
			esc_html(get_the_date())
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x('%s', 'post date', 'sage'),
			$time_string
		);

		return '<span>' . $posted_on . '</span>'; // WPCS: XSS OK.
	}
	/**
	 * Function សម្រាប់ទាញយក Post thumbnail ទៅតាមទំហំដែលបានកំណត់
	 *
	 * @param string $size
	 * @return void
	 */
	function ptc_post_thumbnail( $size = 'post-thumbnail' ) {
		if( has_post_thumbnail() ) {
			$url = get_the_post_thumbnail_url( '', $size );
		}else{
			$url = plugin_dir_url( __FILE__ ) .'img/'.$size.'.png';
		}
		return $url;
	}
	/**
	 * Function សម្រាប់ធ្វើការបង្ហាញចេញនូវ Title នៅលើ Block និមួយក្នុងលក្ខណដែលបានកំណត់
	 *
	 * @param [type] $arr
	 * @return void
	 */
	function ptc_the_block_title( $arr ){
		$link = '<div class="block-title2 primary-color">'.$arr['title'].'</div>';
		if ( isset( $arr['cat_id'] ) && $arr['cat_id'] != '' ) {
			// Get the URL of this category
			$category_link = get_category_link( $arr['cat_id'] );
		}	
		if ( isset( $category_link ) && $category_link != '' ) {
			$link = '<a class="primary-color" href="'. esc_url( $category_link ) .'">'.$arr['title'].'</a>';
		}
		if ( isset( $arr['taxonomy'] ) && $arr['taxonomy'] != '' ) {
			$href = get_term_link( $arr['type_slug'], $arr['taxonomy'] );
			if ( !is_wp_error( $href ) )
			$link = '<a class="primary-color" href="'. esc_url( $href ) .'">'.esc_html( $arr['title'] ).'</a>';
		}
		if( isset( $arr['link'] ) ) {
			$link = '<a class="primary-color" href="'. $arr['link'] .'">'.$arr['title'].'</a>';
		}
		if ( isset( $arr['cat_id'] ) && $arr['cat_id'] == '' ) {
			$link = '<a class="primary-color" href="#">'.$arr['title'].'</a>';
		}
		$html = '<div class="block-title2 primary-color">%s</div>';
		printf( $html, $link );
	}
}
