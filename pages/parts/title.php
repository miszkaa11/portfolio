<?php

function generateTitleBox($title, $subtitle, $sectionId) {
    $sectionLinkFunc = generateSectionLink($sectionId);
    return <<<HTML
    <div class="title content-box">
        <div class="title__content">
            <h2 class="title__header header-l" data-aos="zoom-in">$title</h2>
            <h3 class="subtitle__header header-m" data-aos="zoom-in">$subtitle</h3>
        </div>
        <div class="arrow-box" data-aos="zoom-in">
            <a href="$sectionLinkFunc" class="arrow-box__btn btn">
                <i class="fa-solid fa-arrow-down"></i>
            </a>
        </div>
    </div>
HTML;
}
