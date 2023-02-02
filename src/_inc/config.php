<?php

$images_url = "/assets/images";
$avatars_url = $images_url . "/avatars";

$webfonts_url = "/assets/webfonts";

$stylesheets[] = $webfonts_url . "/poppins/poppins.css";
$stylesheets[] = "/assets/css/stylesheet.css";

$footer_javascripts[] = "/assets/js/anti-email-harvesting.js";
$footer_javascripts[] = "/assets/js/toggle-color-scheme.js";

$blog_datetime_format = "jS F Y \a\\t g:i a";

if( ! defined( "D_S" ) )
    define( "D_S", DIRECTORY_SEPARATOR );
