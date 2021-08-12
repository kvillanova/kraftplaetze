<?php include "header.php"; ?>
<?php if(is_user_logged_in()): ?>

<?php endif; ?>
<div id="home-sections">
<?php
query_posts(array('pagename' => 'home')); the_post();
$text['fengshui'] = get_post_meta($post->ID, 'kraft_fengshui_text', true);
$text['aktuelles'] = get_post_meta($post->ID, 'kraft_aktuelles_text', true);
$text['leistung'] = get_post_meta($post->ID, 'kraft_leistung_text', true);
$text['projekte'] = get_post_meta($post->ID, 'kraft_projekte_text', true);

$link['fengshui'] = get_post_meta($post->ID, 'kraft_fengshui_link', true);
$link['aktuelles'] = get_post_meta($post->ID, 'kraft_aktuelles_link', true);
$link['leistung'] = get_post_meta($post->ID, 'kraft_leistung_link', true);
$link['projekte'] = get_post_meta($post->ID, 'kraft_projekte_link', true);

if(empty($link['fengshui'])) $link['fengshui'] = get_bloginfo('url').'/fengshui';
if(empty($link['aktuelles'])) $link['aktuelles'] = get_bloginfo('url').'/aktuelles';
if(empty($link['leistung'])) $link['leistung'] = get_bloginfo('url').'/leistung';
if(empty($link['projekte'])) $link['projekte'] = get_bloginfo('url').'/projekte';

?>
<a href="<?php echo $link['fengshui']; ?>"><div id="fengshui-block" class="home-block">
<?php if(!empty($text['fengshui'])): ?>
<p><?php echo $text['fengshui'] ?></p><?php endif; ?>
</div></a><?php //end #fengshui-block ?>
<a href="<?php echo $link['aktuelles']; ?>"><div id="aktuelles-block" class="home-block">
<?php if(!empty($text['aktuelles'])): ?><p><?php echo $text['aktuelles'] ?></p><?php endif; ?>
</div></a><?php //end #aktuelles-block ?>
<a href="<?php echo $link['leistung']; ?>"><div id="leistung-block" class="home-block">
<?php if(!empty($text['leistung'])): ?><p><?php echo $text['leistung'] ?></p><?php endif; ?>
</div></a><?php //end #leistung-block ?>
<a href="<?php echo $link['projekte']; ?>"><div id="projekte-block" class="home-block">
<?php if(!empty($text['projekte'])): ?><p><?php echo $text['projekte'] ?></p><?php endif; ?>
</div></a><?php //end #projekte-block ?>
<div style="clear:both"></div>
</div><?php //end #home-sections ?>
<div id="home-desc">
<?php
$conteudo = get_the_content();
$conteudo = apply_filters('the_content', $conteudo); 
?>
<div class="texto">
<span id="edit-home"><?php $g = get_page_by_path('home'); if(is_user_logged_in()) echo edit_post_link('[Edit]', '', '', $g->ID); ?></span>
<?php echo $conteudo; ?>
</div><?php //end .texto ?>
<div style="clear:both;"></div>
<?php wp_reset_query(); ?>
</div><?php //end #home-desc ?>
<?php get_footer(); ?>