	<?php do_action('dynamicnews_before_footer'); ?>
	
	<div id="footer-wrap">
	
		<footer id="footer" class="container clearfix" role="contentinfo">
			
			<nav id="footernav" class="clearfix" role="navigation">
				<?php 
					// Get Navigation out of Theme Options
					wp_nav_menu(array('theme_location' => 'footer', 'container' => false, 'menu_id' => 'footernav-menu', 'echo' => true, 'fallback_cb' => '', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'depth' => 1));
				?>
				<h4 id="footernav-icon"></h4>
			</nav>
			
			<!--<div id="footer-text">
				<?php do_action('dynamicnews_footer_text'); ?>
			</div>-->
			
<div style='float:right; margin-top:-5px;'>
<script type="text/javascript">(function() {
  if (window.pluso)if (typeof window.pluso.start == "function") return;
  if (window.ifpluso==undefined) { window.ifpluso = 1;
    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
    var h=d[g]('body')[0];
    h.appendChild(s);
  }})();</script>
<div class="pluso" data-background="transparent" data-options="medium,square,line,horizontal,counter,theme=04" data-services="vkontakte,odnoklassniki,facebook,twitter,google,moimir,email,print"></div>
</div>

</div><!-- end #wrapper -->
	</div>

		</footer>



<?php wp_footer(); ?>
</body>
</html>