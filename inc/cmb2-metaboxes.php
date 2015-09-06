<?php
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 *
 * @subpackage: seventeen
 * @subpackage: CMB2
 *
 * text domain: seventeen
 */

/**
 * Localise any date picker form in CMB2.
 * See http://api.jqueryui.com/datepicker/ for more info.
 * Refer to the CMB Field Types Wiki entry
 * if you wish to implement a different date format
 * per meta field using date_format.
 */
add_filter( 'cmb2_localized_data', 'seventeen_cmb_set_date_format' );
function seventeen_cmb_set_date_format( $l10n ) {
	$l10n['defaults']['date_picker']['dateFormat'] = 'dd-mm-yy';
	return $l10n;
} 

add_action( 'cmb2_init', 'seventeen_register_exhibition_dates' );
function seventeen_register_exhibition_dates() {
	$prefix = '_seventeen_';

	$exhibition_dates = new_cmb2_box( array(
		'id'            => $prefix . 'exhibition_dates',
		'title'         => __( 'Exhibition Dates', 'seventeen' ),
		'object_types'  => array( 'exhibitions', ),
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true,
	) );
	
	$exhibition_dates->add_field( array(
		'name'        => __( 'Start Date', 'seventeen' ),
		'desc'        => __( 'The date the exhibition opens', 'seventeen' ),
		'id'          => $prefix . 'startdate',
		'type'        => 'text_date_timestamp',
		'date_format' => __( 'd-m-Y', 'seventeen' ), 
	) );
	
	$exhibition_dates->add_field( array(
		'name'        => __( 'End Date', 'seventeen' ),
		'desc'        => __( 'The date and time the exhibition closes', 'seventeen' ),
		'id'          => $prefix . 'enddate',
		'type'        => 'text_datetime_timestamp',
		'date_format' => __( 'd-m-Y', 'seventeen' ), 
	) );
}
 
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 *
add_filter( 'cmb_meta_boxes', 'cmb_sample_metaboxes' );
function cmb_sample_metaboxes( array $meta_boxes ) {

	$prefix = '_seventeen_';

	$meta_boxes['exhibition_dates'] = array(
		'id'         => 'exhibition_dates',
		'title'      => 'Exhibition Dates',
		'pages'      => array( 'exhibitions' ),
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'fields'     => array(
			array(
				'name' => 'Start Date',
				'desc' => 'The date the exhibition opens',
				'id'   => $prefix . 'startdate',
				'type' => 'text_date_timestamp',
			),
			array(
				'name' => 'End Date',
				'desc' => 'The date and time the exhibtion closes',
				'id'   => $prefix . 'enddate',
				//'type' => 'text_date_timestamp',
				'type' => 'text_datetime_timestamp',
			),
		),
	);

	// Add other metaboxes as needed

	return $meta_boxes;
}
*/

/**
 * Initialize Metabox Class
 * see /lib/metabox/example-functions.php for more information
 *
function seventeen_initialize_cmb_meta_boxes() {
    if ( !class_exists( 'cmb_Meta_Box' ) ) {
        require_once( SEVENTEEN_DIR . '/inc/metabox/init.php' );
    }
}
add_action( 'init', 'seventeen_initialize_cmb_meta_boxes', 9999 );
*/
