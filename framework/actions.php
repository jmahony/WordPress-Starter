<?php namespace Rep\Actions;
/**
 * @package WordPress
 * @subpackage Rep_Template
 *
 * Actions
 *
 */

$actions = array(

  'admin_enqueue_scripts' => 'rep_enqueue_styles_admin',
  'init'                  => 'rep_create_post_type',
  'wp_enqueue_scripts'    => 'rep_enqueue_scripts',
  'wp_enqueue_scripts'    => 'rep_enqueue_styles',
  'init'                  => 'rep_create_post_type',
  'widgets_init'          => 'rep_sidebars_init'

);

if ( STYLE_KEY ) $actions['wp_head'] = 'add_styles';

if ( INCLUDE_JS  ) $actions['wp_enqueue_scripts'] = 'Rep\\Enqueue\\enqueue_scripts';

if ( INCLUDE_CSS  ) $actions['wp_enqueue_scripts'] = 'Rep\\Enqueue\\enqueue_styles';


\Rep\Core\add_actions( $actions );

?>
