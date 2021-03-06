<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

/**
 * Initialize theme default settings
 */
require get_template_directory() . '/inc/theme-settings.php';

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom pagination for this theme.
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom Comments file.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 * Load WooCommerce functions.
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Load Editor functions.
 */
require get_template_directory() . '/inc/editor.php';


/**
 * Load custom post types
 */
require get_template_directory() . '/inc/custom-post-types.php';

//ADD FONTS and VCU Brand Bar
add_action('wp_enqueue_scripts', 'alt_lab_scripts');
function alt_lab_scripts() {
	$query_args = array(
		'family' => 'Fjalla+One|Open+Sans|Boogaloo|Ubuntu|Staatliches',
		'subset' => 'latin,latin-ext',
	);
	wp_enqueue_style ( 'google_fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );

	wp_enqueue_script( 'vcu_brand_bar', 'https:///branding.vcu.edu/bar/academic/latest.js', array(), '1.1.1', true );

	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '1.1.1', true );
    }

//add footer widget areas
if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Footer - far left',
    'id' => 'footer-far-left',
    'before_widget' => '<div class = "widgetizedArea">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Footer - medium left',
    'id' => 'footer-med-left',
    'before_widget' => '<div class = "widgetizedArea">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);


if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Footer - medium right',
    'id' => 'footer-med-right',
    'before_widget' => '<div class = "widgetizedArea">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Footer - far right',
    'id' => 'footer-far-right',
    'before_widget' => '<div class = "widgetizedArea">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);

//set a path for IMGS

  if( !defined('THEME_IMG_PATH')){
   define( 'THEME_IMG_PATH', get_stylesheet_directory_uri() . '/imgs/' );
  }


function bannerMaker(){
	global $post;
	 if ( get_the_post_thumbnail_url( $post->ID ) ) {
      //$thumbnail_id = get_post_thumbnail_id( $post->ID );
      $thumb_url = get_the_post_thumbnail_url($post->ID);
      //$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);

        return '<div class="jumbotron custom-header-img" style="background-image:url('. $thumb_url .')"></div>';

    } 
}

// hide the WP admin menu bar universally, until a user logs in

add_filter('show_admin_bar', '__return_false');

if (!class_exists('ACF')) {
  function river_header_images() {
    return 'Please activate the ACF Pro plugin';
  }
  function river_main_text() {
    return 'Please activate the ACF Pro plugin';
  }
}

//remove image width on shortcoded inline images
add_filter( 'img_caption_shortcode_width', '__return_false' );

//make sure ACF IS ON
if (class_exists('ACF')) {


  function river_header_logo_abbr(){
    $logo_abbr = get_field("menu_logo_abbr");
    $html = '';
    if( $logo_abbr ){ 
          $html .= '<div class="logo-abbr">' . $logo_abbr . '</div>';
          }
        return $html;
  }
  
function river_header_images(){
  $images = get_field("header_images");
  $html = '';
  if( $images ){ 
       foreach( $images as $image ){ 
        $html .= '<img class="cover-image" src="' . $image['image']['url'] . '">';
       }
     }
     return $html;
}

  function river_main_text(){
    $main_content = get_field('main_content');
    $html = '';
    if ($main_content){
      foreach ($main_content as $content_block) {
        //var_dump($content_block['content_type']);
        if ($content_block['content_type'] == 'full-width'){
          $html .= '<div>' . $content_block['main_text'] . '</div>';
        } else {
           if (get_field('aside_alignment',$content_block['aside']->ID)){
            if (get_field('aside_alignment',$content_block['aside']->ID) === 'top'){
              $alignment = 'top';
            }
            else if (get_field('aside_alignment',$content_block['aside']->ID) === 'middle'){
              $alignment = 'middle';
            }
            else {
              $alignment = 'bottom';
            }
          }
          $html .= '<div class="fotj-sidebar '. $alignment .'">';
          if ($content_block['aside']){
            if(get_field('aside_type',$content_block['aside']->ID) && get_field('aside_type',$content_block['aside']->ID) === 'quote') {
               $html .= river_quote_maker($content_block['aside']);
            } else {
              $html .=  $content_block['aside']->post_content;
            }
          }
          $html .= '</div>';
          $intro = '';
          if ($content_block['content_type'] === 'intro'){
            $intro = ' intro';
            // var_dump($content_block['content_type']);
          }
          $html .= '<div class="fotj-content' . $intro . '">';
          if ($content_block['main_text']){   
            $html .= $content_block['main_text'];
          }
          $html .= '</div>';
        }
      }
      return $html;
    }

  }

  function river_quote_maker($aside){
     $html = '';
     $html .= '<div class="fotj-quote">';
     $html .=  $aside->post_content;
     $html .= '<span class="fotj-quote-author">– ' . get_field('quote_author',$aside->ID) . '</span>';
     $html .= '</div>';
     return $html;

  }

  //ACF STUFF
  add_filter('acf/settings/save_json', 'river_acf_json_save_point');
   
  function river_acf_json_save_point( $path ) {
      // update path
      $path = get_stylesheet_directory() . '/acf-json';
      // return
      return $path;
  }

  add_filter('acf/settings/load_json', 'river_acf_json_load_point');

  function river_acf_json_load_point( $paths ) {
      // remove original path (optional)
      unset($paths[0]);
      // append path
      $paths[] = get_stylesheet_directory() . '/acf-json';    
      // return
      return $paths;
      
  }
}
