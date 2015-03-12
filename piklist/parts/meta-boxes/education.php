<?php
/*
Title: Education information
Post Type: education
*/

piklist('field', array(
   'type'         => 'text',
   'field'        => 'education_school_name',
   'label'        => __('School name','sage'),
   'columns'      => 12,
));

piklist('field', array(
   'type'         => 'text',
   'field'        => 'education_school_website',
   'label'        => __('Website', 'sage'),
   'columns'      => 12
));

piklist('field', array(
   'type'         => 'text',
   'field'        => 'education_location',
   'label'        => __('City, Country', 'sage'),
   'columns'      => 12
));

$school_start_date = array(
   'type'         => 'datepicker',
   'field'        => 'school_start_date',
   'label'        => __('Start date','sage'),
   'columns'      => 6
);

$school_end_date = array(
   'type'         => 'datepicker',
   'field'        => 'school_end_date',
   'label'        => __('End date', 'sage'),
   'columns'      => 6
);

piklist('field', array(
   'type'         => 'group',
   'field'        => 'education_period',
   'fields'       => array(
         $school_start_date,
         $school_end_date,
   )
));

piklist('field', array(
    'type' => 'file',
    'field' => 'education_diploma',
    'scope' => 'post_meta',
    'label' => __('Add diploma','sage'),
    'options' => array(
        'modal_title' => __('Add diploma','sage'),
        'button' => __('Add','sage')
    )
));
