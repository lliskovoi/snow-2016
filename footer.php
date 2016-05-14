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

		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer" role="contentinfo">                          
			<div class="site-info">
                <ul class="partner-links">
                  <li><a href="http://idrc.ocadu.ca"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-idrc.png" alt="Inclusive Design Research Centre"></a></li>
                  <li><a href="http://ocadu.ca"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-ocadu.jpg" alt="OCAD University"></a></li>
                </ul>              
                <p><?php bloginfo('name'); ?> is a project of the <a href="http://idrc.ocadu.ca">Inclusive Design Research Centre</a> at <a href="http://ocadu.ca">OCAD University</a>,<br> 
funded by the <a href="http://www.psbnet.ca/eng/">Provincial Schools Branch, Ontario Ministry of Education</a>.</p>
				&copy; <?php echo date(Y); ?> <?php bloginfo('name'); ?>. All rights reserved.
			</div>
          
		</footer>
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
