<?php use Roots\Sage\Nav; ?>


<div class="ui inverted menu">
    <div class="ui page vertically padded grid">
        <a class="item" href="<?= esc_url(home_url('/')); ?>">
            <?php bloginfo('name'); ?>
        </a>
        <div class="right menu">
            <?php
            $menu_name = 'primary_navigation'; // this is the registered menu name
            if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) :
                $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
                $menu_items = wp_get_nav_menu_items($menu->term_id);
                foreach ( (array) $menu_items as $key => $menu_item ) :
                    $class = $menu_item->classes; ?>
                    <a href="<?php echo $menu_item->url; ?>" class="item <?php if(get_the_ID() == $menu_item->object_id){echo 'active';}else{echo 'bla';}?>">
                        <?php echo $menu_item->title; ?>
                    </a>
                    <?php
                endforeach;
            endif;
            ?>
        </div>
    </div>
</div>
