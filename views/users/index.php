<?php 
  $title = "ADSI | Usuarios";
  include('./views/partials/header.php');
  include('./controllers/users/users.php');   
  include('add.php');
  $usersAdsi = new UsersADSI;
  $users = $usersAdsi->getUsers(); 
?> 

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand text-success" href="#"><i class="fa-solid fa-circle-user me-2"></i>Bienvenido <b><?php echo $user->getName (); ?> </b></a>    
      <a class="btn btn-outline-success" href="./controllers/security/logout.php">Salir &nbsp;<span id="iconPass" class="fa-solid fa-right-from-bracket"></a>
    </div>
  </nav>

  <div class="container">
    <div class="card mt-3">
        <div class="card-header bg-success text-light fs-3 text-center">   
            <b>Lista de usuarios</b>
        </div>
        <div class="body p-3">
            <div class="d-flex flex-row-reverse">
                <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#addModal">
                    <i class="fa-solid fa-plus"></i>
                    <b>Agregar Nuevo/a</b>
                </button>
            </div> 
            <table id="TableUsers" class="table table-borderless table-striped">
                <thead>
                    <tr>
                        <th>Identificación</th>
                        <th>Nombre</th>
                        <th>Usuario</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach ($users as $user) { ?>
                        <tr>
                            <td><?php echo $user->identification; ?></td>
                            <td><?php echo $user->name; ?></td>
                            <td><?php echo $user->user; ?></td>
                            <td class="text-center">
                                <a class="text-warning me-3" style="display:inline-block" href="controlador/editar.php?Item=<?php echo $user -> identification ;?>">
                                    <i class="fa-solid fa-pencil"></i>
                                </a>
                                <a onclick="return confirm('Estas seguro de eliminar')" class="text-danger" href="controlador/eliminar.php?Item=<?php echo $user -> identification;?>">
                                    <i class="fa-solid fa-trash-can"></i>
                                </a>                     
                            </td>
                        </tr>   
                    <?php } ?>
                </tbody>
            </table>               
        </div>                  
    </div>
  </div> 

  <script> /* prevent a resubmit on refresh and back button. */
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
  </script>

<?php include('./views/partials/footer.php') ?> 
