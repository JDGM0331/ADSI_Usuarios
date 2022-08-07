<?php 
  $title = "ADSI | Usuarios";
  include('./views/partials/header.php') 
?> 

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand text-success" href="#"><i class="fa-solid fa-circle-user me-2"></i>Bienvenido <b><?php echo $user->getName (); ?> </b></a>    
      <a class="btn btn-outline-success" href="./controllers/security/logout.php">Salir &nbsp;<span id="iconPass" class="fa-solid fa-right-from-bracket"></a>
    </div>
  </nav>

  <div class="container">
    
  </div>

  <script> /* prevent a resubmit on refresh and back button. */
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
  </script>

<?php include('./views/partials/footer.php') ?> 
