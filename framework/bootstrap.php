<?php namespace Rep\Bootstrap;
/**
 * @package WordPress
 * @subpackage Rep_Template
 *
 * Bootstrap
 *
 */

$framework_libraries = array(

  '/framework/defaults.php',
  '/framework/lib/wpalchemy/MetaBox.php', // Start phasing alchemy out
  '/framework/lib/NHP-Theme-Options-Framework/options/options.php',
  '/framework/lib/JMetaBox/build/init.php',
  '/framework/lib/Mustache/Autoloader.php',
  '/framework/lib/helpers.php',
  '/framework/lib/enqueue.php',
  '/framework/lib/persistence.php'

);

$custom_libraries = array(

  '/includes/rep_enqueue.php',
  '/includes/rep_meta_boxes.php',
  '/includes/rep_custom_types.php',
  '/includes/rep_menus.php',
  '/includes/rep_shortcodes.php',
  '/includes/rep_sidebars.php',
  '/includes/widgets/rep_widgets.php',
  '/includes/rep_categories.php',
  '/includes/rep_custom_styles.php',
  '/includes/rep_theme_options.php',

);

/* Include stuff last */
$after = array(

  '/framework/actions.php'

);

\Rep\Core\load_library( array_merge( $framework_libraries, $custom_libraries, $after ) );

?>