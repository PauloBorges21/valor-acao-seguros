<?php
$caminho = get_template_directory_uri();
$site = get_site_url();
$site_url = site_url() . '/';
$siteHome = home_url();
$parameterUrl = get_permalink(get_the_ID()) ;
$home = get_page_by_title('home');

$email_erro = 'segurosvaloracao3@gmail.com'; // E-mail receptor
//$sobre = get_page_by_title('sobre');
//$site_url  = 'https://www.orthotel.com.br/'; // URL do Site

get_theme_mod('bm_contato_3') ? $contato_3 = get_theme_mod('bm_contato_3') : $contato_3 = '';
get_theme_mod('bm_tituloContato_3') ? $tituloContato_3 = get_theme_mod('bm_tituloContato_3') : $tituloContato_3 = '';

get_theme_mod('bm_contato_4') ? $contato_4 = get_theme_mod('bm_contato_4') : $contato_4 = '';
get_theme_mod('bm_tituloContato_4') ? $tituloContato_4 = get_theme_mod('bm_tituloContato_4') : $tituloContato_4 = '';

get_theme_mod('ort_link_ferramenta') ? $link_ferramenta = get_theme_mod('ort_link_ferramenta') : $link_ferramenta = '';

get_theme_mod('bm_facebook') ? $link_face = get_theme_mod('bm_facebook') : $link_face = '';
get_theme_mod('bm_instagram') ? $link_insta = get_theme_mod('bm_instagram') : $link_insta = '';
get_theme_mod('bm_email') ? $link_email = get_theme_mod('bm_email') : $link_email = '';


