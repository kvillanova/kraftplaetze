<?php get_header(); ?>
<div id="page-holder">
<div id="page-row">
<div id="page-sidebar" class="projekte">
<img src="<?php echo get_bloginfo('template_url'); ?>/img/proj.jpg" width="240" height="150" />
<table id="projekte-list" cellpadding="0" cellspacing="0">
<?php
$a=0;
query_posts(array('post_type' => 'projekte', 'posts_per_page' => '-1'));
if(have_posts()): while(have_posts()): the_post(); ?>
<tr>
<td class="projekte">
<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
</td></tr>
<?php
endwhile; endif; wp_reset_query();
?>
</table><?php //end #projekte-list ?>
</div><?php //end #sidebar ?>
<div id="page-content">
<?php the_post(); ?>
<h1><span class="page-title">Projekte</span></h1>
<h2><?php the_title(); ?><?php if(is_user_logged_in()): edit_post_link('[edit]'); endif; ?><br />
<?php
$rotulo = get_post_meta($post->ID, 'kraft_');
?>
<small><?php echo "Planung und Ausführung"; ?></small>
</h2>
<p><?php the_content(); ?></p>
</div><?php //end #page-content ?>
</div><?php //end #page-row ?>
</div><?php //end #page-holder ?>
<?php get_footer(); ?>