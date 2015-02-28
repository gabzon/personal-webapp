<?php use Roots\Sage\Nav; ?>

<div class="navbar navbar-default navbar-fixed-top" >
  <div class="ui page grid">
      <div class="column">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header page-scroll">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
          </div>

          <nav class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" role="navigation">
            <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new Nav\SageNavWalker(), 'menu_class' => 'nav navbar-nav navbar-right']);
            endif;
            ?>
          </nav>
      </div>
  </div>
</div>
