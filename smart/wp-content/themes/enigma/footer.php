<!-- enigma Callout Section -->
<?php $wl_theme_options = weblizar_get_options(); ?>
<!-- Footer Widget Secton -->
<div class="enigma_footer_widget_area">	
	<div class="container">
		<div class="row">
			<?php 
			if ( is_active_sidebar( 'footer-widget-area' ) ){ 
				dynamic_sidebar( 'footer-widget-area' );
			} else 
			{ 
			$args = array(
			'before_widget' => '<div class="col-md-3 col-sm-6 enigma_footer_widget_column">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="enigma_footer_widget_title">',
			'after_title'   => '<div class="enigma-footer-separator"></div></div>' );
			the_widget('WP_Widget_Pages', null, $args);			
			} ?>
		</div>		
	</div>	
</div>
<div class="enigma_footer_area">
		<div class="container">
			<div class="col-md-12">
			<p class="enigma_footer_copyright_info wl_rtl" >
			<?php if($wl_theme_options['footer_customizations']) { echo esc_attr($wl_theme_options['footer_customizations']); }
			if($wl_theme_options['developed_by_text']) { echo "|" .esc_attr($wl_theme_options['developed_by_text']); } ?>
			<a target="_blank" rel="nofollow" href="<?php if($wl_theme_options['developed_by_link']) { echo esc_url($wl_theme_options['developed_by_link']); } ?>"><?php if($wl_theme_options['developed_by_weblizar_text']) { echo esc_attr($wl_theme_options['developed_by_weblizar_text']); } ?></a></p>
			<?php if($wl_theme_options['footer_section_social_media_enbled'] == '1') { ?>
			<div class="enigma_footer_social_div">

				<script type="text/javascript">(function() {
						if (window.pluso)if (typeof window.pluso.start == "function") return;
						if (window.ifpluso==undefined) { window.ifpluso = 1;
							var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
							s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
							s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
							var h=d[g]('body')[0];
							h.appendChild(s);
						}})();</script>
				<div class="pluso" data-background="transparent" data-options="small,square,line,horizontal,counter,theme=04" data-services="vkontakte,odnoklassniki,facebook,twitter,google,moimir,bookmark,print"></div>
<!--				<ul class="social">-->
<!--					--><?php //if($wl_theme_options['fb_link']!='') { ?>
<!--					   <li class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><a  href="--><?php //echo esc_url($wl_theme_options['fb_link']); ?><!--"><i class="fa fa-facebook"></i></a></li>-->
<!--					--><?php //} if($wl_theme_options['twitter_link']!='') { ?>
<!--					<li class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><a href="--><?php //echo esc_url($wl_theme_options['twitter_link']) ; ?><!--"><i class="fa fa-twitter"></i></a></li>				-->
<!--					--><?php //} if($wl_theme_options['linkedin_link']!='') { ?>
<!--					<li class="linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin"><a href="--><?php //echo esc_url($wl_theme_options['linkedin_link']) ; ?><!--"><i class="fa fa-linkedin"></i></a></li>-->
<!--					--><?php //} if($wl_theme_options['youtube_link']!='') { ?>
<!--					<li class="youtube" data-toggle="tooltip" data-placement="top" title="Youtube"><a href="--><?php //echo esc_url($wl_theme_options['youtube_link']) ; ?><!--"><i class="fa fa-youtube"></i></a></li>-->
<!--	                --><?php //} if($wl_theme_options['gplus']!='') { ?>
<!--					<li class="twitter" data-toggle="tooltip" data-placement="top" title="gplus"><a href="--><?php //echo esc_url($wl_theme_options['gplus']) ; ?><!--"><i class="fa fa-google-plus"></i></a></li>-->
<!--	                --><?php //} if($wl_theme_options['instagram']!='') { ?>
<!--					<li class="facebook" data-toggle="tooltip" data-placement="top" title="instagram"><a href="--><?php //echo esc_url($wl_theme_options['instagram']) ; ?><!--"><i class="fa fa-instagram"></i></a></li>-->
<!--	                --><?php //} ?>
<!--				</ul>-->
			</div>
			<?php } ?>			
			</div>		
		</div>		
</div>	
<!-- /Footer Widget Secton -->
</div>
<a href="#" title="Go Top" class="enigma_scrollup" style="display: inline;"><i class="fa fa-chevron-up"></i></a>
<?php if($wl_theme_options['custom_css']) ?>
<style type="text/css">
<?php { echo esc_attr($wl_theme_options['custom_css']); } ?>
</style>
<?php wp_footer(); ?>
</body>
</html>