<?php 
    /* 
    Template Name:
        Main Page
    */
?>

<?php
    get_header();
?>

<!-- Welcome Info -->

<section id="welcome" class="welcome">
    <div class="container-m">
        <div class="welcome__content content-box">
            <div class="welcome__inner">
                <h1 class="welcome__header header-xl" data-aos="zoom-in">Hello!</h1>
                <h1 class="welcome__header header-xl" data-aos="zoom-in">I'm Michał</h1>
                <h1 class="welcome__header header-xl" data-aos="zoom-in">Front-End Developer</h1>
            </div>
            <div class="arrow-box" data-aos="zoom-in">
                <a href="https://michallukaszewicz.pl/#person" class="arrow-box__cta"><i class="fas fa-arrow-down"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- Person -->

<section id="person" class="person">
    <div class="container-m">
        <div class="title content-box">
            <div class="title__content">
                <h2 class="title__header header-l" data-aos="zoom-in">.aboutMe</h2>
                <h3 class="subtitle__header header-m" data-aos="zoom-in">Some informations about me</h3>
            </div>
            <div class="arrow-box" data-aos="zoom-in">
                <a href="https://michallukaszewicz.pl/#gallery" class="arrow-box__cta"><i class="fas fa-arrow-down"></i></a>
            </div>
        </div>
        <div class="person__content content-box">
            <div class="person__inner" data-aos="zoom-in">
                <img src="" data-src="/wp-content/uploads/2023/11/about_me_image.webp" class="person__image lazyload-image" alt="Picture Of Me">
            </div>
            <div class="person__inner">
                <h3 class="person__header header-m" data-aos="zoom-in">Hi!</h3>
                <p class="person__text text" data-aos="zoom-in">I am designing and creating websites.</p>
                <p class="person__text text" data-aos="zoom-in">It all started a few years ago when I begun with writing code and creating websites as freelancer.</p>
                <p class="person__text text" data-aos="zoom-in">Currently I'm working as a freelancer on projects in cooperation with programmers and graphic designers. I have also completed several projects based on Wordpress technology and projects written in pure programming languages.</p>
                <p class="person__text text" data-aos="zoom-in">I am part of the creative team of Freshcodeee. At the moment I am expanding my knowledge with new tools like mobile applications and I also started learning React.js.</p>
                <p class="person__text text" data-aos="zoom-in">Except of programming I enjoy playing drums and this is a constant part of my life. I love funk, jazz and salsa!</p>
            </div>
        </div>
    </div>
</section>

<!-- Gallery -->

<section id="gallery" class="gallery">
    <div class="container-m">
        <div class="title content-box">
            <div class="title__content">
                <h2 class="title__header header-l" data-aos="zoom-in">.work&Projects</h2>
                <h3 class="subtitle__header header-m" data-aos="zoom-in">Commercial projects</h3>
            </div>
            <div class="arrow-box" data-aos="zoom-in">
                <a href="https://michallukaszewicz.pl/#icons" class="arrow-box__cta"><i class="fas fa-arrow-down"></i></a>
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

<!-- Skills -->

<section id="icons" class="icons">
    <div class="container-m">
        <div class="title content-box">
            <div class="title__content">
                <h2 class="title__header header-l" data-aos="zoom-in">.mySkills</h2>
                <h3 class="subtitle__header header-m" data-aos="zoom-in">Tools and technologies</h3>
            </div>
            <div class="arrow-box" data-aos="zoom-in">
                <a href="https://michallukaszewicz.pl/#cv-zone" class="arrow-box__cta"><i class="fas fa-arrow-down"></i></a>
            </div>
        </div>
        <div class="icons__content content-box">
            <div class="icons__inner" data-aos="zoom-in">
                <i class="fab fa-js-square"></i>
            </div>
            <div class="icons__inner" data-aos="zoom-in">
                <i class="fab fa-react"></i>
            </div>
            <div class="icons__inner" data-aos="zoom-in">
                <i class="fab fa-html5"></i>
            </div>
            <div class="icons__inner" data-aos="zoom-in">
                <i class="fab fa-css3-alt"></i>
            </div>
            <div class="icons__inner" data-aos="zoom-in">
                <i class="fab fa-wordpress"></i>
            </div>
            <div class="icons__inner" data-aos="zoom-in">
                <i class="fab fa-git"></i>
            </div>
        </div>
    </div>
</section>

<!-- CV Zone -->

<section id="cv-zone" class="cv-zone">
    <div class="container-md">
        <div class="title content-box">
            <div class="title__content">
                <h2 class="title__header header-l" data-aos="zoom-in">.cvZone</h2>
                <h3 class="subtitle__header header-m" data-aos="zoom-in">Commercial experience</h3>
            </div>
            <div class="arrow-box" data-aos="zoom-in">
                <a href="https://michallukaszewicz.pl/#contact" class="arrow-box__cta"><i class="fas fa-arrow-down"></i></a>
            </div>
        </div>
        <div class="cv-zone__content content-box">
            <div class="cv-zone__inner" data-aos="zoom-in">
                <a href="<?php the_field('cv_zone_download'); ?>" class="cv-zone__link f-style-primary f-text c-secondary"><i class="fa-solid fa-file-import fa-5x"></i>Download WebDev CV</a>
            </div>
            <div class="cv-zone__inner" data-aos="zoom-in">
                <a href="https://michallukaszewicz.pl/cv/" class="cv-zone__link f-style-primary f-text c-secondary"><i class="fa-solid fa-file-code fa-5x"></i>WebDev CV Page</a>
            </div>
        </div>
    </div>
</section>

<!-- Contact -->

<section id="contact" class="contact">
    <div class="container-m">
        <div class="title content-box">
            <div class="title__content">
                <h2 class="title__header header-l" data-aos="zoom-in">.contact</h2>
                <h3 class="subtitle__header header-m" data-aos="zoom-in">Find me and ask on social media</h3>
            </div>
            <div class="arrow-box" data-aos="zoom-in">
                <a href="https://michallukaszewicz.pl/#footer" class="arrow-box__cta"><i class="fas fa-arrow-down"></i></a>
            </div>
        </div>
        <div class="contact__content content-box">
            <div class="contact-text">
                <h3 class="contact__header header-m"><i class="fa-regular fa-message"></i> If you would like to contact me, please use the&nbsp;contact&nbsp;form</h3>
                <h3 class="contact__header header-m"><i class="fa-regular fa-message"></i> Or directly my social media account</h2>
            </div>
            <div class="contact-form">
                <?php echo do_shortcode('[contact-form-7 id="a75c5b4" title="portfolio"]'); ?>
            </div>
        </div>
    </div>
</section>

<?php
    get_footer();
?>