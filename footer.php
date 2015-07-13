	</div><!-- Row End -->
</div><!-- Container End -->

<div class="row">
<div class="large-12 columns">
  <div class="smallscreen" id="sidebar"> 
        <section class="bio">
         	<h1 class="sidebar"><?php echo of_get_option( 'bio-title' ); ?></h1>
        	<?php if ( of_get_option( 'bio-pic' ) ) { ?>
			<img src="<?php echo of_get_option( 'bio-pic' ); ?>" />
           <p><?php echo of_get_option( 'bio-description' ); ?></p> 
			<?php } ?>
        </section> 
 
	<?php dynamic_sidebar("Sidebar"); ?></div><!--smallscreen--></aside>   
            
</div>
</div>



<footer role="contentinfo" class="main">
	<div class="row">
		<div class="large-12 columns">
			<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | Site By: <a href="http://tracymcaruso.com"  title="">Tracy Caruso</a>.</p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

<script>
	(function($) {
		$(document).foundation();
	})(jQuery);
</script>
	
</body>
</html>