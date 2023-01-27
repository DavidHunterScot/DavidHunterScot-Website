<?php

$current_page = "about";
$page_title = "About";

include __DIR__ . DIRECTORY_SEPARATOR . "_inc" . DIRECTORY_SEPARATOR . "header.php";

?>

<h2>Hello, I'm David.</h2>

<p><i>Internet Services Specialist from Ayrshire, Scotland.</i></p>

<h3>Contact Me</h3>

<p>You can send me an email anytime to any of the following email addresses.</p>

<ul>
  <li class="email_address">contact [at] davidhunter [dot] scot</li>
  <li class="email_address">d [at] vidhunter [dot] scot</li>
  <li class="email_address">david [dot] hunter [at] dah [dot] scot</li>
</ul>

<h3>My Website</h3>

<p>Powered by my very own static site generator called <a href="https://github.com/DavidHunterScot/StaticPHP" target="_blank">Static PHP</a>, and hosted by <a href="https://pages.cloudflare.com" target="_blank">Cloudflare Pages</a>. Source code available on <a href="https://github.com/DavidHunterScot/Website" target="_blank">GitHub</a>.</p>

<?php include __DIR__ . DIRECTORY_SEPARATOR . "_inc" . DIRECTORY_SEPARATOR . "footer.php"; ?>
