<?php namespace Rep\Core;
/**
 * @package WordPress
 * @subpackage Rep_Template
 *
 * Republique Framework Core Functions
 *
 */

function load_library( $a = array() ) {

  foreach ( $a as $v ) {
    if ( file_exists( THEME_DIR . $v ) ) {
      require_once( THEME_DIR . $v );
    }
  }

}

function add_actions( $actions = array() ) {

  foreach ( $actions as $hook => $action ) {
    if ( function_exists( $action ) ) {
      add_action( $hook, $action );
    }
  }

}

?>
