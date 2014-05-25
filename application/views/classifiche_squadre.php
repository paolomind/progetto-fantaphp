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
                <div class="row">
                        <h2>Classifica Partiti</h2>
                </div>
<form action="/classificheSquadre" class="form-inline" method="post">
<fieldset>
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
                        <!-- tabella selezionati -->
                        <h3> I partiti con il maggior numero di punti</h3>
                        <table class = "table table-hover">
						<tr><th>seleziona</th>
						<th>nome partito</th>
						<th>giocatore</th>
						<th>punteggio</th></tr>
				<?php foreach ($squadre as $value) { ?>
						<tr><td><input type="checkbox" name="partito_id[]" value="<?= $value['id'] ?>" /></td>
						<td><?= $value['nome'] ?></td>
						<td><?= $value['giocatore'] ?></td>
						<td><?= $value['punteggio'] ?></td></tr>	
				<?php } ?>					
						
                        </table>
                         Pagina numero:

                                <?php 

                                $numero_pagine=$n_pagine;
                                 
                                for($i=0;$i<$numero_pagine;++$i){?>
                                <a href='/classificheSquadre?pag=<?php echo $i+1;?>'><?php echo $i+1;?></a>
                                <?php }?>
								<br><br>

                        <button class="btn btn-info">Confronta</button>
                        </div>
                        </fieldset>
                        </form>

<?php 
include Kohana::find_file('views', '_bottom_container');
?>
</body>
</html>