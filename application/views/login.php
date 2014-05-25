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
                        <h2>Login</h2>
                </div>

                <div class="row">
                        <div class="col-md-12">


                        <form class="form-group" method="POST" action="/login/login">
                         <br> Username: (utente01) <input type="text" class="form-control" name="username" placeholder="Inserisci il tuo nome utente" /><br />
                          Password: (utente01) <input type="password" class="form-control" name="password" placeholder="Inserisci la password" /><br />
                          <div align="center">
                          <p><input type="submit" class="btn btn-primary" value="Login" /></p>
                          </div>
                        </form>


                        </div>

                </div>
                
                <div class="row">
<?php 
$params = array(
	'logged_in' => $logged_in,
	'title' => 'Lista Deputati',
	'deputati' => $deputati_all,
	'n_pagine' => $n_pagine
);

echo View::factory('_table_deputati',$params)->render();
?>
                </div>
                
<?php 
include Kohana::find_file('views', '_bottom_container');
?>                
</body>
</html>