---
article_title: Testing StaticPHP
article_description: Let's take a look at how I test my static site generator software, to make sure things work as expected.
article_author: David Hunter
article_date: 2025-08-18
article_time: 15:00
layout: src/_inc/base.php
current_page: blog
---

<p>--- metadata.article_description ---</p>

<h3>Test Mode</h3>

<p>Since StaticPHP has so many features now, it would be very easy to start implementing a new feature, get it working, and something completely unrelated stops working or doesn't work as effectively as it used to.</p>

<p>To help protect against things failing, or to some extent not working in the way they should, I added a testing suite directly into StaticPHP, called Test Mode, and anyone can use it.</p>

<h3>How does it work?</h3>

<p>There are three folders/directories that the test suite uses, <code>input</code>, <code>output</code>, and <code>expected</code>. These can of course be customised in your launcher configuration.</p>

<p>StaticPHP functions pretty normally. It takes what is in the input directory, and gives an output in the output directory. Except there is one extra stage the test suite goes through, it compares the generated output with the equivilant file in the expected directory, and uses that to determine the outcome of that particular test.</p>

<h3>Test Results</h3>

<p>StaticPHP will display a full log output in the terminal/console as it normally does, and at the end will display a count of how many tests were a success, how many failed, and how many were unknown. Each output file is prefixed with the test outcome to help see which ones need attention. An optional file can be generated displaying this result more visually.</p>

<h3>Are all features tested?</h3>

<p>I do my best to test as many features as I can, and to test as many bugs as I find and reproduce, but due to the nature of StaticPHP being generic so that it can be suited to as many projects and situations as possible, it may not be possible to test for everything.</p>

<h3>Want to find out more about StaticPHP?</h3>

<p>Head on over to the StaticPHP website.</p>

<p><a href="https://weburl.net/staticphp" target="_blank">weburl.net/staticphp</a></p>