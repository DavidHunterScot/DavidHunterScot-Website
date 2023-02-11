<?php

$current_page = "home";

$page_content = function()
{
?>

<div class="home_hero">
    <div class="info">
        <p class="head_line_1">Internet Services Specialist from <b>Ayrshire, Scotland</b>.</p>
        <h2 class="head_line_2">Hello, I'm David.</h2>

        <p>Do you want to be able to use various internet based services, such as Shopping and Banking, Accessing Emails, Learning, or simply just Browsing the Internet, but maybe lack the know-how and need a helping hand?</p>
        <p>Have you ever wanted to have your own website all about you, or maybe one about your favourite hobby, or to help promote your business or charity?</p>
        <p>Get in touch with me and we can chat about it, and hopefully we can be good friends too.</p>

        <p>Just send me an email, and I will respond soon.</p>

        <p><span class="email_address">david [dot] hunter [at] themailbox [dot] io</span></p>

        <p>One more thing, if you're not doing much else right now, maybe you could check out my <a href="/blog">blog</a>?</p>

        <p>For those that are technically minded, I write software for various projects. Check out the source code for my other projects on <a href="https://github.com/DavidHunterScot" target="_blank">GitHub</a>.</p>
    </div>

    <div class="avatar">
        <img src="/assets/images/avatars/davidhunter_illustration_transparent_1.png">
    </div>
</div>

<?php
};

include __DIR__ . DIRECTORY_SEPARATOR . "_inc" . DIRECTORY_SEPARATOR . "base.php";
