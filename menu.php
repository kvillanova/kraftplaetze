<div id="header-menu">
<?php
$link['startzeite'] = get_bloginfo('url');
$link['fengshui'] = get_bloginfo('url')."/fengshui";
$link['leistung'] = get_bloginfo('url')."/leistung";
$link['aktuelles'] = get_bloginfo('url')."/aktuelles";
$link['projekte'] = get_bloginfo('url')."/projekte";
$link['vita'] = get_bloginfo('url')."/vita";
$link['kontakt'] = get_bloginfo('url')."/kontakt";
$link['impressum'] = get_bloginfo('url')."/impressum";

if(is_home()) $link['startzeite'] = "#";
elseif(is_page('leistung')) $link['leistung'] = "#";
elseif(is_page('fengshui')) $link['fengshui'] = "#";
elseif(is_page('vita')) $link['vita'] = "#";
elseif(is_page('kontakt')) $link['kontakt'] = "#";
elseif(is_page('impressum')) $link['impressum'] = "#";

$size['startzeite'] = 150; 
$size['fengshui'] = 123;
$size['leistung'] = 114;
$size['aktuelles'] = 123;
$size['projekte'] = 113;
$size['vita'] = 61;
$size['kontakt'] = 109;
$size['impressum'] = 167;

//VALUES 1:
$marca['startzeite'] = $size['startzeite'];
$marca['fengshui'] = $marca['startzeite']+$size['fengshui'];
$marca['leistung'] = $marca['fengshui']+$size['leistung'];
$marca['aktuelles'] = $marca['leistung']+$size['aktuelles'];
$marca['projekte'] = $marca['aktuelles']+$size['projekte'];
$marca['vita'] = $marca['projekte']+$size['vita'];
$marca['kontakt'] = $marca['vita']+$size['kontakt'];
$marca['impressum'] = $marca['kontakt']+$size['impressum'];

//VALUES 2:
$marca['startzeite'] -= ($size['startzeite']/2) +32;
$marca['fengshui'] -= ($size['fengshui']/2) +32;
$marca['leistung'] -= ($size['leistung']/2) +32;
$marca['aktuelles'] -= ($size['aktuelles']/2) +32;
$marca['projekte'] -= ($size['projekte']/2) +32; 
$marca['vita'] -= ($size['vita']/2) +32;
$marca['kontakt'] -= ($size['kontakt']/2) +32;
$marca['impressum'] -= ($size['impressum']/2) +32;

if(is_home()) $marca['atual'] = $marca['startzeite'];
elseif(is_page('leistung')) $marca['atual'] = $marca['leistung'];
elseif(is_page('fengshui')) $marca['atual'] = $marca['fengshui'];
elseif(is_page('aktuelles')) $marca['atual'] = $marca['aktuelles'];
elseif(is_post_type_archive('projekte') || is_singular('projekte')) $marca['atual'] = $marca['projekte'];
elseif(is_page('vita')) $marca['atual'] = $marca['vita'];
elseif(is_page('kontakt')) $marca['atual'] = $marca['kontakt'];
elseif(is_page('impressum')) $marca['atual'] = $marca['impressum'];
else $marca['atual'] = $marca['startzeite'];

?>
<a href="<?php echo $link['startzeite']; ?>">
<div id="startzeite" class="menu-item" style="width:<?php echo $size['startzeite']; ?>px;"></div></a>
<a href="<?php echo $link['fengshui']; ?>">
<div id="fengshui" class="menu-item" style="width:<?php echo $size['fengshui']; ?>px;"></div></a>
<a href="<?php echo $link['leistung']; ?>">
<div id="leistung" class="menu-item" style="width:<?php echo $size['leistung']; ?>px;"></div></a>
<a href="<?php echo $link['aktuelles']; ?>">
<div id="aktuelles" class="menu-item" style="width:<?php echo $size['aktuelles']; ?>px;"></div></a>
<a href="<?php echo $link['projekte']; ?>">
<div id="projekte" class="menu-item" style="width:<?php echo $size['projekte']; ?>px;"></div></a>
<a href="<?php echo $link['vita']; ?>">
<div id="vita" class="menu-item" style="width:<?php echo $size['vita']; ?>px;"></div></a>
<a href="<?php echo $link['kontakt']; ?>">
<div id="kontakt" class="menu-item" style="width:<?php echo $size['kontakt']; ?>px;"></div></a>
<a href="<?php echo $link['impressum']; ?>">
<div id="impressum" class="menu-item" style="width:<?php echo $size['impressum']; ?>px;"></div></a>
<div style="clear:both;"></div>
<div id="marca-menu"></div>
</div><?php //end #header-menu ?>
<script type="text/javascript">
<?php
$pos['startzeite'] = -36*1; 
$pos['fengshui'] = -36*2;
$pos['leistung'] = -36*3;
$pos['aktuelles'] = -36*4;
$pos['projekte'] = -36*5;
$pos['vita'] = -36*6;
$pos['kontakt'] = -36*7;
$pos['impressum'] = -36*8;
$pos['atual'] = '';

