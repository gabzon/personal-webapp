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

piklist('field', array(
   'type'         => 'text',
   'field'        => 'job_location',
   'label'        => __('City, Country', 'sage'),
   'columns'      => 12
));

$job_pourcentage = array(
   'type'         => 'text',
   'field'        => 'job_pourcentage',
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
   'field'        => 'school_end_date',
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
