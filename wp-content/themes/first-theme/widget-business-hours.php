<?php

/**
 * widget-business-hours.php
 *
 * Plugin Name: Alpha_widget_Business_Hours
 * Plugin URI: http://www.adipurdila.com
 * Description: A widget that displays business hours.
 * Version: 1.0
 * Author: Adi Purdila
 * Author URI: http://www.adipurdila.com
 * 
 */

// Declare the class and name it however you want
class Alpha_Widget_Business_hours extends WP_Widget {

	/**
	* Specifies the widget name, description, class name and instatiates it
	*/
	public function __construct() {
		parent::__construct(
			'widget-business-hours',
			__( 'Alpha: Business Hours', 'alpha' ),
			array(
				'classname' => 'widget-business-hours',
				'description' =>__( 'A custom widget that displays business hours.', 'alpha')
				)
			);
	}
}


// Register widget using an annonymous function
add_action( 'Widgets_init', create_funtion( '', 'register_widget( "Alpha_Widget_Business_Hours" );' ) ); 
?>