if(is_home()) $pos['atual'] = $pos['startzeite'];
elseif(is_page('leistung')) $pos['atual'] = $pos['leistung'];
elseif(is_page('fengshui')) $pos['atual'] = $pos['fengshui'];
elseif(is_page('aktuelles')) $pos['atual'] = $pos['aktuelles'];
elseif(is_post_type_archive('projekte') || is_singular('projekte')) $pos['atual'] = $pos['projekte'];
elseif(is_page('kontakt')) $pos['atual'] = $pos['kontakt'];
elseif(is_page('impressum')) $pos['atual'] = $pos['impressum'];
elseif(is_page('vita')) $pos['atual'] = $pos['vita'];
else $pos['atual'] = $pos['startzeite'];
?>
$('#startzeite').mouseenter(function() {
	$('#header-menu').css('background-position', '0 <?php echo $pos['startzeite']; ?>px');
	$('#marca-menu').animate({left:<?php echo $marca['startzeite']; ?>}, {queue:false}, 2000);
});
$('#fengshui').mouseenter(function() {
	$('#header-menu').css('background-position', '0 <?php echo $pos['fengshui']; ?>px');
	$('#marca-menu').animate({left:<?php echo $marca['fengshui']; ?>}, {queue:false}, 2000);
});
$('#leistung').mouseenter(function() {
	$('#header-menu').css('background-position', '0 <?php echo $pos['leistung']; ?>px');
	$('#marca-menu').animate({left:<?php echo $marca['leistung']; ?>}, {queue:false}, 2000);
});
$('#aktuelles').mouseenter(function() {
	$('#header-menu').css('background-position', '0 <?php echo $pos['aktuelles']; ?>px');
	$('#marca-menu').animate({left:<?php echo $marca['aktuelles']; ?>}, {queue:false}, 2000);
});
$('#projekte').mouseenter(function() {
	$('#header-menu').css('background-position', '0 <?php echo $pos['projekte']; ?>px');
	$('#marca-menu').animate({left:<?php echo $marca['projekte']; ?>}, {queue:false}, 2000);
});
$('#vita').mouseenter(function() {
	$('#header-menu').css('background-position', '0 <?php echo $pos['vita']; ?>px');
	$('#marca-menu').animate({left:<?php echo $marca['vita']; ?>}, {queue:false}, 2000);
});
$('#kontakt').mouseenter(function() {
	$('#header-menu').css('background-position', '0 <?php echo $pos['kontakt']; ?>px');
	$('#marca-menu').animate({left:<?php echo $marca['kontakt']; ?>}, {queue:false}, 2000);
});
$('#impressum').mouseenter(function() {
	$('#header-menu').css('background-position', '0 <?php echo $pos['impressum']; ?>px');
	$('#marca-menu').animate({left:<?php echo $marca['impressum']; ?>}, {queue:false}, 2000);
});

$('.menu-item').mouseleave(function() {
	$('#header-menu').css('background-position', '0 <?php echo $pos['atual']; ?>px');
		$('#marca-menu').animate({left:<?php echo $marca['atual']; ?>}, {queue:false}, 2000);
});

$('#header-menu').css('background-position', '0 <?php echo $pos['atual']; ?>px');
$('#marca-menu').css('left', '<?php echo $marca['atual']; ?>px');
</script>