<?php
session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <title>MyMagicalPet - Pagamento</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="paga_terminato.css">
        <script type="text/javascript" lang="javascript" src="../js/bootstrap.min.js"></script>
        <script type="text/javascript" lang="javascript" src="#"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <meta http-equiv="refresh" content="8; url=../indexloggato.html">
    </head>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">

    <body class="text-center">
        <nav class="navbar sticky-top" style="background-color: #641C34 ; " id="home">
			<a class="navbar-brand" href="../indexloggato.html">
                <img src="../immagini/logo_small.png" height="55px" alt="150px">
            </a>
			
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
        </nav>

      <br><br></br>
      <h1>Donazione ordine avvenuto con successo!</h1>
      <?php     
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    
    echo "Grazie per aver adottato con MyMagicalPet, " . $_SESSION['username'] . "!";
     // header('location:paga_terminato.html');
 } else {
     echo "Please log in first to see this page.";
 }
 ?>

      <p>Tra poco verrai reindirizzato alla Pagina Principale</p>
      <br>

      <div class="container">
        <div class="item-1"></div>
        <div class="item-2"></div>
        <div class="item-3"></div>
        <div class="item-4"></div>
        <div class="item-5"></div>
      </div>
        
      <br><br><br><br><br>     
      
      <!-- Footer -->
      <footer class="page-footer font-small white" id ="piede">
        <div class="footer-copyright text-center py-1"  style="background-color: #641C34 ;color:white">
        </div>
        <div class="section clearfix" style="background-color: #ffffff;">
            <div class="container">
                <div class="row lp-section-content clearfix">
                    <div class="col-sm-12">
                        <br>
                        <h3>Hai ancora problemi con il tuo MagicalPet? </h3>
                        <p>Contattaci attraverso la nostra mail di supporto.</p>
                        <div class="calltoaction-right-panel">
                            <a href="mailto:supportoclienti@mymagicalpet.com" class="btn btn-primary btn-lg" role="button"style="background-color: #641C34;">Contatta MyMagicalPet!</a>
                        </div>
                        <br>
                    </div>      
                </div>     
            </div>
        </div>
        <div class="footer-copyright text-left py-3"  style="background-color: #641C34 ;color:white"><strong>&nbsp Si ringraziano i soci </strong> John e Giorgio   .
        </div>
  </footer>
    <!-- Fine Footer -->

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    </body>   
</html>