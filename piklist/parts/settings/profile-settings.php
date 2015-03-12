<?php
/*
Title: Profile information
Setting: my_theme_settings
Tab: Profile
*/

/**
 * 1. Full Name
 * 2. Personal profile
 * 3. Driving License
 * 4. Marital status
 * 5. Languages
 * 6. Personal Skills
 * 7. Computer Skills
**/

/*******************************************************************************
 * Full Name
*******************************************************************************/

piklist('field', array(
    'type'      => 'text',
    'field'     => 'full_name',
    'label'     => __('Full name','sage'),
    'columns'   => 4
));

piklist('field', array(
    'type'      => 'text',
    'field'     => 'main_email',
    'label'     => __('Email','sage'),
    'columns'   => 4
));

piklist('field', array(
    'type'      => 'text',
    'field'     => 'main_phone',
    'label'     => __('Phone','sage'),
    'columns'   => 4
));

piklist('field', array(
    'type'      => 'text',
    'field'     => 'nationality',
    'label'     => __('Nationality','sage'),
    'columns'   => 4
));

piklist('field', array(
    'type'      => 'datepicker',
    'field'     => 'birthday',
    'label'     => __('Birthday','sage'),
    'columns'   => 4
));

/*******************************************************************************
 * Personal profile
*******************************************************************************/

piklist('field', array(
    'type'      => 'editor',
    'field'     => 'main_profile',
    'label'     => __('Profile','sage'),
    'columns'   => 12
));

/*******************************************************************************
 * Spoken languages
*******************************************************************************/

$language = array(
    'type'      => 'text',
    'field'     => 'language',
    'label'     => __('Language','sage'),
    'columns'   => 2
);

$language_acronym = array(
    'type'      => 'text',
    'field'     => 'language_acronym',
    'label'     => __('Acronym','sage'),
    'columns'   => 1
);

$language_level = array(
    'type'      => 'text',
    'field'     => 'language_level',
    'label'     => __('Level of proficiency','sage'),
    'columns'   => 4
);

piklist('field', array(
    'type'      => 'group',
    'field'     => 'languages',
    'label'     => __('Spoken languages'),
    'add_more'  => true,
    'columns'   => 6,
    'fields'    => array( $language, $language_acronym, $language_level )
));

/*******************************************************************************
 * Driving license
*******************************************************************************/

piklist('field', array(
    'type'      => 'select',
    'field'     => 'driving_license',
    'label'     => 'Driving License',
    'value'     => '-1',
    'choices'   => array(
        '-1'=> __('None', 'sage'),
        '0' => __('Moto','sage'),
        '1' => __('Car','sage'),
        '2' => __('Car + Moto','sage'),
        '3' => __('Car + Truck','sage'),
        '4' => __('Car + Truck + Moto','sage')
    )
));

/*******************************************************************************
 * Marital Status
 ******************************************************************************/

piklist('field', array(
    'type' => 'select',
    'field' => 'marital_status',
    'label' => 'Marital status',
    'choices' => array(
        'single' => __('Single','sage'),
        'married' => __('Married','sage'),
    )
));


/*******************************************************************************
 * Personal skills section
 ******************************************************************************/

$personal_skill_title = array(
    'type' => 'text',
    'field' => 'personal_skill_title',
    'columns' => 12
);

$personal_skill_content = array(
    'type'       => 'textarea',
    'field'      => 'personal_skill_content',
    'columns'    => 12,
    'attributes' => array('rows'=> 3)
);

piklist('field', array(
    'type' => 'group',
    'field' => 'personal_skills',
    'label' => __('Personal Skills'),
    'add_more' => true,
    'fields' => array(
            $personal_skill_title,
            $personal_skill_content
    )
));

/*******************************************************************************
 * Computer skills section
 ******************************************************************************/

$computer_skill_title = array(
    'type' => 'text',
    'field' => 'computer_skill_title',
    'columns' => 12
);

$computer_skill_content = array(
    'type'       => 'textarea',
    'field'      => 'computer_skill_content',
    'columns'    => 12,
    'attributes' => array('rows'=> 3)
);

piklist('field', array(
    'type' => 'group',
    'field' => 'computer_skills',
    'label' => __('Computer Skills'),
    'add_more' => true,
    'fields' => array(
            $computer_skill_title,
            $computer_skill_content
    )
));

/*******************************************************************************
 * Color
 ******************************************************************************/

piklist('field', array(
    'type' => 'colorpicker'
    ,'field' => 'colorpicker'
    ,'label' => 'Choose a color'
    ,'value' => '#aee029'
    ,'description' => 'Click in the box to select a color.'
    ,'help' => 'This is help text.'
    ,'attributes' => array(
        'class' => 'text'
    )
));
