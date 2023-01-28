<?php

$staticly_domain = "staticly.ict.rocks";

$images_url = "https://images." . $staticly_domain;
$avatars_url = $images_url . "/avatars";

$webfonts_url = "https://webfonts." . $staticly_domain;

$stylesheets[] = $webfonts_url . "/poppins/poppins.css";
$stylesheets[] = "/assets/css/stylesheet.css";

$footer_javascripts[] = "/assets/js/anti-email-harvesting.js";
$footer_javascripts[] = "/assets/js/toggle-color-scheme.js";

$blog_datetime_format = "jS F Y \a\\t g:i a";
