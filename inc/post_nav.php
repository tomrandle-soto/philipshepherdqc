<? /* excerpt */

/**
 * Display navigation to next/previous post when applicable.
 */

if ( ! function_exists ( 'understrap_post_nav' ) ) {
    function understrap_post_nav() {
        // Don't print empty markup if there's nowhere to navigate.
        $previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
        $next     = get_adjacent_post( false, '', false );

        if ( ! $next && ! $previous ) {
            return;
        }
        ?>
        <div class="bkg-lightGrey">
        <nav class="container-fluid navigation post-navigation">
            <h2 class="sr-only"><?php esc_html_e( 'Post navigation', 'understrap' ); ?></h2>
            <div class="row nav-links justify-content-between">
                
                <div class="col-6 p-0 post-navigation-link">
                    <?php
                if ( get_previous_post_link() ) {
                    previous_post_link( '<span class="nav-previous">%link</span>', _x( '<i class="fa fa-angle-left"></i>&nbsp;Previous', 'Previous post link', 'understrap' ) );
                }
                ?>

                 <?php
                if ( !get_previous_post_link() ) {
                   echo '<div class="p-5"><i class="fa fa-angle-left"></i>&nbsp;Previous</div>';
                }
                ?>

            </div>
            <div class="col-6 p-0 post-navigation-link post-navigation-link-right">
            <?
                if ( get_next_post_link() ) {
                    next_post_link( '<span class="nav-next">%link</span>', _x( 'Next&nbsp;<i class="fa fa-angle-right"></i>', 'Next post link', 'understrap' ) );
                }
                ?>

                 <?php
                if ( !get_next_post_link() ) {
                   echo '<div class="p-5">Next&nbsp;<i class="fa fa-angle-right"></i></div>';
                }
                ?>
                </div>
               
            </div><!-- .nav-links -->
        </nav><!-- .navigation -->
    </div>
        <?php
    }
}
?>