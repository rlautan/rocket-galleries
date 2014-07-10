<div class="wrap">
    <form name="post" action="admin.php?page=<?php echo $page; ?>&amp;edit=<?php echo esc_attr( $gallery->id ); ?>" method="post">
        <div id="icon-edit" class="icon32 icon32-posts-post"><br></div>
        <h2>
            <?php printf( __( '%s Gallery: ', 'rocketgalleries' ), ( isset( $_GET['edit'] ) ) ? __( 'Edit', 'rocketgalleries' ) : __( 'Add', 'rocketgalleries' ) ); ?>
            <input type="text" name="name" id="name" size="30" autocomplete="off" placeholder="<?php _e( 'Enter a gallery name', 'rocketgalleries' ); ?>" value="<?php echo esc_attr( $gallery->name ); ?>">
        </h2>   

        <?php
            /** Security nonce field */
            wp_nonce_field( "rocketgalleries-save_{$page}", "rocketgalleries-save_{$page}", false );
        ?>

        <div class="main-panel">
            <div class="clearfix">
                <div class="thumbnails-container">
                    <div class="inner clearfix">
                        <?php
                            /**
                             * This area is rendered via Javascript, so for now we will just show a spinner.
                             */
                        ?>
                        <span class="spinner"></span>
                    </div>
                </div>

                <div class="settings-container">
                    <!-- Manage Images -->
                    <div class="widgets-holder-wrap exclude">
                        <div class="sidebar-name">
                            <div class="sidebar-name-arrow"></div>
                            <h3><?php _e( 'Manage Images', 'rocketgalleries' ); ?></h3>
                        </div>

                        <div class="sidebar-content widgets-sortables clearfix">
                            <div class="hide-if-no-js manage-slides-buttons wp-media-buttons" style="margin-top: 1em;">
                                <a href="#" id="add-image" class="button button-secondary add-image" data-editor="content" title="<?php _e( 'Add Images', 'rocketgalleries' ); ?>"><span class="dashicons dashicons-plus"></span> <?php _e( 'Add Images', 'rocketgalleries' ); ?></a>
                                <a href="#" id="delete-images" class="button button-secondary delete-images" title="<?php _e( 'Delete Images', 'rocketgalleries' ); ?>"><span class="dashicons dashicons-trash"></span> <?php _e( 'Delete Images', 'rocketgalleries' ); ?></a>
                                <?php
                                    /**
                                     * Here we do an action to allow users to add their own image managements functionality
                                     */
                                    do_action( 'rocketgalleries_manage_images_buttons', $gallery );
                                ?>
                            </div>

                            <div class="field">
                                <label for="randomize">
                                    <input type="hidden" name="general[randomize]" value="">
                                    <input type="checkbox" id="randomize" name="general[randomize]" value="true" <?php checked( $gallery->general->randomize, true ); ?>><span style="display: inline;"><?php _e( 'Randomize the image order.', 'rocketgalleries' ); ?></span>
                                </label>
                            </div>

                            <?php
                                /**
                                 * Do an action to allow users to add their own buttons to this metabox
                                 */
                                do_action( 'rocketgalleries_manage_images_metabox', $gallery );
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="divider"></div>
            <input type="hidden" name="author" value="<?php echo esc_attr( $gallery->author ); ?>">
            <input type="hidden" name="images" id="gallery-images" value="">
            <input type="submit" name="save" class="button button-primary button-large" id="save" accesskey="p" value="<?php _e( 'Save Gallery', 'rocketgalleries' ); ?>">

            <?php
                /**
                 * This ensures that the slide's JSON is encoded correctly.
                 * Using PHP JSON encode can cause magic quote issue
                 */
            ?>
            <script type="text/javascript">document.getElementById('gallery-images').value = '<?php echo addslashes( json_encode( $gallery->images ) ); ?>';</script>
        </div>
    </form>
</div>