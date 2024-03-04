<?php 
/*
    Template Name: Main Page
*/

get_header();

#---------------------------------
# START::Welcome Section
require_once get_template_directory() . '/pages/main-page/welcome.php';
# END::Welcome Section
#---------------------------------

#---------------------------------
# START::Person Section
require_once get_template_directory() . '/pages/main-page/person.php';
# END::Person Section
#---------------------------------

#---------------------------------
# START::Gallery Section
require_once get_template_directory() . '/pages/main-page/gallery.php';
# END::Gallery Section
#---------------------------------

#---------------------------------
# START::Skills Section
require_once get_template_directory() . '/pages/main-page/skills.php';
# END::Skills Section
#---------------------------------

#---------------------------------
# START::CV Zone Section
require_once get_template_directory() . '/pages/main-page/cv-zone.php';
# END::CV Zone Section
#---------------------------------

#---------------------------------
# START::Contact Section
require_once get_template_directory() . '/pages/main-page/contact.php';
# END::Contact Section
#---------------------------------

get_footer();
