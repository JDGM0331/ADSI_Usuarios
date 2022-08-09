<div class="modal fade" id="deleteModal_<?php echo $user->identification;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Eliminar Usuario</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <p class="text-center">¿Estás seguro de eliminar el siguiente usuario? </p>
                <h2 class="text-center text-success"> <?php echo $user->name; ?></h2> 
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="BorrarDatosForm()">
                    <i class="fa-solid fa-close"></i>
                    <b>Cancelar</b>
                </button>
                <a href="controllers/users/delete.php?identification=<?php echo $user->identification; ?>" class="btn btn-danger"> <span class="fa-solid fa-trash-can"></span> Eliminar</a>
            </div>                            

        </div>
    </div>
</div>