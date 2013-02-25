<?php namespace Rep\Bootstrap;
/**
 * @package WordPress
 * @subpackage Rep_Template
 *
 * Bootstrap
 *
 */


$custom_settings = array(

  '/includes/settings.php'

);

$framework_libraries = array(

  '/framework/defaults.php',
  '/framework/actions.php',
  '/framework/lib/wpalchemy/MetaBox.php',
  '/framework/lib/CSS-Generator-for-NHP-Framework/css_generator.php',
  '/framework/lib/helpers.php',
  '/framework/lib/enqueue.php',
  '/framework/lib/persistence.php'

);

$custom_libraries = array(

  '/includes/rep_meta_boxes.php',
  '/includes/rep_custom_types.php',
  '/includes/rep_enqueue.php',
  '/includes/rep_menus.php',
  '/includes/rep_shortcodes.php',
  '/includes/rep_sidebars.php',
  '/includes/rep_widgets.php',
  '/includes/rep_categories.php',
  '/includes/rep_custom_styles.php',
  '/includes/rep_admin_options.php'

);

\Rep\Core\load_library( array_merge( $custom_settings, $framework_libraries, $custom_libraries ) );

?>
