<?php

?>

<section id="gallery-template" class="gallery-template">
    <div class="container-m">
        <div class="title content-box">
            <div class="title__content">
                <a href="<?php the_field('template_anchor'); ?>" class="title__link header-l" data-aos="zoom-in"><?php the_field('template_title'); ?></a>
                <h3 class="subtitle__header header-m" data-aos="zoom-in">Find me and ask on social media</h3>
            </div>
            <div class="arrow-box" data-aos="zoom-in">
                <a href="https://michallukaszewicz.pl/#footer" class="arrow-box__cta"><i class="fa-solid fa-arrow-left"></i></a>
            </div>
        </div>
        <div class="gallery-template__content content-box">
            <div class="gallery-template-header">
                <div class="customer">
                    <h3 class="gallery-template__header header-m" data-aos="zoom-in">Customer:</h3>
                    <p class="gallery-template__text text"><?php the_field('template_customer'); ?></p>
                </div>
                <div class="date">
                    <h3 class="gallery-template__header header-m" data-aos="zoom-in">Date:</h3>
                    <p class="gallery-template__text text"><?php the_field('template_date'); ?></p>
                </div>
                <div class="task">
                    <h3 class="gallery-template__header header-m" data-aos="zoom-in">Task:</h3>
                    <p class="gallery-template__text text"><?php the_field('template_task'); ?></p>
                </div>
            </div>

            <div class="gallery-template__inner" data-aos="zoom-in">
                <div class="gallery-template__image active lazyload-bg" style="--optionBackground: url(<?php the_field('template_gallery_image_1'); ?>);">
                    <div class="label">
                        <div class="icon">
                            <i class="fa-solid fa-desktop"></i>
                        </div>
                        <div class="info">
                            <p class="info__text"><?php the_field('template_gallery_info_1'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="gallery-template__image lazyload-bg" style="--optionBackground: url(<?php the_field('template_gallery_image_2'); ?>);">
                    <div class="label">
                        <div class="icon">
                            <i class="fa-solid fa-desktop"></i>
                        </div>
                        <div class="info">
                            <p class="info__text"><?php the_field('template_gallery_info_2'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="gallery-template__image lazyload-bg" style="--optionBackground: url(<?php the_field('template_gallery_image_3'); ?>);">
                    <div class="label">
                        <div class="icon">
                            <i class="fa-solid fa-desktop"></i>
                        </div>
                        <div class="info">
                            <p class="info__text"><?php the_field('template_gallery_info_3'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    get_footer();
?>