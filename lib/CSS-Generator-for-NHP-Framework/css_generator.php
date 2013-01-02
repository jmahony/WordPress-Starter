<?php

add_action('wp_head', 'generate_styles');

function generate_styles() {
	$options = get_option('streamuk');

	$styleIndex = array(
		'navigation-bar-background-color' => array(
			'selector'     => '.sf-menu, .sf-menu li, .sf-menu li li',
			'property'     => 'background-color'
		),
		'navigation-bar-color' => array(
			'selector'     => '#nav a',
			'property'     => 'color'
		),
		'navigation-bar-active-color' => array(
			'selector'     => '#nav li.current-menu-item a',
			'property'     => 'color'
		),
		'navigation-border-color' => array(
			'selector'     => '.sf-menu, .sf-menu li',
			'property'     => 'border-color'
		),
		'current-navigation-border-color' => array(
			'selector'     => '.sf-menu li.current-menu-item',
			'property'     => 'border-color'
		),
		'body-background-color' => array(
			'selector'     => 'body',
			'property'     => 'background-color'
		),
		'precontent-slider-current' => array(
			'selector'     => '.home-item.active',
			'property'     => 'border-color'
		),
		'precontent-background-image' => array(
			'selector'     => '#pre-content-bg',
			'property'     => 'background-image'
		),
		'widget-footer-background-color' => array(
			'selector'     => '#widget-footer-wrapper',
			'property'     => 'background-color'
		),
		'footer-background-color' => array(
			'selector'     => '#footer-wrapper',
			'property'     => 'background-color'
		),
		'footer-color' => array(
			'selector'     => '#widget-footer-wrapper, #widget-footer-wrapper a',
			'property'     => 'color'
		),
		'footer-border-color' => array(
			'selector'     => '#footer-wrapper',
			'property'     => 'border-color'
		),
		'watch-now-small-background' => array(
			'selector'     => '.watch-now-small',
			'property'     => 'background-color'
		),
		'text-color' => array(
			'selector'     => 'body, ul, li, ol, a, #category-selector a',
			'property'     => 'color'
		),
		'heading-color' => array(
			'selector'     => 'h1 a, h2 a, h3 a, h4 a, h5 a, h6 a, h1, h2, h3, h4, h5, h6, .post-meta',
			'property'     => 'color'
		),
		'page-header-background-color' => array(
			'selector'     => '#page-header #page-title',
			'property'     => 'background-color'
		),
		'page-header-color' => array(
			'selector'     => '#page-header #page-title h1',
			'property'     => 'color'
		),
		'top-nav-text-color' => array(
			'selector'     => '#top-nav .menu-item a',
			'property'     => 'color'
		),
		'breadcrumb-text-color' => array(
			'selector'     => '.breadcrumbs, .breadcrumbs a',
			'property'     => 'color'
		)
	);

	$Stylesheet = new CssStyleSheet();

	foreach($options as $key => $value) {
		if (array_key_exists($key, $styleIndex)) {
			$CssAttribute = new CssAttribute($styleIndex[$key]['selector']);
			$CssAttribute->addProperty($styleIndex[$key]['property'], $value);
			$Stylesheet->addAttribute($CssAttribute);
		}
	}

	echo $Stylesheet->toString();
}

/**
 * CssStyleSheet 
 *
 * Generates a style sheet
 *
 * @package default
 * @author Josh Mahony (Republique Design)
 **/
class CssStyleSheet {

	/**
	 * attributes
	 *
	 * Holds an array of CssAttribute objects
	 * with the selector as the key
	 *
	 * @var array
	 **/
	private $attributes;

	function __construct() {
		$this->attributes = array();
	}

	/**
	 * toString
	 * 
	 * Iterates through the attributes array calling the
	 * toString method of each attribute object
	 * 
	 * @return String
	 **/
	public function toString() {
		$css = '<style type="text/css">';

		foreach ($this->attributes as $attribute) {
			$css .= $attribute->toString();
		}

		$css .= '</style>';

		return $css;
	}

	/**
	 * addAttribute
	 * 
	 * Adds an attribute to the stylesheet.
	 * Will merge with attribute if selector already
	 * exists in the attributes array.
	 * 
	 * @return void
	 * @param CssAttribute object
	 **/
	public function addAttribute(CssAttribute $CssAttribute) {
		$selector = $CssAttribute->getSelector();

		if ($this->hasAttribute($selector)) {
			$this->attributes[$selector]->merge($CssAttribute);
		} else {
			$this->attributes[$selector] = $CssAttribute;
		}
	}

	/**
	 * hasAttribute
	 * 
	 * Checks if selector already exists in the attributes array
	 * 
	 * @return Boolean
	 * @param selector
	 **/
	private function hasAttribute($selector = '') {
		return array_key_exists($selector, $this->attributes);
	}
} // END class 

/**
 * CssAttribute
 * 
 * Stores the selector and properties of a CSS attribute
 *
 * @package default
 * @author Joshua Mahony (Rep)
 * @
 **/
class CssAttribute {
	
	/**
	 * selector
	 *
	 * Holds the selector part of the CSS attribute,
	 * e.g. the 'heading' part of .heading { }
	 *
	 * @var String
	 **/
	private $selector;

	/**
	 * properties
	 * 
	 * 
	 * Holds the properties part of the CSS attribute,
	 * e.g. anything between { } part of .heading { }
	 * @example
	 * array(
	 * 		'color' => 'red'
	 * );
	 *
	 * @var Array
	 **/
	private $properties;

	/**
	 * Constructor
	 *
	 * Assign the selector type and selector for the attribute
	 *
	 * @return void
	 * @param selector
	 **/
	function __construct($selector = '') {
		$this->selector   = $selector;
		$this->properties = array();
	}

	/**
	 * addProperty
	 *
	 * Add a property to the properties array, e.g.
	 * addProperty('color','red')
	 *
	 * @return void
	 * @param type
	 * @param value
	 **/
	public function addProperty($type = '', $value = ''){
		$this->properties[$type] = $value;
	}

	/**
	 * toString
	 * 
	 * Converts the properties to a printable string
	 * 
	 * @return String
	 **/
	public function toString() {
		$attribute  = '';
		$attribute .= $this->selector . '{';

		foreach ($this->properties as $property => $value) {

			if ($value != null) {
				$attribute .= $property . ':';

				if ($this->isURL($value)) {
					$attribute .= 'url(' . $value . ');';
				} else {
					$attribute .= $value . ';';
				}
			}
		}

		$attribute .= '}';

		return $attribute;
	}

	/**
	 * merges
	 * 
	 * Merges supplied CssAttribute with itself
	 * 
	 * @return String
	 * @param CssAttribute object
	 **/
	public function merge(CssAttribute $CssAttribute) {
		$properties = $CssAttribute->getProperties();
		$this->properties = array_merge($this->properties, $properties);
	}

	/**
	 * isURL
	 * 
	 * Retruns whether or not a string is a URL
	 * 
	 * @param url
	 * @return Boolean
	 **/
	public function isURL($url = '') {
		if (strpos($url, 'http') > -1) {
			return true;
		}
		return false;
	}

	/**
	 * getProperties
	 * 
	 * Returns the properties array
	 * 
	 * @return Array
	 **/
	private function getProperties() {
		return $this->properties;
	}

	/**
	 * getSelector
	 * 
	 * Returns the selector string
	 * 
	 * @return String
	 **/
	public function getSelector() {
		return $this->selector;
	}
} // END class 
?>