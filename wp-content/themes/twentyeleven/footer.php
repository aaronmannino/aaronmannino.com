<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

    </div><!-- #main -->

    <footer id="colophon" role="contentinfo">

            <?php
                /* A sidebar in the footer? Yep. You can can customize
                 * your footer with three columns of widgets.
                 */
                if ( ! is_404() )
                    get_sidebar( 'footer' );
            ?>

            <div id="site-generator">
                <?php do_action( 'twentyeleven_credits' ); ?>
                <a href="<?php echo esc_url( __( 'http://www.andapartridge.com/', 'twentyeleven' ) ); ?>" title="<?php esc_attr_e( 'And A Partridge', 'twentyeleven' ); ?>"><?php printf( __( 'Site by %s', 'twentyeleven' ), 'And A Partridge' ); ?></a>
            </div>
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>