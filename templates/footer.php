<?php
$theme_options = get_option('my_theme_settings');
$facebook = $theme_options['main_facebook_link'];
$twitter = $theme_options['main_twitter_link'];
$linkedin = $theme_options['main_linkedin_link'];
$gplus = $theme_options['main_gplus_link'];
$instagram = $theme_options['main_instagram_link'];
$pinterest = $theme_options['main_pinterest_link'];
$youtube = $theme_options['main_youtube_link'];
$vimeo = $theme_options['main_vimeo_link'];
$skype = $theme_options['main_skype_link'];

$social_media = array(
    'facebook'      => $facebook,
    'twitter'       => $twitter,
    'linkedin'      => $linkedin,
    'google plus'   => $gplus,
    'instagram'     => $instagram,
    'pinterest'     => $pinterest,
    'youtube'       => $youtube,
    //'vimeo'         => $vimeo,
    //'skype'         => $skype
);

?>
<footer>
    <div class="ui page grid">
        <div class="column">
            <div class="ui three column grid">
                <div class="column aligned">
                    <span class="copyright">Copyright &copy; <?php bloginfo('name'); echo " " . date('Y'); ?></span>
                </div>
                <div class="column">
                    <ul class="list-inline quicklinks">
                        <?php dynamic_sidebar('sidebar-footer'); ?>
                    </ul>
                </div>
                <div class="column" style="text-align:right">
                    <?php foreach ($social_media as $social => $social_url): ?>
                        <?php if (!empty($social_url)): ?>
                            <a href="<?php echo $social_url; ?>" target="_blank">
                                <div class="ui circular <?php echo $social; ?> icon button">
                                    <i class="<?php echo $social; ?> icon"></i>
                                </div>
                            </a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</footer>
