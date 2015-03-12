<?php
/**
 * Template Name: Portfolio
 */

 $args_project = array( 'post_type' => 'project' , 'numberposts'=> -1 );

 $projects = get_posts( $args_project );
?>


<section id="portfolio" class="ui page grid">
    <div class="column">
        <h2><?php _e('Projddects','sage') ?></h2>
        <?php foreach ( $projects as $post ) : setup_postdata( $post ); ?>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <?php the_post_thumbnail(); ?>
        <?php endforeach; ?>
        <?php wp_reset_postdata();?>


    </div>
</section>
