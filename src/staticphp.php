<?php

$current_page = "staticphp";
$page_title = "StaticPHP";

include __DIR__ . DIRECTORY_SEPARATOR . "_inc" . DIRECTORY_SEPARATOR . "header.php";

?>

<h2>Welcome to StaticPHP!</h2>
<p><i>A <b>static site</b> generator written in <b>PHP</b>.</i></p>

<p><a href="https://github.com/DavidHunterScot/StaticPHP" target="_blank">Source Code on GitHub</a></p>

<h3>How does it work?</h3>

<p>You code your site as you would normally code it with PHP. Use conditional IF statements, loops, variables, includes, and more. StaticPHP will take all that and turn it into the finished output and then save it as an HTML file.</p>
<p>Each PHP file will be saved to an equivilant HTML file, depending on whether you want Friendly URLs or not. Difference being, a file like <code>about.php</code> will turn into <code>about/index.html</code> with friendly URLs <code>enabled</code> and <code>about.html</code> with friendly URLs <code>disabled</code>.</p>
<p>Run StaticPHP locally or as part of the deployment operation to build your static site from your source files, and then make sure the files in your output directory are the ones hosted on the server where your site will live.</p>

<h3>Why not just deploy the PHP site to the server?</h3>

<p>Most web servers will likely have PHP installed, but for sites that do not expect any user input (e.g. login) and remain the same until the developer makes changes, running PHP code per request is unneccessary.</p>
<p>If you manage the server you deploy to yourself, then you don't even need PHP at all, you can skip installing it and then that is one less thing to keep up-to-date with latest security patches, and one less thing to manage the configuration of, making for an instantly more secure deployment environment.</p>
<p>Have PHP on your local machine or separate build server to build your site with StaticPHP and then PHP is no longer needed.</p>

<?php include __DIR__ . DIRECTORY_SEPARATOR . "_inc" . DIRECTORY_SEPARATOR . "footer.php"; ?>
