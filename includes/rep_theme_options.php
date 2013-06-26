<?php
/**
 * @package WordPress
 * @subpackage Rep_Template
 *
 * Place NHP Themes Options Here
 *
 */

function setup_framework_options(){

  /******************************* Options *******************************/

  $intro_text = __('<p>This is the HTML which can be displayed before the form, it isnt required, but more info is always better. Anything goes in terms of markup here, any HTML.</p>', 'nhp-opts');

  $options = array(
    'opt_name'            => 'rep_opts',
    'dev_mode'            => true,
    'show_import_export'  => true,
    'stylesheet_override' => false,
    'menu_icon'           => '',
    'google_api_key'      => '',
    'menu_title'          => __('Theme Options', 'nhp-opts'),
    'page_title'          => __('Republique WordPress Theme Options', 'nhp-opts'),
    'page_cap'            => 'manage_options',
    'page_slug'           => 'nhp_theme_options',
    'intro_text'          => $intro_text,
    'page_type'           => 'menu', // menu | submenu
    'page_parent'         => 'themes.php',
    'page_position'       => 100,
    'page_icon'           => 'icon-themes',
    'allow_sub_menu'      => true,

    'share_icons'         => array(
      'twitter' => array(
        'link'  => 'http://twitter.com/lee__mason',
        'title' => 'Folow me on Twitter',
        'img'   => NHP_OPTIONS_URL.'img/glyphicons/glyphicons_322_twitter.png'
      ),
      'linked_in' => array(
        'link'  => 'http://uk.linkedin.com/pub/lee-mason/38/618/bab',
        'title' => 'Find me on LinkedIn',
        'img'   => NHP_OPTIONS_URL.'img/glyphicons/glyphicons_337_linked_in.png'
      )
    )

  );

  /******************************* Sections *******************************/
  /**
   *
   * Available field types:
   * text|textarea|editor|checkbox|multi_checkbox|radio|radio_img|button_set|select|multi_select|color|date|divide|info|upload
   *
   */


  $sections = array();

  $sections[] = array(
    'title'  => __('General Options', 'nhp-opts'),
    'desc'   => __('<p class="description">General Theme Options</p>', 'nhp-opts'),
    'icon'   => NHP_OPTIONS_URL.'img/glyphicons/glyphicons_062_attach.png',
    'fields' => array(
      array(
        'id'         => 'twitterURL',
        'type'       => 'text',
        'title'      => __('Twitter URL', 'nhp-opts'),
        'sub_desc'   => __('This is a little space under the Field Title in the Options table, additonal info is good in here.', 'nhp-opts'),
        'desc'       => __('This is the description field, again good for additional info.', 'nhp-opts'),
      )
    )
  );

  $sections[] = array(
    'title'  => __('Twitter API Options', 'nhp-opts'),
    'desc' => __( '<p>The Twitter API settings</p>', 'nhp-opts' ),
    'icon'   => NHP_OPTIONS_URL.'img/glyphicons/glyphicons_062_attach.png',
    'fields' => array(
      array(
        'id'         => 'consumerKey',
        'type'       => 'text',
        'title'      => __('Consumer Key', 'nhp-opts'),
        'sub_desc'   => __('Obtained via the Twitter developer website.', 'nhp-opts'),
        'class'      => 'large-text'
      ),
      array(
        'id'         => 'consumerSecret',
        'type'       => 'text',
        'title'      => __('Consumer Secret', 'nhp-opts'),
        'sub_desc'   => __('Obtained via the Twitter developer website.', 'nhp-opts'),
        'class'      => 'large-text'
      ),
      array(
        'id'         => 'oAuthToken',
        'type'       => 'text',
        'title'      => __('OAuth Token', 'nhp-opts'),
        'sub_desc'   => __('Obtained via the Twitter developer website.', 'nhp-opts'),
        'class'      => 'large-text'
      ),
      array(
        'id'         => 'oAuthSecret',
        'type'       => 'text',
        'title'      => __('OAuth Secret', 'nhp-opts'),
        'sub_desc'   => __('Obtained via the Twitter developer website.', 'nhp-opts'),
        'class'      => 'large-text'
      )
    )
  );

  /******************************* Tabs *******************************/

  $tabs = array();

  if (function_exists('wp_get_theme')){
    $theme_data  = wp_get_theme();
    $theme_uri   = $theme_data->get('ThemeURI');
    $description = $theme_data->get('Description');
    $author      = $theme_data->get('Author');
    $version     = $theme_data->get('Version');
    $tags        = $theme_data->get('Tags');
  } else {
    $theme_data  = get_theme_data(trailingslashit(get_stylesheet_directory()).'style.css');
    $theme_uri   = $theme_data['URI'];
    $description = $theme_data['Description'];
    $author      = $theme_data['Author'];
    $version     = $theme_data['Version'];
    $tags        = $theme_data['Tags'];
  }

  $theme_info = '<div class="nhp-opts-section-desc">';
  $theme_info .= '<p class="nhp-opts-theme-data description theme-uri">'.__('<strong>Theme URL:</strong> ', 'nhp-opts').'<a href="'.$theme_uri.'" target="_blank">'.$theme_uri.'</a></p>';
  $theme_info .= '<p class="nhp-opts-theme-data description theme-author">'.__('<strong>Author:</strong> ', 'nhp-opts').$author.'</p>';
  $theme_info .= '<p class="nhp-opts-theme-data description theme-version">'.__('<strong>Version:</strong> ', 'nhp-opts').$version.'</p>';
  $theme_info .= '<p class="nhp-opts-theme-data description theme-description">'.$description.'</p>';
  $theme_info .= '<p class="nhp-opts-theme-data description theme-tags">'.__('<strong>Tags:</strong> ', 'nhp-opts').implode(', ', $tags).'</p>';
  $theme_info .= '</div>';

  $tabs['theme_info'] = array(
    'icon'    => NHP_OPTIONS_URL.'img/glyphicons/glyphicons_195_circle_info.png',
    'title'   => __('Theme Information', 'nhp-opts'),
    'content' => $theme_info
  );

  if (file_exists(trailingslashit(get_stylesheet_directory()).'README.html')) {
    $tabs['theme_docs'] = array(
      'icon'    => NHP_OPTIONS_URL.'img/glyphicons/glyphicons_071_book.png',
      'title'   => __('Documentation', 'nhp-opts'),
      'content' => nl2br(file_get_contents(trailingslashit(get_stylesheet_directory()).'README.html'))
    );
  }

  global $NHP_Options;

  $NHP_Options = new NHP_Options($sections, $options, $tabs);

}

?>