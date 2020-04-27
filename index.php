<?php 
/*
Plugin Name: ALT Lab Just One Space
Plugin URI:  https://github.com/
Description: Filters post content to make sure that periods are only followed by one space
Version:     1.0
Author:      ALT Lab
Author URI:  http://altlab.vcu.edu
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: my-toolset

*/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );



function just_one_space_cleaner($content){
  // $content =  str_replace('.  ', '. ', $content);
  $content = preg_replace('/&nbsp;/', '', $content);
  //  $content = preg_replace('/\/\/(www|launch)?\.?(solarwinds\.com)\/?[^"]*/m','$0?cmp='.$referalString, $content);

  return $content;
}


 add_filter('the_content', 'just_one_space_cleaner');
//

//LOGGER -- like frogger but more useful

if ( ! function_exists('write_log')) {
   function write_log ( $log )  {
      if ( is_array( $log ) || is_object( $log ) ) {
         error_log( print_r( $log, true ) );
      } else {
         error_log( $log );
      }
   }
}

  //print("<pre>".print_r($a,true)."</pre>");
