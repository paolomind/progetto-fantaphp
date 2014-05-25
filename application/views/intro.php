<!DOCTYPE html>
<html lang="en">
<?php
include Kohana::find_file('views', '_header');
?>
  <body style="background-color: #fff;">
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


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li class="" data-target="#myCarousel" data-slide-to="1"></li>
        <li class="" data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="/images/slide1.jpg" style="width: 900px; height: 500px;"  alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>FantaParlamento</h1>
              <p>Dai fiducia ai tuoi politici. Osserva il loro operato e gioca a stabilire il migliore.</p>
              <p><a class="btn btn-lg btn-primary" href="/login" role="button">Provalo ora!</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="/images/slide2.jpg" style="width: 900px; height: 500px;" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Impara divertendoti</h1>
              <p>Studia i programmi politici, osserva i comportamenti dei maggiori esponenti. Costruisci la tua squadra di politici, e confronta con i tuoi amici il loro operato. Impara la storia del nostro paese, a partire da chi la costruisce giorno per giorno.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Modalità "amici"</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="/images/slide1.jpg" style="width: 900px; height: 500px;" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Con gli amici o con l'Italia?</h1>
              <p>Puoi confrontare le tue scelte con i tuoi amici... oppure con tutto il web. Sei pronto a dare fiducia?
              </p>
              <p><a class="btn btn-lg btn-primary" href="login" role="button">Modalità "Italia"</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

<div class="row">
      <div class="col-lg-4"></div>
      <div class="col-lg-4"><h1>Dall'idea e l'impegno di:</h1></div>
      <div class="col-lg-4"></div>
</div>


      <!-- Three columns of text below the carousel -->
      <div class="row">

        <div class="col-md-6" align="center">

          <img src="/images/paolo.jpg" style="width: 200px; height: 200px;" class="img-circle" alt="140x140">
          <h2>Paolo Autunno</h2>
          <p>Da artista mancato a informatico appassionato. Ogni giorno cerca di migliorare il mondo.</p>
          <p><a class="btn btn-default" href="#" role="button">Twitter »</a></p>
        </div><!-- /.col-lg-4 -->


        <div class="col-md-6" align="center">
          <img src="/images/simone.jpg" style="width: 200px; height: 200px;" class="img-circle" alt="140x140">
          <h2>Simone Cicinelli</h2>
          <p>
          Laurea triennale in ingegneria informatica, programmatore, game developer e aspirante musicista a tempo perso. Adora il retrogaming, la pizza e risolvere problemi complicati.</p>
          <p><a class="btn btn-default" href="#" role="button">Twitter »</a></p>
        </div><!-- /.col-lg-4 -->
        
        </div>
        
<div class="row">

        <div class="col-md-6" align="center">
          <img src="/images/giampaolo.jpg" style="width: 200px; height: 200px;" class="img-circle" alt="140x140">
          <h2>Paolo Zerbinato</h2>
          <p>Commentatore politico per lavoro, il caso vuole che si occupi di sistemi elettronici. Amante di fotografia, poesia e degustatore professionista di coda alla vaccinara.</p>
          <p><a class="btn btn-default" href="#" role="button">Twitter »</a></p>
        </div><!-- /.col-lg-4 -->





      <div class="col-md-6" align="center">          
      <img src="images/gabriele.jpg" style="width: 200px; height: 200px;" class="img-circle" alt="140x140">
          <h2>Gabriele Serra</h2>
          <p>Studente pensatore con tanta voglia di apprendere.</p>
          <p><a class="btn btn-default" href="#" role="button">Twitter »</a></p>
          </div>
          </div>


<!--      <div class="col-lg-4"><h1></h1></div>


       <div class="col-lg-4">          <img src="" style="width: 200px; height: 200px;" class="img-circle" data-src="holder.js/200x200" alt="200x200">
          <h2>Luigi Caputo</h2>
          <p>Aiuto nella.</p>
          <p><a class="btn btn-default" href="#" role="button">Twitter »</a></p></div> -->
</div>


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Gamification applicata alla politica. <span class="text-muted">Un nuovo modo di tenersi informati.</span></h2>
          <p class="lead">FantaParlamento prende in prestito l'idea del FantaCalcio e la applica alla politica italiana.</p>
          <p>Crea una tua squadra di politici. Ogni settimana verrà assegnato loro un voto, calcolato sulla base della loro attività in aula. Tieniti informato sull'attività parlamentare e confronta le votazioni della squadra con quelle degli altri partecipanti.</p>
        </div>
        <div class="col-md-5">
          <img src="images/figurine.jpg" alt="500x500">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img src="images/friends.jpg" alt="500x500">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Gioca con gli amici. <span class="text-muted">In qualsiasi momento.</span></h2>
          <p class="lead">Puoi competere con i tuoi amici in qualsiasi momento. La settimana parlamentare inizia dal lunedì e finisce il venerdì. Potete confrontare i vostri risultati al passare delle settimane o dei mesi.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Confrontati con l'Italia. <span class="text-muted">Sarai il più abile a prevedere?</span></h2>
          <p class="lead">Al passare dei mesi verranno organizzate delle sfide a cui tutti potranno partecipare. Chi avrà la squadra di politici più attiva?</p>
        </div>
        <div class="col-md-5">
          <img src="/images/italia.jpg" alt="500x500">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


<!-- FOOTER -->
<footer>
<p class="pull-right"><a href="#">Back to top</a></p>
<p> 2014 Company, Inc. <a href="#">Privacy</a> <a href="#">Terms</a></p>
</footer>

</div><!-- /.container -->
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/docs.js"></script>
      
</body></html>