<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of .container-fluid div opened in header.php
 *
 * @package WordPress
 * @subpackage PostPress 1.0.1
 * @since PostPress 1.0.0
 */
?>
    </div><!-- /.row (main row) -->

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>
    
    jQuery(document).ready(function() {
	    jQuery('nav li').addClass('nav-item');
	    jQuery('nav a').addClass('nav-link');
	    //console.log('sfsdf');
	});

    </script>

    <?php wp_footer(); ?>

  </body>
</html>
