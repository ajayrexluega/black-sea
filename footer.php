<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package black_sea
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div id="footer">
      <p>COPYRIGHT &copy; 2016 CSS <a href="">AUTHOR.COM</a></p>
    </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script   src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>
    <script type="text/javascript">
      $(document).ready(function(){

        $('#menu-button').click(function(){
          $('header nav').slideToggle('slow', function(){
            $(this).toggleClass('showMenu');
          });
        });

      });
    </script>
</body>
</html>
