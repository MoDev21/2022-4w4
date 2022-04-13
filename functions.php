<?php 

function cidw_4w4_enqueue(){
    // wp_enqueue_style('style_css', get_stylesheet_uri());
    wp_enqueue_style('cidw-4w4-le-style', get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'), false);
    wp_enqueue_style('cidw-4w4-police-google', "https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Montserrat+Alternates:wght@300&family=Saira:wght@100&family=Work+Sans&display=swap", false);
}

add_action("wp_enqueue_scripts", "cidw_4w4_enqueue");

/*----------------------------------Enregistré le menu--------*/
function cidw_4w4_register_nav_menu(){
    register_nav_menus( array(
        'menu_principal' => __( 'Menu principal', 'cidw_4w4' ),
        'menu_footer'  => __( 'Menu footer', 'cidw_4w4' ),
        'menu_externe' => __('Menu externe', 'cidw_4w4'),
        'menu_categorie_cours' => __('Menu categorie_cours', 'cidw_4w4'),
        'menu_accueil' => __('Menu accueil', 'cidw_4w4')
    ) );
}
add_action( 'after_setup_theme', 'cidw_4w4_register_nav_menu', 0 );

/*----------------------------------afficher une description du choix de cours------*/
function prefix_nav_description($item_output, $item){
    if (!empty($item->description)){
        $item_output = str_replace( '</a>',
        '<hr><span class="menu-item-description">' . $item->description . '</span><div class="menu-item-icone"></div></a>' , 
               $item_output );
    }
    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'prefix_nav_description', 10, 3);
 
/*----------------------------------filtrer les choix du menu principal--------*/
function cidw_4w4_filtre_choix_menu($obj_menu){
    //var_dump($obj_menu);
    foreach($obj_menu as $cle => $value)
    {
        //print_r($value);
        //$value->title = substr($value->title,0,7);
        $value->title = wp_trim_words($value->title,3,"...");
        //echo $value->title . "<br>";
    }
    return $obj_menu;
} 
add_filter("wp_nav_menu_objects","cidw_4w4_filtre_choix_menu");
/*----------------add_theme_support-----*/

add_theme_support( 'post-thumbnails' );

/**
 * @param : WP_Query $query
 */
function cidw_4w4_pre_get_posts(WP_Query $query)
{
    if(!is_admin() && is_main_query() && is_category(array('web','cours','design','video','utilitaire','creation-3d','jeu')))
    {
        //var_dump($query);
        //die();
        $ordre = get_query_var('ordre');
        //echo "-----ordre= " . $ordre . "-----------------------";
        $cle = get_query_var('cletri');
        //echo "-----ordre= " . $cle . "-----------------------";

        $query->set('order',  "asc");
        $query->set('orderby', "title");
        $query->set('posts_per_page', -1);
    }

//   if (!is_admin() && is_main_query() && is_category(array('web','cours','design','video','utilitaire','creation-3d','jeu'))) 
//     {
//     //$ordre = get_query_var('ordre');
//     $query->set('posts_per_page', -1);
//     // $query->set('orderby', $cle);
//     $query->set('orderby', 'title');
//     // $query->set('order',  $ordre);
//     $query->set('order',  'ASC');
//     // var_dump($query);
//     // die();
//    }
}
function cidw_4w4_query_vars($params){
    $params[] = "cletri";
    $params[] = "ordre";
    //$params["cletri"] = "title";
    //var_dump($params); die();
    return $params;
}
add_action('pre_get_posts', 'cidw_4w4_pre_get_posts');
/* Que le hook pre_get_posts se manifest juste avant que la reuqete WP_query est executé.
Ce hook nous permettra d'adapté la requête avant d'éxécuter cette requête */



add_filter('query_vars', 'cidw_4w4_query_vars' );

?>