<?php
    /* 
    Template Name:
        CV Page
    */

//Variables
$portfolio_link = 'www.michallukaszewicz.pl';

?>

<?php
    get_header();
?>

<!-- Cv Page -->

<section id="cv" class="cv">
    <div class="container-s">
        <div class="cv__content content-box">
            <div class="cv-header">
                <div class="cv-person">
                    <img src="" data-src="/wp-content/uploads/2023/11/about_me_image.webp" alt="Picture Of Me" class="cv__image lazyload-image" data-aos="zoom-in">
                </div>
                <div class="cv-contact">
                    <h3 class="cv-title__header header-m" data-aos="zoom-in">#<?php echo get_personal_info( fieldName: 'name'); ?></h3>
                    <h3 class="cv-contact__header header-m" data-aos="zoom-in">date of birth: <?php echo get_personal_info(fieldName: 'birthDate')?></h3>
                    <a href="mailto:<?php echo get_personal_info(fieldName: 'email')?>" class="cv-contact__link" data-aos="zoom-in"><span>e-mail:</span> <?php echo get_personal_info(fieldName: 'email')?></a>
                    <a href="tel:<?php echo get_personal_info(fieldName: 'phone')?>" class="cv-contact__link" data-aos="zoom-in"><span>phone:</span> <?php echo get_personal_info(fieldName: 'phone')?></a>
                </div>
            </div>
            <div class="cv-about">
                <p class="cv-about__text text" data-aos="zoom-in">I am designing and creating websites. It all started a few years ago when I begun with writing code and creating websites as freelancer.</p>
                <p class="cv-about__text text" data-aos="zoom-in">Currently I'm working as a freelancer on projects in cooperation with programmers and graphic designers. I have also completed several projects based on Wordpress technology and projects written in pure programming languages. I am part of the creative team of Freshcodeee.</p>
                <p class="cv-about__text text" data-aos="zoom-in">At the moment I am expanding my knowledge with new tools like mobile applications and I also started learning React.js.</p>
                <p class="cv-about__text text" data-aos="zoom-in">Except of programming I enjoy playing drums and this is a constant part of my life. I love funk, jazz and salsa!</p>
            </div>
            <div class="cv-experience">
                <div class="cv-title">
                    <h3 class="cv-title__header header-m" data-aos="zoom-in">#Experience</h3>
                </div>
                <p class="cv-experience__text text" data-aos="zoom-in"><span>2023 /</span> Cooperation with I AM FOR DEVELOPER Marketing Agency / Freelancer</p>
                <p class="cv-experience__text text" data-aos="zoom-in"><span>2022 /</span> Coordinator of the Complaint Department / Green Cell</p>
                <p class="cv-experience__text text" data-aos="zoom-in"><span>2018 / 2023 /</span> Frontend Developer / Freelancer</p>
                <p class="cv-experience__text text" data-aos="zoom-in"><span>2018 / 2021 /</span> RMA Specialist / Green Cell</p>
                <p class="cv-experience__text text" data-aos="zoom-in"><span>2020 / 2021 /</span> Cooperation with Freshcodeee / Startup</p>
                <p class="cv-experience__text text" data-aos="zoom-in"><span>2018 /</span> Programming Course / Academy 108 Cracow</p>
                <p class="cv-experience__text text" data-aos="zoom-in"><span>2015 / 2018 /</span> Owner Of The Musical Activity / Drums Art</p>
                <p class="cv-experience__text text" data-aos="zoom-in"><span>2014 / 2016 /</span> Cooperation with the "Perfect Music Show" Music Agency / Drums</p>
            </div>
            <div class="cv-cta">
                <p class="cv-cta__text text" data-aos="zoom-in">Go to my portfolio and see work experience</p>
                <p class="cv-cta__text text" data-aos="zoom-in">and the projects I have completed:</p>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="cv-cta__link" data-aos="zoom-in"><?= $portfolio_link ?></a>
            </div>
            <div class="icons">
                <div class="cv-title" data-aos="zoom-in">
                    <h3 class="cv-title__header">#Skills</h3>
                </div>
                <div class="icons__content content-box">
                    <div class="icons__inner" data-aos="zoom-in">
                        <?php echo get_icon( iconName: 'js-square')?>
                    </div>
                    <div class="icons__inner" data-aos="zoom-in">
                        <?php echo get_icon( iconName: 'react')?>
                    </div>
                    <div class="icons__inner" data-aos="zoom-in">
                        <?php echo get_icon( iconName: 'html5')?>
                    </div>
                    <div class="icons__inner" data-aos="zoom-in">
                        <?php echo get_icon( iconName: 'sass')?>
                    </div>
                    <div class="icons__inner" data-aos="zoom-in">
                        <?php echo get_icon( iconName: 'wordpress')?>
                    </div>
                    <div class="icons__inner" data-aos="zoom-in">
                        <?php echo get_icon( iconName: 'git')?>
                    </div>
                </div>
            </div>
            <div class="cv-stack">
                <div class="wp-stack">
                    <div class="cv-title">
                        <h3 class="cv-title__header header-m" data-aos="zoom-in">#Wordpress Developer</h3>
                    </div>
                    <p class="stack__text text" data-aos="zoom-in">PHP (beginner)</p>
                    <p class="stack__text text" data-aos="zoom-in">jQuery (intermediate)</p>
                    <p class="stack__text text" data-aos="zoom-in">ACF (intermediate)</p>
                    <p class="stack__text text" data-aos="zoom-in">Woocommerce (beginner)</p>
                    <p class="stack__text text" data-aos="zoom-in">Elementor (beginner)</p>
                    <p class="stack__text text" data-aos="zoom-in">Creating templates</p>
                    <p class="stack__text text" data-aos="zoom-in">Domain Support</p>
                </div>
                <div class="front-stack">
                    <div class="cv-title">
                        <h3 class="cv-title__header header-m" data-aos="zoom-in">#Front-End Developer</h3>
                    </div>
                    <p class="stack__text text" data-aos="zoom-in">JavaScript (intermediate)</p>
                    <p class="stack__text text" data-aos="zoom-in">React (beginner)</p>
                    <p class="stack__text text" data-aos="zoom-in">HTML5 (advanced)</p>
                    <p class="stack__text text" data-aos="zoom-in">CSS3 (advanced)</p>
                    <p class="stack__text text" data-aos="zoom-in">SASS (intermediate)</p>
                    <p class="stack__text text" data-aos="zoom-in">Git (intermediate)</p>
                </div>
            </div>
            <div class="cv-agreement">
                <p class="cv-agreement__text text" data-aos="zoom-in">I agree to the processing of personal data provided in this document for realising the recruitment process pursuant to the Personal Data Protection Act of 10 May 2018 (Journal of Laws 2018, item 1000) and in agreement with Regulation (EU) 2016/679 of the European Parliament and of the Council of 27 April 2016 on the protection of natural persons with regard to the processing of personal data and on the free movement of such data, and repealing Directive 95/46/EC (General Data Protection Regulation).</p>
            </div>
        </div>
    </div>
</section>

<?php
    get_footer();
?>