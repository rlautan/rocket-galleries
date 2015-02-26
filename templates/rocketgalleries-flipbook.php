<?php
    /**
     * Template used to display a flipbook.
     * 
     * This can be overriden by creating your own gallery.php file in your theme.
     * See the documentation for more information.
     */
?>

<div id="<?php rocketgalleries_the_gallery_id( $gallery ); ?>" class="rocketgalleries-flipbook flipbook">
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