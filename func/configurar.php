<?php

function page_setup() {
	add_menu_page('Opções do Tema', 'Opções do Tema', 'editor', 'opcoes', 'pagina_opcoes');
}

add_action("admin_menu", "page_setup");

function pagina_opcoes() { 
/*if (!current_user_can('manage_options')) {  
    wp_die('You do not have sufficient permissions to access this page.');
	  }*/
	  
	  	 if (isset($_POST["update_settings"])) {  
    $endereco = esc_attr($_POST["endereco"]);
	$email = esc_attr($_POST["email"]);  
	$telefone = esc_attr($_POST["telefone"]);
	$developedby = esc_attr($_POST["developedby"]);
	
	$carr_number = intval($_POST["carr_number"]); 
	if($carr_number <= 0) { $carr_number = 1; }
	elseif($carr_number > 12) { $carr_number = 12; }    
	
	update_option("kraft_endereco", $endereco);
	update_option("kraft_email", $email);
	update_option("kraft_telefone", $telefone);
	update_option("kraft_developedby", $developedby);
	update_option("kraft_carr_number", $carr_number);
}

	$endereco = get_option("kraft_endereco"); 
	$email = get_option("kraft_email");
	$telefone = get_option("kraft_telefone");
	$developedby = get_option("kraft_developedby");
	$carr_number = get_option("kraft_carr_number");
	  
?>
<div class="wrap">
<?php screen_icon('themes'); ?><h2>Opções do Tema</h2>
<form action="" method="post">

<h3>Carrossel</h3>
<table>
<tr>
<td style="width:166px;">Número de Imagens <small>(até 12)</small></td>
<td><input type="text" size="2" name="carr_number" value="<?php echo $carr_number; ?>" maxlength="2" /></td>
</tr><?php //end Twitter ROW ?>
</table>

<h3>Rodapé</h3>
<table>
<tr>
<td style="width:166px;">Endereço</small></td>
<td><input type="text" size="100" name="endereco" value="<?php echo $endereco; ?>" maxlength="100" /></td>
</tr><?php //end Rod.1 ?>
<tr>
<td style="width:166px;">E-mail</small></td>
<td><input type="text" size="100" name="email" value="<?php echo $email; ?>" maxlength="100" /></td>
</tr><?php //end Rod.2 ?>
<tr>
<td style="width:166px;">Telefone</small></td>
<td><input type="text" size="100" name="telefone" value="<?php echo $telefone; ?>" maxlength="100" /></td>
</tr><?php //end Rod.3 ?>
<td style="width:166px;">Desenvolvido Por</small></td>
<td><input type="text" size="100" name="developedby" value="<?php echo $developedby; ?>" maxlength="100" /></td>
</tr><?php //end Rod.4 ?>
</table>

<input type="hidden" name="update_settings" value="Y" />
<p><input type="submit" value="Salvar" class="button-primary"/></p>  
</form>
</div><?php //end .wrap ?>
<?php
}
?>