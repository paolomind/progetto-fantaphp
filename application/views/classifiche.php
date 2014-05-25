<!DOCTYPE html>
<html lang="en">
<?php
include Kohana::find_file('views', '_header');
?>
  <body>

<?php
include Kohana::find_file('views', '_menu');
?>

<?php
include Kohana::find_file('views', '_top_container');
?>
<form action="/classifiche" method="post">

                <div class="row">
                        <h2>Classifica FantaParlamento</h2>
                </div>
                <div class="row">
                <fieldset >
                        <h3> Il tuo partito 
                        	<select name="partito_da_selezionare"  style="color: black;">
                        	<?php 
                        	foreach ($partiti_utente as $p) {
								$selected = $partito_selezionato['id'] == $p['id'];
								echo '<option value=\''.$p['id'].'\' '.($selected ? 'selected' : '').'>'.$p['nome'].'</option>';
							}
                        	?>
                        	</select>
                        	<input type="hidden" name="partito_selezionato" value="<?= $partito_selezionato['id'] ?>"/>
                        	<button type="submit" name="scelta_partito" class="btn btn-success" value="true">Seleziona</button>
                        </h3>
                </fieldset>
                <div class="row">
                <fieldset >
<?php 
$params = array(
	'logged_in' => $logged_in,
	'title' => 'I tuoi Deputati',
	'deputati' => $deputati_partito,
	'n_pagine' => $n_pagine,
	'check_name' => 'deputati_da_escludere'
);
echo View::factory('_table_deputati',$params)->render();
?>
<button type="submit" name="action" class="btn btn-info" value="contronta">Confronta</button> <button type="submit" name="action" value="escludi" class="btn btn-danger">Escludi</button>
</fieldset>
                        </div>
                </div>
                <br><br>
                <div class="row">
                <fieldset >

<?php 
$params = array(
	'logged_in' => $logged_in,
	'title' => 'Deputati da Aggiungere',
	'deputati' => $deputati_all,
	'n_pagine' => $n_pagine,
	'check_name' => 'deputati_da_includere'
);

echo View::factory('_table_deputati',$params)->render();
?>
<button class="btn btn-info"  type="submit" name="action" value="confronta" >Confronta</button> <button class="btn btn-success"type="submit" name="action" value="aggiungi_deputato" >Aggiungi</button>

</fieldset>
                </div>
</form>
<?php 
include Kohana::find_file('views', '_bottom_container');
?>
</body>
</html>