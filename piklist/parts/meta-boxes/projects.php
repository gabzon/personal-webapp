<?php
/*
Title: Projects information
Post Type: project
*/

piklist('field', array(
   'type'         => 'text',
   'field'        => 'project_job_title',
   'label'        => __('Job title','sage'),
   'columns'      => 12,
));

$project_city = array(
    'type'         => 'text',
    'field'        => 'project_city',
    'label'        => __('City', 'sage'),
    'columns'      => 6
);

$project_country = array(
    'type'         => 'text',
    'field'        => 'project_country',
    'label'        => __('Country', 'sage'),
    'columns'      => 6
);

piklist('field', array(
    'type'         => 'group',
    'field'        => 'project_location',
    'label'        => __('Location','sage'),
    'fields'       => array(
        $project_city,
        $project_country,
    )
));

$job_start_date = array(
   'type'         => 'datepicker',
   'field'        => 'project_start_date',
   'label'        => __('Start date','sage'),
   'columns'      => 6
);

$job_end_date = array(
   'type'         => 'datepicker',
   'field'        => 'project_end_date',
   'label'        => __('End date', 'sage'),
   'columns'      => 6
);

piklist('field', array(
   'type'         => 'group',
   'field'        => 'project_period',
   'label'        => __('Period','sage'),
   'fields'       => array(
         $job_start_date,
         $job_end_date,
   )
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

piklist('field', array(
   'type'         => 'text',
   'field'        => 'project_website',
   'label'        => __('Project Website', 'sage'),
   'columns'      => 12
));

piklist('field', array(
   'type'         => 'text',
   'field'        => 'project_facebook',
   'label'        => __('Facebook', 'sage'),
   'columns'      => 12
));

piklist('field', array(
   'type'         => 'text',
   'field'        => 'project_twitter',
   'label'        => __('Twitter', 'sage'),
   'columns'      => 12
));

piklist('field', array(
   'type'         => 'text',
   'field'        => 'project_gplus',
   'label'        => __('Google+', 'sage'),
   'columns'      => 12
));

piklist('field', array(
   'type'         => 'text',
   'field'        => 'project_instagram',
   'label'        => __('Instagram', 'sage'),
   'columns'      => 12
));

piklist('field', array(
   'type'         => 'text',
   'field'        => 'project_pinterest',
   'label'        => __('Pinterest', 'sage'),
   'columns'      => 12
));

piklist('field', array(
   'type'         => 'text',
   'field'        => 'project_youtube',
   'label'        => __('Youtube', 'sage'),
   'columns'      => 12
));

piklist('field', array(
   'type'         => 'text',
   'field'        => 'project_vimeo',
   'label'        => __('Vimeo', 'sage'),
   'columns'      => 12
));
