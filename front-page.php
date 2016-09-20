<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package black_sea
 */

get_header(); ?>

<div id="main-banner">
      <!-- <img src="images/banner.jpg" alt="" /> -->
      <div class="wrapper">
        <h1>WE NEED THE TONIC OF</br>WILDNESS</h1>
        <div class="readMore-button">
          <a href=""><span>Read more</span></a>
        </div>
        <div class="slider-button">
          <ul>
            <a href="#"><li></li></a>
            <a href="#"><li></li></a>
            <a href="#" class="current"><li></li></a>
            <a href="#"><li></li></a>
            <a href="#"><li></li></a>
          </ul>
         </div> <!-- .slider-button -->
      </div>
    </div><!-- #main-banner -->

<section id="business">
      <div class="wrapper">
        <h2>At the same time that we are earnest to explore & learn all things</h2>
        <p>
      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        </p>
         <div class="business-icons">
          <ul>
            <li><img src="<?php echo(get_template_directory_uri()); ?>/images/icon-1.png"/></li>
            <li><img src="<?php echo(get_template_directory_uri()); ?>/images/icon-2.png"/></li>
            <li><img src="<?php echo(get_template_directory_uri()); ?>/images/icon-3.png"/></li>
          </ul>
        </div> <!-- .business-icons -->
      </div> <!-- .wrapper -->
    </section> <!-- #busniess section -->

    <section id="quote">
      <div class="wrapper">

          <h1>Profile image</h1>
          <h2>DHAVAN</h2>
          <span><img src="<?php echo(get_template_directory_uri()); ?>/images/copy.png"/></span>
        <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting
        </p>
      </div> <!-- .wrapper -->
    </section> <!-- #quote section -->

    <div id="contact">
      <div class="contact-form">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="email-address" placeholder="email address">
        <textarea name="message" placeholder="Message"></textarea>
        <a href=""><img src="<?php echo(get_template_directory_uri()); ?>/images/contact-button.png" /></a>
      </div>
    </div>

<?php

get_footer();
