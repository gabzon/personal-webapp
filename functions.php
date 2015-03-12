<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/utils.php',                 // Utility functions
  'lib/init.php',                  // Initial theme setup and constants
  'lib/wrapper.php',               // Theme wrapper class
  'lib/conditional-tag-check.php', // ConditionalTagCheck class
  'lib/config.php',                // Configuration
  'lib/assets.php',                // Scripts and stylesheets
  'lib/titles.php',                // Page titles
  'lib/nav.php',                   // Custom nav modifications
  'lib/gallery.php',               // Custom [gallery] modifications
  'lib/extras.php',                // Custom functions
  'lib/user-social.php',
  'lib/option-settings.php',
  'lib/helper-functions.php',
  'piklist/custom_post_type/book.php',
  'piklist/custom_post_type/education.php',
  'piklist/custom_post_type/job.php',
  'piklist/custom_post_type/project.php',
  'piklist/custom_post_type/presentation.php',
  'piklist/custom_post_type/exhibition.php',
  'piklist/custom_post_type/award.php',
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);


/**
 * Accept svg files
 * https://css-tricks.com/snippets/wordpress/allow-svg-through-wordpress-media-uploader/
 * http://www.wpcontent.co.uk/2014/09/enabling-and-using-svg-in-wordpress/
 * https://www.leighton.com/blog/enable-upload-of-svg-to-wordpress-media-library
 */
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  $mimes['svgz'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
