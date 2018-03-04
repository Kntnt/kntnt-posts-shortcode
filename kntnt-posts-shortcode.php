<?php

/**
 * Plugin main file.
 *
 * @wordpress-plugin
 * Plugin Name:       Kntnt's Posts Shortcode
 * Plugin URI:        https://github.com/TBarregren/kntnt-posts-shortcode
 * Description:       Provides a shortcode that lists posts.
 * Version:           1.0.0
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.se/
 * License:           GPLv3
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       kntnt-post-shortcode
 * Domain Path:       /languages
 */

namespace Kntnt\Post_Shortcode;

defined( 'WPINC' ) || die;

new Plugin();

final class Plugin {

  public function __construct() {
    load_plugin_textdomain( 'kntnt-post-shortcode', false, 'languages' );
    add_action( 'plugins_loaded', [ $this, 'run' ] );
  }
  
  public function run() {
    add_shortcode('posts', [$this, 'posts']);
  }
  
  public function posts($atts, $content, $tag) {

    $default = array(
      'limit' => '',
      'type' => 'date',
      'order' => '',
      'post_type' => 'post',
    );

    $atts = $this->shortcode_atts($default, $atts);
    
    if ('date' === $atts['type']) {
      $atts['type'] = 'postbypost';
      $atts['order'] = $atts['order'] || 'DESC';
    }
    else {
      $atts['type'] = 'alpha';
      $atts['order'] = $atts['order'] || 'ASC';
    }
    $atts['echo'] = false;

    return '<ul>' . wp_get_archives($atts) . '</ul>';

  }

  private function shortcode_atts($pairs, $atts, $shortcode = '') {

    $out = [];
    $pos = 0;

    // $atts can be a string which is cast to an array. An empty string should
    // be an empty array (not an array with an empty element as by casting).
    $atts = $atts ? (array) $atts : [];

    while($name = key($pairs)) {
      $default = array_shift($pairs);
      if (array_key_exists($name, $atts)) {
        $out[$name] = $atts[$name];
      }
      elseif (array_key_exists($pos, $atts)) {
        $out[$name] = $atts[$pos];
        ++$pos;
      }
      else {
        $out[$name] = $default;
      }
    }

    if ($shortcode) {
      $out = apply_filters("shortcode_atts_{$shortcode}", $out, $pairs, $atts, $shortcode);
    }

    return $out;

  }

}
