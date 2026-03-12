<?php
   /*
   Plugin Name: Count Up Shortcode
   Plugin URI: https://phildesigns.com
   description: A count up on scroll.
   Version: 1.0.0
   Author: Phillip De Vita
   Author URI: https://phildesigns.com
   License: GPL2
   */
?>
<?php
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
function countup_enqueue_script() {   
// CountUp
wp_enqueue_script( 'countup', plugin_dir_url( __FILE__ ) . 'includes/js/jquery.countup.min.js', array(), '2.0.0', true );	
// Waypoints
wp_enqueue_script( 'waypoints', plugin_dir_url( __FILE__ ) . 'includes/js/jquery.waypoints.min.js', array(), '4.0.1', true );
// Run JS Call for Countup
wp_enqueue_script( 'call-countup', plugin_dir_url( __FILE__ ) . 'includes/js/count-up.js', array(), '1.0.0', true );	
}
add_action('wp_enqueue_scripts', 'countup_enqueue_script');
//Shortcode (usage [count_up data-target="53"]53[/count_up])
function aa_count_up_shortcode( $atts, $content = "" ) {
    return '<span class="counter">' . $content . '</span>';
}
add_shortcode( 'count_up', 'aa_count_up_shortcode' );
?>