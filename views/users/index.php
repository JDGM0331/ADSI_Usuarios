<?php  
    if (!isset($_SESSION['user'])) {
        header('location: ../../index.php');
    }

?>

<?php 
  $title = "ADSI | Usuarios";
  include('./views/partials/header.php');
  include('./controllers/users/users.php');   
  include('add.php');
  $usersAdsi = new UsersADSI;
  $users = $usersAdsi->getUsers(); 
?> 

    <!-- Notification added successfully -->
    <?php 
        if (isset($_GET['message']) and $_GET['message'] == 'created') { ?>
            <script type="text/javascript">
                Swal.fire({
                    title: 'Usuario agregado exitosamente',    
                    text: ' ',
                    icon: 'success',
                    iconColor: 'green',
                    confirmButtonText: 'Aceptar',
                    confirmButtonColor: 'green',
                })
            </script>
    <?php } ?>

    <!-- Notification updated successfully -->
    <?php 
        if (isset($_GET['message']) and $_GET['message'] == 'updated') { ?>
            <script type="text/javascript">
                Swal.fire({
                    title: 'Usuario actualizado exitosamente',    
                    text: ' ',
                    icon: 'success',
                    iconColor: 'green',
                    confirmButtonText: 'Aceptar',
                    confirmButtonColor: 'green',
                })
            </script>
    <?php } ?>

    <!-- Notification deleted successfully -->
    <?php 
        if (isset($_GET['message']) and $_GET['message'] == 'deleted') { ?>
            <script type="text/javascript">
                Swal.fire({
                    title: 'Usuario eliminado exitosamente',    
                    text: ' ',
                    icon: 'success',
                    iconColor: 'green',
                    confirmButtonText: 'Aceptar',
                    confirmButtonColor: 'green',
                })
            </script>
    <?php } ?>

    <!-- Notification failed -->
    <?php 
        if (isset($_GET['message']) and $_GET['message'] == 'failed') { ?>
            <script type="text/javascript">
                Swal.fire({
                    title: 'Operación rechada',    
                    text: 'Verifica la acción e intenta nuevamente',
                    icon: 'error',
                    iconColor: 'red',
                    confirmButtonText: 'Aceptar',
                    confirmButtonColor: 'green',
                })
            </script>
    <?php } ?>

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
            <div class="d-flex justify-content-center">
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
                                <a type="button" class="text-warning me-3" style="display:inline-block" data-bs-toggle="modal" data-bs-target="#editModal_<?php echo $user->identification;?>">
                                    <i class="fa-solid fa-pencil"></i>
                                </a>                                   
                                <a type="button" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal_<?php echo $user->identification;?>">
                                    <i class="fa-solid fa-trash-can"></i>
                                </a>
                                <?php include('delete.php'); ?>          
                                <?php include('edit.php'); ?>          
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

  <script>
    $(document).ready( function () {
        $('#TableUsers').DataTable();
    } );
  </script>

    <!-- Realizar cambios a los componentes del buscador (traducir todos los caracteres al español)-->
    <script>
        var table = $('#TableUsers').DataTable({
            language:{
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                "infoEmpty": "Mostrando 0 a 0 de 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Entradas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
        });
    </script>

<?php include('./views/partials/footer.php') ?> 
