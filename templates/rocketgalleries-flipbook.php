<?php
    /**
     * Template used to display a flipbook.
     * 
     * This can be overriden by creating your own gallery.php file in your theme.
     * See the documentation for more information.
     */
?>
<div id="<?php rocketgalleries_the_gallery_id( $gallery ); ?>" class="flipbook rocketgalleries-flipbook <?php echo rocketgalleries_the_gallery_class( $gallery ); ?>">
    <div class="container">
        <?php foreach ( $gallery->images as $image ) : ?>
        <div class="rocketgalleries-flipbook-page">
            <img src="<?php echo $image->sizes->medium->url; ?>" alt="" />
        </div>
        <?php endforeach; ?>
    </div>
    <div class="controls">
        <a href="#" class="prev"><span>previous</span></a>
        <a href="#" class="next"><span>next</span></a>
    </div>
</div>

<script>
jQuery(document).ready(function() {
    jQuery(function() {

        var bookHeight = jQuery('.rocketgalleries-flipbook .rocketgalleries-flipbook-page img').clientHeight;

        //multiple books with a class
        jQuery('.rocketgalleries-flipbook .container').booklet({
            pageNumbers: false,
            pageBorder: 0,
            pagePadding: 0,
            speed: 500,
            manual: true,
            hovers: false,
            // width: '100%',
            // height: bookHeight,
            width: 460,
            height: 300,
            closed: true,
            prev: ".prev",
            next: ".next",
        });
    });

    jQuery( '.rocketgalleries-flipbook' ).on( 'swipeleft', swipeleftHandler );
    jQuery( '.rocketgalleries-flipbook' ).on( 'swiperight', swiperightHandler );

    function swipeleftHandler() {
        jQuery('.rocketgalleries-flipbook .container').booklet('next');
    }

    function swiperightHandler() {
        jQuery('.rocketgalleries-flipbook .container').booklet('prev');
    }

});
</script>