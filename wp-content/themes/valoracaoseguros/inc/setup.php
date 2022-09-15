<?php
//styles
function seguradora_av_theme_style()
{

    //wp_enqueue_style('main_css', get_template_directory_uri() . '/assets/css/main.css');

    wp_enqueue_style('valor_site_css', get_template_directory_uri() . '/assets/css/valor.site.css');
    wp_enqueue_style("google_work", 'https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700');


    // retira o jquery padrão do wordpress
     wp_deregister_script('jquery');
    // registra o novo jquery
    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(''), '', true);
    wp_enqueue_script('html5shiv', get_template_directory_uri() . '/assets/js/html5shiv.js', array('jquery'), '', false);
    wp_enqueue_script('respond_min', get_template_directory_uri() . '/assets/js/respond.min.js', array('jquery'), '', false);
    wp_enqueue_script('maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDnhgNBg6jrSuqhTeKKEFDWI0_5fZLx0vM', array('jquery'), '', false);
    wp_enqueue_script('html5shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js', array('jquery'), '', false);
    wp_enqueue_script('respond', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', array('jquery'), '', false);



    wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/modernizr.min.js', array('jquery'), '', true);
    wp_enqueue_script('appear', get_template_directory_uri() . '/assets/js/jquery.appear.js', array('jquery'), '', true);
    wp_enqueue_script('scrollUp', get_template_directory_uri() . '/assets/js/jquery.scrollUp.min.js', array('jquery'), '', true);
    wp_enqueue_script('typed', get_template_directory_uri() . '/assets/js/typed.min.js', array('jquery'), '', true);
    wp_enqueue_script('slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.min.js', array('jquery'), '', true);
    wp_enqueue_script('nav', get_template_directory_uri() . '/assets/js/jquery.nav.js', array('jquery'), '', true);
    wp_enqueue_script('ytplayer', get_template_directory_uri() . '/assets/js/ytplayer.min.js', array('jquery'), '', true);
    wp_enqueue_script('magnific_popup', get_template_directory_uri() . '/assets/js/magnific-popup.min.js', array('jquery'), '', true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), '', true);
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), '', true);
    wp_enqueue_script('counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '', true);
    wp_enqueue_script('isotope_pkgd', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array('jquery'), '', true);
    wp_enqueue_script('masonry.pkgd', get_template_directory_uri() . '/assets/js/masonry.pkgd.min.js', array('jquery'), '', true);
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '', true);
    wp_enqueue_script('gmap', get_template_directory_uri() . '/assets/js/gmap.js', array('jquery'), '', true);
    wp_enqueue_script('active', get_template_directory_uri() . '/assets/js/active.js', array('jquery'), '', true);



}

