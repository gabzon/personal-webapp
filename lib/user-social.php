<?php

// Register User Contact Methods
function custom_user_contact_methods( $user_contact_method ) {

	$user_contact_method['facebook'] = __( 'Facebook', 'sage' );
	$user_contact_method['twitter'] = __( 'Twitter', 'sage' );
	$user_contact_method['gplus'] = __( 'Google Plus', 'sage' );
    $user_contact_method['linkedin'] = __( 'Linkedin', 'sage' );
    $user_contact_method['pinterest'] = __( 'Pinterest', 'sage' );
    $user_contact_method['instagram'] = __( 'Instagram', 'sage' );
    $user_contact_method['youtube'] = __( 'Youtube', 'sage' );
    $user_contact_method['vimeo'] = __( 'Vimeo', 'sage' );
    $user_contact_method['Vine'] = __( 'Vine', 'sage' );
	$user_contact_method['skype'] = __( 'Skype Username', 'sage' );

	return $user_contact_method;

}

// Hook into the 'user_contactmethods' filter
add_filter( 'user_contactmethods', 'custom_user_contact_methods' );
