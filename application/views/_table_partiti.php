
<h3><?= $title ?></h3>

<table class = "table table-hover">
<tr>
<?php if(isset($check_name))
{ ?>
<th>seleziona</th>
<?php } ?>
<th>nome</th><th>punteggio</th>
 </tr>
<?php
if(!empty($partiti)) foreach($partiti as $partito)
{ ?>
<tr align="center">
<?php  if(isset($check_name))
{ ?>
<td><input type="checkbox" name="<?=$check_name?>[]" value="<?= $partito['id'] ?>"/></td>
<?php } ?>
<td><?= $partito['nome']; ?></td>
<td><?= $partito['punteggio'] ?></td>
</tr>
<?php } ?>
</table>
					