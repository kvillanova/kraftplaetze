<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kraftplätze</title>
<link rel="shortcut icon" href="<?php bloginfo('url'); ?>/favicon.ico" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
<meta property="og:image" content="" />
<meta property="og:title" content="Kraftplätze" />
<meta property="og:site_name" content="Kraftplätze" />
<meta property="og:type" content="website" />
<meta property="og:description" content="" />
<?php
$pages = array('fengshui', 'leistung', 'aktuelles', 'projekt', 'vita', 'kontakt', 'impressum');
if(is_home()) { echo "<meta property=\"og:url\" content=\"http://kraftplaetze.com\" />"; }
elseif(is_page()) { /*DOWN BELOW*/ }
else { echo "<meta property=\"og:url\" content=\"http://kraftplaetze.com\" />"; }
foreach($pages as $p):
if(is_page($p)) { echo "<meta property=\"og:url\" content=\"http://kraftplaetze.com/{$p}\" />"; }
endforeach;
?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
<?php wp_head(); ?>
</head>
<body>
<div id="central">
<div id="header">
<a href="<?php if(!is_home()) bloginfo('url'); else echo "#"; ?>">
<img src="<?php bloginfo('template_url'); ?>/img/kraft-logo.png" width="261" height="125" /></a>
</div><?php //end #header ?>
<?php
include "menu.php";
if(is_home()) include "inc/carrossel.php";
?>