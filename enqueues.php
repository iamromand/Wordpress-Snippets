<?php


/*Basic include + wordpress ajaxurl*/
wp_enqueue_script( 'global', get_stylesheet_directory_uri() . '/js/global.js', array('jquery'), CHILD_THEME_VERSION);
wp_localize_script( 'global', 'ajaxurl', array( 'url' => admin_url( 'admin-ajax.php' ) ) );
    
/*FancyBox https://fancyapps.com/fancybox/3/*/    
wp_enqueue_style( 'fancyboxcss', '//cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css', array(), CHILD_THEME_VERSION );
wp_enqueue_script( 'fancyboxjs', '//cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js', array('jquery'), CHILD_THEME_VERSION);
        
/*Slick carousele http://kenwheeler.github.io/slick/*/        
wp_enqueue_script('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), CHILD_THEME_VERSION);
wp_enqueue_style('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), CHILD_THEME_VERSION);
wp_enqueue_style('slicktheme', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array(), CHILD_THEME_VERSION);

/*Easy Autocomplete http://easyautocomplete.com*/
wp_add_inline_script( 'jquery-core', '$ = jQuery;' );
wp_enqueue_script('easyautocompletejs', '//cdnjs.cloudflare.com/ajax/libs/easy-autocomplete/1.3.5/jquery.easy-autocomplete.js', array('jquery', 'jquery-core'), CHILD_THEME_VERSION);
wp_enqueue_style('easyautocompletecss', '//cdnjs.cloudflare.com/ajax/libs/easy-autocomplete/1.3.5/easy-autocomplete.min.css', array(), CHILD_THEME_VERSION);
wp_enqueue_style('easyautocompletecss-theme', '//cdnjs.cloudflare.com/ajax/libs/easy-autocomplete/1.3.5/easy-autocomplete.themes.min.css', array(), CHILD_THEME_VERSION);

/*jQuery UI https://jqueryui.com/*/
wp_enqueue_script( 'jquery-ui-js', '//code.jquery.com/ui/1.12.0/jquery-ui.min.js', array( 'jquery' ), CHILD_THEME_VERSION);
wp_enqueue_style( 'jquery-ui-css', '//code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css', array(), CHILD_THEME_VERSION );
