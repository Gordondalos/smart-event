<?php get_header(); 
get_template_part('breadcrums'); ?>
<div class="container">

	
	<div class="row enigma_blog_wrapper">
	<div class="col-md-8">
	<?php get_template_part('post','page'); ?>

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
	</div>
	<?php get_sidebar(); ?>	
	</div>
</div>	
<?php get_footer(); ?>