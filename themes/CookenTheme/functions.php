<?php

function cooken_files() {
    wp_enqueue_style( 'bootstrap_cooken', get_theme_file_uri( '/css/bootstrap.min.css' ), array(), '4.1.3' );
    wp_enqueue_script( 'bootstrap_cooken', get_theme_file_uri( '/js/bootstrap.min.js' ), array( 'jquery' ), '4.1.3', true );
    wp_enqueue_script( 'cardSlider', get_theme_file_uri( '/js/main.js' ),null,'1.0', true);
    wp_register_style( 'cooken_main_styles', get_stylesheet_uri() );
    wp_enqueue_style( 'cooken_main_styles');
    wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
  
}



/* sidebar */


if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Shop Sidebar',
    'id' => 'shop-sidebar',
    'before_widget' => '<div class = "%2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);

/* widget classic */

function example_theme_support() {
    remove_theme_support( 'widgets-block-editor' );
    }
    add_action( 'after_setup_theme', 'example_theme_support' );


/* menumobile */

add_action('wp_enqueue_scripts', 'cooken_files');
function cooken_menumobile() {
    wp_enqueue_script( 'moblie-menu', get_template_directory_uri() . '/menuMobile/menu-mobile.js',  array ( 'jquery' ) , true);
    wp_enqueue_style( 'boxicon', 'https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' );
}

add_action('wp_enqueue_scripts', 'cooken_menumobile');

/* carousel */

function cooken_carousel() {
    wp_enqueue_style( 'carousel-file-1', get_template_directory_uri() . '/owlcarousel/assets/owl.carousel.min.css',false,'1.1','all');
    wp_enqueue_style( 'carousel-flie-2', get_template_directory_uri() . '/owlcarousel/assets/owl.theme.default.min.css',false,'1.1','all');
    wp_enqueue_script( 'carousel-file-3', get_template_directory_uri() . '/owlcarousel/owl.carousel.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'carousel-file-4', get_template_directory_uri() . '/jquery.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'carousel-file-5', get_template_directory_uri() . '/carousel/carousel-custom.js', array ( 'jquery' ), true);
}
add_action('wp_enqueue_scripts', 'cooken_carousel');





/* swiper-bundle */

function cooken_swiper_bundle() {
    wp_enqueue_style( 'swiper_bundle-1', '//unpkg.com/swiper@7/swiper-bundle.min.css',false,'1.1','all');
    wp_enqueue_script( 'swiper_bundle-3', '//unpkg.com/swiper@7/swiper-bundle.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'swiper_bundle-4', get_template_directory_uri() . '/jquery.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'swiper_bundle_js_custom', get_template_directory_uri() . '/swiper/swiper.js', array ( 'jquery' ), true);
}
add_action('wp_enqueue_scripts', 'cooken_swiper_bundle');


/* Create menu */

register_nav_menu( 'primary-menu', __('Primary Menu', 'cooken') );

if ( !function_exists('cooken_menu')) {
    function cooken_menu($menu) {
        $menu = array(
            'theme_location' => $menu,
            'container' => 'nav',
            'container' => $menu
        );
        wp_nav_menu( $menu );
    }
}

/* logo */

function theme_prefix_setup() {
	
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

function theme_prefix_the_custom_logo() {
	
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}

}

/* add custom shop */

add_filter( 'woocommerce_default_catalog_orderby_options', 'custom_woocommerce_catalog_orderby' );
add_filter('woocommerce_catalog_orderby', 'custom_woocommerce_catalog_orderby');



// Tùy chỉnh các tùy chọn sắp xếp sản phẩm WooCommerce
// Tùy chọn có sẵn là: menu_order, xếp hạng, ngày, mức độ phổ biến, giá, giá-desc
function custom_woocommerce_product_sorting( $orderby ) {
    // The following removes the rating, date, and the popularity sorting options;
    // feel free to customize and enable/disable the options as needed. 
    unset($orderby["rating"]);
    unset($orderby["date"]);
    unset($orderby["popularity"]);
    return $orderby;
  }
  add_filter( "woocommerce_catalog_orderby", "custom_woocommerce_product_sorting", 20 );

 

  // After setup theme hook adds WC support
  function Cooken_add_woocommerce_support() {
      add_theme_support( 'woocommerce', array(
          'thumbnail_image_width' => 255,
          'single_image_width' => 255,
          'product_grid'          => array(
            'default_rows'    => 3,
            'min_rows'        => 2,
            'max_rows'        => 8,
            'default_columns' => 4,
            'min_columns'     => 2,
            'max_columns'     => 5,
        ),

      ) ); 
      add_theme_support( 'wc-product-gallery-zoom' );
      add_theme_support( 'wc-product-gallery-lightbox' );
      add_theme_support( 'wc-product-gallery-slider' );
  }
  add_action( 'after_setup_theme', 'Cooken_add_woocommerce_support' );

  add_filter( 'woocommerce_get_catalog_ordering_args', 'custom_woocommerce_get_catalog_ordering_args' );

