<?php get_header(); ?>
<div id="page-holder">
<div id="page-row">
<div id="page-sidebar" class="<?php
if(is_page('fengshui')) echo "fengshui";
elseif(is_page('leistung')) echo "leistung";
elseif(is_page('aktuelles')) echo "aktuelles";
elseif(is_page('projekte')) echo "projekte";
elseif(is_page('vita')) echo "vita";
elseif(is_page('kontakt')) echo "kontakt";
elseif(is_page('impressum')) echo "impressum";
?>">
<?php the_post_thumbnail('page-sidebar', array('class' => '', 'alt' => '', 'title' => '')); ?>
</div><?php //end #sidebar ?>
<div id="page-content">
<?php the_post(); ?>
<h1><span class="page-title"><?php the_title(); ?></span><?php if(is_user_logged_in()): edit_post_link('[edit]'); endif; ?></h1>
<p><?php the_content(); ?></p>
</div><?php //end #page-content ?>
</div><?php //end #page-row ?>
</div><?php //end #page-holder ?>
<?php get_footer(); ?>