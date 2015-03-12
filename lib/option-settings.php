<?php
add_filter('piklist_admin_pages', 'piklist_theme_setting_pages');
  function piklist_theme_setting_pages($pages)
  {
     $pages[] = array(
      'page_title' => __('Custom Settings')
      ,'menu_title' => __('Options', 'piklist')
      ,'sub_menu' => 'themes.php'
      ,'capability' => 'manage_options'
      ,'menu_slug' => 'custom_settings'
      ,'setting' => 'my_theme_settings'
      ,'menu_icon' => plugins_url('piklist/parts/img/piklist-icon.png')
      ,'page_icon' => plugins_url('piklist/parts/img/piklist-page-icon-32.png')
      ,'single_line' => true
      ,'default_tab' => 'Basic'
      ,'save_text' => 'Save options'
    );

    return $pages;
  }
