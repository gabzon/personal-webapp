<?php
/*
Title: Presentation information
Post Type: presentation
*/



$presentation_location_name = array(
    'type'         => 'text',
    'field'        => 'presentation_location_name',
    'label'        => __('Location name / Institution','sage'),
    'columns'      => 12,
);

$presentation_city = array(
    'type'         => 'text',
    'field'        => 'presentation_city',
    'label'        => __('City', 'sage'),
    'columns'      => 6
);

$presentation_country = array(
    'type'         => 'text',
    'field'        => 'presentation_country',
    'label'        => __('Country', 'sage'),
    'columns'      => 6
);

piklist('field', array(
    'type'         => 'group',
    'field'        => 'presentation_location',
    'label'        => __('Location','sage'),
    'fields'       => array(
        $presentation_location_name,
        $presentation_city,
        $presentation_country,
    )
));

$presentation_date = array(
    'type'         => 'datepicker',
    'field'        => 'presentation_date',
    'label'        => __('Date', 'sage'),
    'columns'      => 4
);

$presentation_time = array(
    'type'         => 'text',
    'field'        => 'presentation_date',
    'label'        => __('Time', 'sage'),
    'columns'      => 4
);

$presentation_duration = array(
    'type'         => 'text',
    'field'        => 'presentation_duration',
    'label'        => __('Duration (minutes)','sage'),
    'columns'      => 4
);

piklist('field', array(
    'type'         => 'group',
    'field'        => 'presentation_period',
    'label'        => __('Date','sage'),
    'fields'       => array(
        $presentation_date,
        $presentation_time,        
        $presentation_duration,
    )
));

piklist('field', array(
    'type'         => 'text',
    'field'        => 'presentation_website',
    'label'        => __('Website', 'sage'),
    'columns'      => 12
));

piklist('field', array(
    'type' => 'file',
    'field' => 'presentation_photo_gallery',
    'scope' => 'post_meta',
    'label' => __('Add photo(s)','sage'),
    'options' => array(
        'modal_title' => __('Add photo(s)','sage'),
        'button' => __('Add','sage')
    )
));