function custom_woocommerce_get_catalog_ordering_args( $args ) {
$orderby_value = isset( $_GET['orderby'] ) ? woocommerce_clean( $_GET['orderby'] ) : apply_filters( 'woocommerce_default_catalog_orderby', get_option( 'woocommerce_default_catalog_orderby' ) );

if ( 'alphabetical' == $orderby_value || 'menu_order' == $orderby_value ) {
$args['orderby'] = 'title';
$args['order'] = 'ASC';
}

return $args;
}

add_filter( 'woocommerce_default_catalog_orderby_options', 'custom_woocommerce_catalog_orderby' );
add_filter( 'woocommerce_catalog_orderby', 'custom_woocommerce_catalog_orderby' );

function custom_woocommerce_catalog_orderby( $sortby ) {
$sortby['alphabetical'] = __( 'Alfabetisk' );
return $sortby;
}

add_filter( 'get_the_archive_title', function ($title) {    
    if ( is_category() ) {    
            $title = single_cat_title( '', false );    
        } elseif ( is_tag() ) {    
            $title = single_tag_title( '', false );    
        } elseif ( is_author() ) {    
            $title = '<span class="vcard">' . get_the_author() . '</span>' ;    
        } elseif ( is_tax() ) { //for custom post types
            $title = sprintf( __( '%1$s' ), single_term_title( '', false ) );
        } elseif (is_post_type_archive()) {
            $title = post_type_archive_title( '', false );
        }
    return $title;    
});

/* end custom shop */

/* add shortcode widget */
add_filter('widget_text', 'do_shortcode');

function gal_hover_shortcode( $atts, $content = null ) {
 
    extract( shortcode_atts( array(
      'size' => ''
      ), $atts ) );
  
    $image_size = 'medium';
    if($size =! '') { $image_size = $size; }
  
    $images = get_children(array(
        'post_parent' => get_the_ID(),
        'post_type' => 'attachment',
        'numberposts' => 1,
        'post_mime_type' => 'image',
        'orderby' => 'menu_order',
        //'exclude' => get_post_thumbnail_id()
        )
    );
  
    if($images) {
        $gallery = '';
        foreach( $images as $image ) {
                    $gallery .= wp_get_attachment_image($image->ID, $image_size);
        }
        $gallery .= '';
  
        return $gallery;
    }
  
}
add_shortcode('product_hover_img', 'gal_hover_shortcode');

/* delete tabs reviews */
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );
 
function woo_remove_product_tabs( $tabs ) {
 
    
    unset( $tabs['reviews'] ); 			// Xóa tab review
    
 
    return $tabs;
}

/* bỏ tabs */

if ( ! function_exists( 'woocommerce_output_product_data_tabs' ) ) {
    function woocommerce_output_product_data_tabs() {
       wc_get_template( 'single-product/tabs/tabs.php' );
    }
 }
 function woocommerce_output_product_data_tabs() {
    $product_tabs = apply_filters( 'woocommerce_product_tabs', array() );
    if ( empty( $product_tabs ) ) return;
    echo '<div class="woocommerce-tabs wc-tabs-wrapper">';
    foreach ( $product_tabs as $key => $product_tab ) {
       ?>
          <div id="tab-<?php echo esc_attr( $key ); ?>">
             <?php
             if ( isset( $product_tab['callback'] ) ) {
                call_user_func( $product_tab['callback'], $key, $product_tab );
             }
             ?>
          </div>
       <?php         
    }
    echo '</div>';
 }


 add_filter( 'woocommerce_product_tabs', 'woo_custom_description_tab', 98 );
function woo_custom_description_tab( $tabs ) {

    $tabs['description']['callback'] = 'woo_custom_description_tab_content';	// Custom description callback

    return $tabs;
}

function woo_custom_description_tab_content() {
    echo '<div class="row description">';
    echo '<div class="col-lg-9">'; ?>
    <?php the_content() ;?>
    <?php echo '</div>';
    echo '<div class="col-lg-3">'; ?>
    	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
	?>
    <?php echo '</div>';
    echo '</div>';
     
}

add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields',99 );
function custom_override_checkout_fields( $fields ) {
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_first_name']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_country']);
    unset($fields['billing']['billing_address_2']);

  $fields['billing']['billing_last_name'] = array(
    'label' => __('Họ và tên', 'devvn'),
    'placeholder' => _x('Nhập đầy đủ họ và tên của bạn', 'placeholder', 'devvn'),
    'required' => true,
    'class' => array('form-row-wide'),
    'clear' => true
  );
  $fields['billing']['billing_address_1']['placeholder'] = 'Địa chỉ chi tiết. VD:CT2 chung cư skylight, ngõ Hoà Bình 6';
  $fields['billing']['billing_phone']['placeholder'] = 'SĐT. VD:0976452836';
  $fields['billing']['billing_email']['placeholder'] = 'Email. VD:abc@gmail.com';
  $fields['billing']['billing_city']['placeholder'] = 'Thành Phố. VD: Hà Nội';
  return $fields;
}


 