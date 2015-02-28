<?php
/*
Title: Exhibition information
Post Type: exhibition
*/

$exhibition_location_name = array(
    'type'         => 'text',
    'field'        => 'exhibition_location_name',
    'label'        => __('Location name / Institution','sage'),
    'columns'      => 12,
);

$exhibition_city = array(
    'type'         => 'text',
    'field'        => 'exhibition_city',
    'label'        => __('City', 'sage'),
    'columns'      => 6
);

$exhibition_country = array(
    'type'         => 'text',
    'field'        => 'exhibition_country',
    'label'        => __('Country', 'sage'),
    'columns'      => 6
);

piklist('field', array(
    'type'         => 'group',
    'field'        => 'exhibition_location',
    'label'        => __('Location','sage'),
    'fields'       => array(
        $exhibition_location_name,
        $exhibition_city,
        $exhibition_country,
    )
));


$exhibition_start_date = array(
    'type'         => 'datepicker',
    'field'        => 'exhibition_start_date',
    'label'        => __('Start Date', 'sage'),
    'columns'      => 4
);

$exhibition_end_date = array(
    'type'         => 'datepicker',
    'field'        => 'exhibition_end_date',
    'label'        => __('End Date', 'sage'),
    'columns'      => 4
);

$exhibition_time = array(
    'type'         => 'text',
    'field'        => 'exhibition_date',
    'label'        => __('Time', 'sage'),
    'columns'      => 4
);

piklist('field', array(
    'type'         => 'group',
    'field'        => 'exhibition_period',
    'label'        => __('Date','sage'),
    'fields'       => array(
        $exhibition_start_date,
        $exhibition_end_date,
        $exhibition_time
    )
));

piklist('field', array(
    'type'         => 'text',
    'field'        => 'exhibition_website',
    'label'        => __('Website', 'sage'),
    'columns'      => 12
));

piklist('field', array(
    'type' => 'file',
    'field' => 'exhibition_photo_gallery',
    'scope' => 'post_meta',
    'label' => __('Add photo(s)','sage'),
    'options' => array(
        'modal_title' => __('Add photo(s)','sage'),
        'button' => __('Add','sage')
    )
));
