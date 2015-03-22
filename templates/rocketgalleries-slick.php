<?php
    /**
     * Template used to display a flipbook.
     * 
     * This can be overriden by creating your own gallery.php file in your theme.
     * See the documentation for more information.
     */
?>
<div class="slick-carrousel">
<div id="<?php rocketgalleries_the_gallery_id( $gallery ); ?>" class="rocketgalleries-slick slick-slider">
    <?php foreach ( $gallery->images as $image ) : ?>
    <article class="column small-12 medium-12 large-12">
        <div class="slide small-12 medium-12 large-12" style="background-image: url('<?php echo $image->sizes->full->url; ?>'); "></div>
    </article>
    <?php endforeach; ?>
</div>
</div>

<script>
    // Nothing to see here
</script>