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
      'desc'     => 'Page options for Brighton Digital Festival.',
      'context'  => 'advanced',
      'priority' => 'high',
      'types'    => array(
        'page'
      ),
      'fields' => array(
        array(
          'id'       => 'introText',
          'type'     => 'textarea',
          'label'    => 'Intro Text'
        ),
        array(
          'id'       => 'introTextColor',
          'type'     => 'color',
          'label'    => 'Text Color'
        ),
        array(
          'id'       => 'introBgColor',
          'type'     => 'color',
          'label'    => 'Background Color'
        )
      )
    ) );

 });
}
?>