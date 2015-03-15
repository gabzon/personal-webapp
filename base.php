<?php

namespace Roots\Sage;

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

    <!--[if lt IE 9]>
    <div class="alert alert-warning">
    <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
</div>
<![endif]-->
<?php
do_action('get_header');
get_template_part('templates/header');
?>

<?php if(is_page_template('portfolio.php') || is_page_template('curriculum.php') || is_page_template('template-custom.php')|| is_front_page()): ?>
    <?php include Wrapper\template_path(); ?>
    <?php if (Config\display_sidebar()) : ?>
        <aside class="sidebar" role="complementary">
            <?php include Wrapper\sidebar_path(); ?>
        </aside><!-- /.sidebar -->
    <?php endif; ?>
<?php else: ?>
    <div class="ui page grid">
        <div class="column">
            <?php include Wrapper\template_path(); ?>
            <?php if (Config\display_sidebar()) : ?>
                <aside class="sidebar" role="complementary">
                    <?php include Wrapper\sidebar_path(); ?>
                </aside><!-- /.sidebar -->
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>



<?php
get_template_part('templates/footer');
wp_footer();
?>
</body>
</html>
