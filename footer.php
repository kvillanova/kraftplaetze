<div id="footer">
<div id="address">
<?php
$endereco = get_option("kraft_endereco"); 
$email = get_option("kraft_email");
$telefone = get_option("kraft_telefone");
$developedby = get_option("kraft_developedby");

if(!empty($email)) $email = "<a href=\"mailto:{$email}\">{$email}</a>"
?>
<?php if(!empty($endereco) && !empty($email)) echo $endereco.' | '; else { if(!empty($endereco)) echo $endereco; } ?>
<?php if(!empty($email) && !empty($telefone)) echo $email.' | '; else { if(!empty($email)) echo $email; } ?>
<?php if(!empty($telefone)) { if(!empty($email)) echo $telefone; else echo ' | '.$telefone; } ?>
</div><?php //end #address ?>
<div id="developedby"><a href="http://six.com.vc"><?php if(!empty($developedby)) echo $developedby." "; ?><img src="<?php bloginfo('template_url'); ?>/img/six.png" width="20" height="25" /></a></div><?php //end #developedby ?>
<div style="clear:both"></div>
</div><?php //end #footer ?>
</div><?php //end #central ?>
<?php wp_footer(); ?>
</body>
</html>