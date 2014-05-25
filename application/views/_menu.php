


    <div class="navbar-wrapper">
      <div class="container">
        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="navbar-collapse collapse">
            
<ul class="nav navbar-nav">
<li class="active"><a href="/">FantaParlamento</a></li>
<?php if(isset($username)) 
{ ?>
<li><a href="/classifiche">Classifiche Deputati</a></li>
<li><a href="/classificheSquadre">Classifiche Partiti</a></li>
<li><a href="/creaSquadra">Crea Partiti</a></li>
<li><a href="/datiUtente">Dati Utente</a></li>
<?php } 
else 
{ ?>
<li><a href="/login">Classifiche Deputati</a></li>
<li><a href="/regolamento.pdf" target="_blank">Fanta-Regolamento</a></li>
<?php } ?>
</ul>
<?php if(isset($username)) { ?>
                <div class="login">
                Benvenuto,<span class="user"><?= $username; ?></span>
				</div>
<?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>