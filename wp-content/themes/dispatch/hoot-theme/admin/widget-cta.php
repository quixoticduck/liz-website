<?php
/**
 * Call To Action Widget
 *
 * @package hoot
 * @subpackage dispatch
 * @since dispatch 1.0
 */

/**
* Class Hoot_CTA_Widget
*/
class Hoot_CTA_Widget extends Hoot_WP_Widget {

	function __construct() {
		parent::__construct(

			//id
			'hoot-cta-widget',

			//name
			__( 'Hoot > Call To Action', 'hoot' ),

			//widget_options
			array(
				'description'	=> __('Display Call To Action block.', 'hoot'),
				'class'			=> 'hoot-cta-widget', // CSS class applied to frontend widget container via 'before_widget' arg
			),

			//control_options
			array(),

			//form_options
			//'name' => can be empty or false to hide the name
			array(
				array(
					'name'		=> __( 'Headline/Description', 'hoot' ),
					'id'		=> 'page_id',
					'type'		=> 'select',
					'options'	=> Hoot_WP_Widget::get_wp_list('page'),
				),
				array(
					'name'		=> __( 'Button Text', 'hoot' ),
					'desc'		=> __( 'Leave empty if you dont want to show button', 'hoot' ),
					'id'		=> 'button_text',
					'type'		=> 'text',
					'std'		=> __( '-- LEARN MORE --', 'hoot' ),
				),
				array(
					'name'		=> __( 'URL', 'hoot' ),
					'desc'		=> __( 'Leave empty if you dont want to show button', 'hoot' ),
					'id'		=> 'url',
					'type'		=> 'text',
				),
				array(
					'name'		=> __( 'Border', 'hoot' ),
					'desc'		=> __( 'Top and bottom borders.', 'hoot' ),
					'id'		=> 'border',
					'type'		=> 'select',
					'std'		=> 'none none',
					'options'	=> array(
						'line line'	=> __( 'Top - Line || Bottom - Line', 'hoot' ),
						'line shadow'	=> __( 'Top - Line || Bottom - StrongDash', 'hoot' ),
						'line none'	=> __( 'Top - Line || Bottom - None', 'hoot' ),
						'shadow line'	=> __( 'Top - StrongDash || Bottom - Line', 'hoot' ),
						'shadow shadow'	=> __( 'Top - StrongDash || Bottom - StrongDash', 'hoot' ),
						'shadow none'	=> __( 'Top - StrongDash || Bottom - None', 'hoot' ),
						'none line'	=> __( 'Top - None || Bottom - Line', 'hoot' ),
						'none shadow'	=> __( 'Top - None || Bottom - StrongDash', 'hoot' ),
						'none none'	=> __( 'Top - None || Bottom - None', 'hoot' ),
					),
				),
			)
		);
	}

	/**
	 * Echo the widget content
	 */
	function display_widget( $instance, $before_title = '', $title='', $after_title = '' ) {
		extract( $instance, EXTR_SKIP );
		include( hoot_locate_widget( 'cta' ) ); // Loads the widget/cta or template-parts/widget-cta.php template.
	}

}

/**
 * Register Widget
 */
function hoot_cta_widget_register(){
	register_widget('Hoot_CTA_Widget');
}
add_action('widgets_init', 'hoot_cta_widget_register');