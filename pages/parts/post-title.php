<?php

function generate_post_title_box($postTitle, $postSubtitle) {
    return <<<HTML
    <div class="title content-box">
        <div class="title__content">
            <h2 class="title__header header-l" data-aos="zoom-in">$postTitle</h2>
            <h3 class="subtitle__header header-m" data-aos="zoom-in">$postSubtitle</h3>
        </div>
        <div class="arrow-box" data-aos="zoom-in">
            <a href="javascript:void(0)" class="arrow-box__btn btn" onclick="history.back()">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
        </div>
    </div>
HTML;
}