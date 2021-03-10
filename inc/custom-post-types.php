<?  /*  add_action( 'init', 'register_posttype_post_type' );

function register_posttype_post_type() {
    register_post_type( 'post_type',
        array(
            'labels' => array(
                'name' => __( 'Posttypes' ),
                'singular_name' => __( 'Posttype' )
            ),
            'exclude_from_search' => false,     // should posttype be excluded from search results
            'publicly_queryable' => true,       // whether post type can be viewed in standard archive listings by postype (usually should be true)
            'has_archive' => true,              // should posttype have a standard archive page at /
            'show_in_menu' => true,             // include in backend admin menu
            'show_ui' => true,                  // create interface for backend management
            'capability_type' => 'post',        // the priviledges needed to manage this type - 'post' means same privileges as post management
            'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt'), // the functionality that the posttype supports. usually the default will suffice but see documentation for more details.
            'taxonomies'          => array( 'category' ),
            'menu_icon' => 'dashicons-star-filled',
            'public' => true
        )
    );
}
*/  ?>


 <?  add_action( 'init', 'register_posttype_cases' );

 function register_posttype_cases() {
     register_post_type( 'cases',
         array(
             'labels' => array(
                 'name' => __( 'Cases' ),
                 'singular_name' => __( 'Case' )
             ),
             'exclude_from_search' => false,     // should posttype be excluded from search results
             'publicly_queryable' => true,       // whether post type can be viewed in standard archive listings by postype (usually should be true)
             'has_archive' => true,              // should posttype have a standard archive page at /
             'show_in_menu' => true,             // include in backend admin menu
             'show_ui' => true,                  // create interface for backend management
             'capability_type' => 'post',        // the priviledges needed to manage this type - 'post' means same privileges as post management
             'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt'), // the functionality that the posttype supports. usually the default will suffice but see documentation for more details.
             'taxonomies'          => array( 'category', 'post_tag' ),
             'menu_icon' => 'dashicons-star-filled',
             'public' => true
         )
     );


     register_taxonomy('cases-category', 'cases', array(
             'labels' => array(
                 'name' => 'Case Categories'
             ),
             'hierarchical' => true
         )
     );


 }
 ?>
