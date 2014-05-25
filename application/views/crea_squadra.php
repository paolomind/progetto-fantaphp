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
<form action="/creaSquadra" class="form-inline" method="post">
<fieldset>
<input type="hidden" name="utente" value="<?= $username ?>"/>
	<div class="row">
	<label for="nome">Nome Partito:</label>
	<input class="form-control" type="text"  name="nome" size="15" />
	</div>
	<div class="row">
	<label for="sessione">sessione:</label>
		<select class="form-control" style="width: auto;" name="sessione" >
		<?php foreach ($sessioni as $v) {
			$selected= $v['id'] == $sessione['id'] ? 'selected' : '';
		      echo "<option value='".$v['id']."' $selected >".$v['nome']."</option>";
		}
		?>
		</select>
		<button type="submit" class="btn btn-info btn-lg" name="scelta_sessione" value="true">Seleziona</button>
	</div>
	<div class="row">
	<button type="submit" class="btn btn-success" name="action" value="crea">Crea Partito</button>
	</div>
	<div class="row">
	<?php 
$params = array(
	'logged_in' => $logged_in,
	'title' => 'I tuoi Partiti nella sessione selezionata',
	'partiti' => $partiti,
	'check_name' => 'partiti_da_cancellare'
);
echo View::factory('_table_partiti',$params)->render();
?>
	<button type="submit" class="btn btn-danger" name="action" value="elimina">Elimina Partiti</button>
	</div>
</fieldset>
</form>

<?php 
include Kohana::find_file('views', '_bottom_container');
?>
           
</body>
</html>