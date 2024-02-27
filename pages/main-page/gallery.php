<!-- Gallery -->

<section id="gallery" class="gallery">
    <div class="container-m">
        <div class="title content-box">
            <div class="title__content">
                <h2 class="title__header header-l" data-aos="zoom-in">.work&Projects</h2>
                <h3 class="subtitle__header header-m" data-aos="zoom-in">Commercial work</h3>
            </div>
            <div class="arrow-box" data-aos="zoom-in">
                <a href="https://michallukaszewicz.pl/#icons" class="arrow-box__btn btn">
                    <i class="fa-solid fa-arrow-down"></i>
                </a>
            </div>
        </div>
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