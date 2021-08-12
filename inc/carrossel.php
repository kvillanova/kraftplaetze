<div id="carrossel">
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/skitter/js/jquery.animate-colors-min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/skitter/js/jquery.skitter.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/skitter/js/jquery.easing.1.3.js"></script>
<link href="<?php bloginfo('template_url'); ?>/js/skitter/css/skitter.styles.css" type="text/css" media="all" rel="stylesheet" />
<div class="border_box">
<div class="box_skitter box_skitter_large">
<ul>
<?php 
$carr_number = get_option("kraft_carr_number");

query_posts(array('post_type' => 'carrossel', 'posts_per_page' => $carr_number)); 
if(have_posts()): while(have_posts()): the_post();
$url = get_post_meta($post->ID, 'kraft_url', false);
if(has_post_thumbnail()):
?>
<li><?php if(!empty($url)) echo "<a href=\"$url\">"; the_post_thumbnail('carrossel', array('class' => '', 'alt' => '', 'title' => '')); if(!empty($url)) echo '</a>'; ?></li>
<?php endif; ?>
<?php endwhile; endif; ?>
</ul>
</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
		$('.box_skitter_large').css({width: 960, height: 363}).skitter({navigation: false, dots: true, interval: 4000, animation: 'circles' }); 	var largura = $('.box_skitter .info_slide_dots').width();
	largura = (960-largura)/2;
	$('.box_skitter .info_slide_dots').css('margin-left', largura+'px');
	});
</script>
</div><?php //end #carrossel ?>
<div id="carrossel-numbers">
</div><?php //end #carrossel-numbers ?>