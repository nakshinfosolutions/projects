<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<!-- footer content -->
<div class="clearfix"></div>
<footer><div>© 2016 Law Offices of Marius C. Wesser, PC | Disclaimer | Attorney Advertising | Law Firm Website Design by Zola Creative</div></footer>
<div class="clearfix"></div>
<!-- end footer content -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo get_bloginfo('template_directory');?>/js/bootstrap.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>
