<?php
/**
 * @package WordPress
 * @subpackage Rep_Template
 *
 * Place all of your meta boxes here (requires JMetaBox framework)
 *
 */

if ( is_admin() ) {

  add_action( 'init', function() {

    new JMetaBox( array(
      'id'       => 'rep_meta_box',
      'title'    => 'Page Options',
      'desc'     => '',
      'context'  => 'advanced',
      'priority' => 'high',
      'types'    => array(
        'page'
      ),
      'fields' => array(
      )
    ) );

 });
}
?>