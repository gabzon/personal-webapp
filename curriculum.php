<?php
/**
* Template Name: Curriculum
*/

$args_school = array( 'post_type' => 'education' );
$args_job = array( 'post_type' => 'jobs' );
$args_project = array( 'post_type' => 'projects' );

$schools = get_posts( $args_school );
$jobs = get_posts( $args_job );
$projects = get_posts( $args_project );
?>
<h2><?php _e('Working experience','sage') ?></h2>
<hr>
<?php foreach ( $jobs as $post ) : setup_postdata( $post ); ?>
    <div class="ui two column grid stackable">
        <div class="four wide column">
            <?php echo the_post_thumbnail( 'full' ); ?>
            <h4><a href="<?php echo get_post_meta($post->ID, 'job_company_website', true); ?>" target="_blank">
                <?php echo get_post_meta($post->ID, 'job_company_name', true); ?>
            </a></h4>
            <?php echo get_post_meta($post->ID, 'job_location', true)[job_city][0].", ".get_post_meta($post->ID, 'job_location', true)[job_country][0]; ?>
            <?php
                echo "<br>";
                $period = get_post_meta($post->ID, 'job_period', true);
                $start_date =  date($period[job_start_date][0]);

                if ($period[job_end_date][0]) {
                    $end_date = $period[job_end_date][0];
                } else {
                    $end_date = __('Currently','sage');
                }
                echo $period[job_start_date][0] . "-" . $end_date;
                echo "<br>";
                echo $period[job_percentage][0];
                //print_r($period);
            ?>
        </div>
        <div class="twelve wide column">
            <h4><?php the_title(); ?></h4>
            <p><?php the_content(); ?></p>
        </div>
    </div>
<?php endforeach; ?>

<h2><?php _e('Projects','sage') ?></h2>
<hr>
<?php foreach ( $projects as $post ) : setup_postdata( $post ); ?>
    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endforeach; ?>

<h2><?php _e('Education','sage') ?></h2>
<hr>
<?php foreach ( $schools as $post ) : setup_postdata( $post ); ?>
    <div class="ui two colum grid">
        <div class="four wide column">
            <h4><?php echo get_post_meta($post->ID, 'education_school_name', true); ?></h4>
        </div>
        <div class="twelve wide column">
            <h4><?php the_title(); ?></h4>
        </div>
    </div>
<?php endforeach; ?>

<?php wp_reset_postdata();?>
