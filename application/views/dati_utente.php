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
                        <h2>Dati Utente</h2>
                </div>

                <div class="row">
                        <div class="col-md-12">
<!-- CONTENT -->

	<form method="POST" action="/datiUtente">
	<p>Username <input type="text" class="form-control" value="<?= isset($username) ? $username : Auth::instance()->get_user() ?>" name="username" size="15" readonly="readonly"/></p>
	<p>Password <input type="password" placeholder="Password" class="form-control" value="" name="password" size="15" /></p>
	<p><strong>Budget residuo:</strong><?= isset($budget) ? $budget : 10000 ?></p>
 <input type="submit" class="btn btn-primary" value="Salva" size="15" /></form><br>
<!-- CONTENT -->
                        </div>

                </div>


<?php 
include Kohana::find_file('views', '_bottom_container');
?>
                    
</body>
</html>