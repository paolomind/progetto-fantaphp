
<h3><?= $title ?></h3>

<table class = "table table-hover">
<tr>
<?php if(isset($check_name))
{ ?>
<th>seleziona</th>
<?php } ?>
<th>nome</th><th>valore (non esatto - solo per demo)</th>
 </tr>
<?php
if(!empty($deputati)) foreach($deputati as $deputato)
{ ?>
<tr align="center">
<?php  if(isset($check_name))
{ ?>
<td><input type="checkbox" name="<?=$check_name?>[]" value="<?= $deputato['id'] ?>"/></td>
<?php } ?>
<td><a target="_blank" href="<?= $deputato['uri'] ?>"><?= $deputato['nome']; ?></a></td>
<td><?= $deputato['valore'] ?></td>
</tr>
<?php } ?>
</table>
Pagina numero:
<? for($i=0;$i<$n_pagine;++$i) 
{ ?>
<a href=classifiche?pag=<?= $i+1;?>><?= $i+1;?></a>
<?php }?>
					