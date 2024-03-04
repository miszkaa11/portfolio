<!-- Gallery -->

<section id="gallery" class="gallery">
    <div class="container-m">
        <?php echo generate_title_box(".work&Projects", "Commercial work", "icons"); ?>
        <div class="gallery__content content-box">

            <?php
            $work_gallery_posts = get_posts(array(
                'category_name' => 'Projekty',
                'posts_per_page'    => -1
            ));

            foreach($work_gallery_posts as $post):
                setup_postdata($post);

                work_gallery_render_post($post);

            endforeach;
            wp_reset_postdata();
            ?>

        </div>
    </div>
</section>