<?php include('./views/partials/header.php') ?> 

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Bienvenido <b><?php echo $user->getName (); ?> </b></a>    
      <a class="btn btn-outline-success" href="./controllers/security/logout.php">Cerrar sesión</a>
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
