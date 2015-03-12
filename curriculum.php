<?php
/**
* Template Name: Curriculum
*/

$theme_options = get_option('my_theme_settings');

$languages = $theme_options['languages'];

$driving_license = $theme_options['driving_license'];
$marital_status = $theme_options['marital_status'];

$args_school = array( 'post_type' => 'education' , 'numberposts'=> -1);
$args_job = array( 'post_type' => 'jobs' , 'numberposts'=> -1);
$args_project = array( 'post_type' => 'projects' , 'numberposts'=> -1 );

$schools = get_posts( $args_school );
$jobs = get_posts( $args_job );

?>

<div id="curriculum">
    <section class="ui center aligned header" id="curriculum-header" style="background-color:<?php echo $theme_options['colorpicker'] ?>;">
        <div class="ui small circular image">
            <?php echo get_avatar( $theme_options['main_email'], '300' ); ?>
        </div>
        <br>
        <h1 class="ui center aligned icon header">
            <?php echo $theme_options['full_name']; ?>
        </h1>
        <?php
        echo  $theme_options['nationality'] . ", ";
        $birthday_day = substr($theme_options['birthday'],3,2);
        $birthday_month = substr($theme_options['birthday'],0,2);
        $birthday_year = substr($theme_options['birthday'],6);
        echo date("d F Y",mktime(0,0,0,$birthday_month,$birthday_day,$birthday_year));
        $dob = $birthday_year . "-" .$birthday_month . "-" . $birthday_day ;
        echo " (".ageCalculator($dob) ." ". __('years old').")<br>";
        ?>
        <br>
        <div class="ui inverted black button"><a href="mailto:<?php echo $theme_options['main_email']; ?>" class=""><i class="mail icon"></i> Email</a></div>
        <div class="ui inverted black button"><a href="tel:<?php echo $theme_options['main_phone']; ?>" class=""><i class="call icon"></i> Phone</a></div>
        <br><br>
        <div class="ui column centered grid">
            <div class="ten wide center aligned column">
                <p class="body-font"><?php echo $theme_options['main_profile']; ?></p>
                <h3>
                    <?php
                    foreach ($languages['language_acronym'] as $l):
                        echo  $l;
                        if ($l != end($languages['language_acronym'])):
                            echo ' | ';
                        endif;
                    endforeach;
                    ?>
                </h3>
            </div>
        </div>
    </section>

    <div class="ui page grid">
        <div class="column">
            <br>
            <section id="working-experience">
                <h2 class="ui horizontal header divider">
                    <i class="bar chart icon"></i>
                    <?php _e('Working experience','sage') ?>
                </h2>
                <br>
                <?php foreach ( $jobs as $post ) : setup_postdata( $post ); ?>
                    <div class="ui two column grid stackable">
                        <div class="four wide column">
                            <a href="<?php echo get_post_meta($post->ID, 'job_company_website',true); ?>" target="_blank">
                                <h4><?php echo get_post_meta($post->ID, 'job_company_name', true); ?></h4>
                            </a>
                            <?php echo get_post_meta($post->ID, 'job_location', true)[job_city][0].", ".get_post_meta($post->ID, 'job_location', true)[job_country][0]; ?>
                            <?php
                            echo "<br>";
                            $period = get_post_meta($post->ID, 'job_period', true);

                            $start_month = substr($period[job_start_date][0],0,2);
                            $start_year = substr($period[job_start_date][0],6);
                            echo date("M Y", mktime(0, 0, 0, $start_month, 1, $start_year)) . " - ";

                            if ($period[job_end_date][0]) {
                                $end_month = substr($period[job_end_date][0],0,2);
                                $end_year = substr($period[job_end_date][0],6);
                                echo date("M Y", mktime(0, 0, 0, $end_month, 1, $end_year));
                            } else {
                                _e('Currently','sage');
                            }
                            echo "<br>";
                            echo $period[job_percentage][0];
                            ?>

                        </div>
                        <div class="twelve wide column uppercase">
                            <h4><?php the_title(); ?></h4>
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </section>
            <br>
            <br>
            <section id="education">
                <h2 class="ui horizontal header divider">
                    <i class="student icon"></i>
                    <?php _e('Education','sage') ?>
                </h2>
                <br>
                <?php foreach ( $schools as $post ) : setup_postdata( $post ); ?>
                    <div class="ui grid stackable">
                        <div class="four wide column">
                            <?php
                            $school_period = get_post_meta($post->ID, 'education_period', true);

                            $start_month = substr($school_period[school_start_date][0],0,2);
                            $start_year = substr($school_period[school_start_date][0],6);
                            echo "<h4>" . date("M Y", mktime(0, 0, 0, $start_month, 1, $start_year)) . " - ";
                            if ($school_period[school_end_date][0]) {
                                $end_month = substr($school_period[school_end_date][0],0,2);
                                $end_year = substr($school_period[school_end_date][0],6);
                                echo date("M Y", mktime(0, 0, 0, $end_month, 1, $end_year));
                                echo "</h4>";
                            } else {
                                _e('Currently','sage');
                                echo "</h4>";
                            }
                            echo get_post_meta($post->ID,'education_location',true);
                            ?>
                        </div>
                        <div class="ten wide column">
                            <h4><?php the_title(); ?></h4>
                            <a href="<?php echo get_post_meta($post->ID, 'education_school_website',true); ?>" target="_blank">
                                <?php echo get_post_meta($post->ID, 'education_school_name',true); ?>
                            </a>
                        </div>
                        <div class="two wide column right aligned">
                            <?php $school_diploma = get_post_meta($post->ID, 'education_diploma');  ?>
                            <?php if (!empty($school_diploma)): ?>
                                <?php $img = wp_get_attachment_url(end($school_diploma)); ?>
                                    <a href="<?php echo $img; ?>" target="_blank" class="ui circular icon button">
                                        <i class="unhide icon"></i>
                                    </a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php wp_reset_postdata();?>
            </section>
            <br>
            <br>
            <br>
            <section id="personal-skills">
                <?php $personal_skills = $theme_options['personal_skills']; ?>
                <?php if (!empty($personal_skills)): ?>
                    <h2 class="ui horizontal header divider">
                        <i class="child icon"></i>
                        <?php _e('Personal Skills','sage') ?>
                    </h2>
                    <br>
                    <div class="ui four column grid stackable">
                        <?php for ($i=0; $i < count($personal_skills[personal_skill_title]) ; $i++): ?>
                            <div class="column">
                                <h4><?php echo $personal_skills['personal_skill_title'][$i]; ?></h4>
                                <?php echo $personal_skills['personal_skill_content'][$i]; ?>
                            </div>
                        <?php endfor; ?>
                    </div>
                <?php endif; ?>
            </section>
            <br>
            <br>
            <section id="computer-skills">
                <?php $computer_skills = $theme_options['computer_skills']; ?>
                <?php if (!empty($computer_skills)): ?>
                    <h2 class="ui horizontal header divider">
                        <i class="computer icon"></i>
                        <?php _e('Computer Skills','sage') ?>
                    </h2>
                    <br>
                    <div class="ui four column grid stackable">
                        <?php for ($i=0; $i < count($computer_skills[computer_skill_title]) ; $i++): ?>
                            <div class="column">
                                <h4><?php echo $computer_skills['computer_skill_title'][$i]; ?></h4>
                                <?php echo $computer_skills['computer_skill_content'][$i]; ?>
                            </div>
                        <?php endfor; ?>
                    </div>
                <?php endif; ?>
            </section>
            <br>
            <br>
        </div>
    </div>
</div>
