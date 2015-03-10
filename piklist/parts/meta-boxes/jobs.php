<?php
/*
Title: Job information
Post Type: jobs
*/

piklist('field', array(
   'type'         => 'text',
   'field'        => 'job_company_name',
   'label'        => __('Company name','sage'),
   'columns'      => 12,
));

piklist('field', array(
   'type'         => 'text',
   'field'        => 'job_company_website',
   'label'        => __('Website', 'sage'),
   'columns'      => 12
));

$job_city = array(
    'type'         => 'text',
    'field'        => 'job_city',
    'label'        => __('City', 'sage'),
    'columns'      => 6
);

$job_country = array(
    'type'         => 'text',
    'field'        => 'job_country',
    'label'        => __('Country', 'sage'),
    'columns'      => 6
);

piklist('field', array(
    'type'         => 'group',
    'field'        => 'job_location',
    'label'        => __('Location','sage'),
    'fields'       => array(
        $job_city,
        $job_country,
    )
));

$job_pourcentage = array(
   'type'         => 'text',
   'field'        => 'job_percentage',
   'label'        => __('Full Time / Part time','sage'),
   'columns'      => 4
);

$job_start_date = array(
   'type'         => 'datepicker',
   'field'        => 'job_start_date',
   'label'        => __('Start date','sage'),
   'columns'      => 4
);

$job_end_date = array(
   'type'         => 'datepicker',
   'field'        => 'job_end_date',
   'label'        => __('End date', 'sage'),
   'columns'      => 4
);

piklist('field', array(
   'type'         => 'group',
   'field'        => 'job_period',
   'fields'       => array(
         $job_pourcentage,
         $job_start_date,
         $job_end_date,
   )
));
