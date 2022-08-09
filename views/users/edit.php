<!-- Modal -->
<div class="modal fade " id="editModal_<?php echo $user->identification;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Editar Usuario</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body px-5">        
                <form method="POST" action="./controllers/users/edit.php" id="MyFormEdit">

                    <input type="hidden" name="id" value="<?php echo $user->identification;?>">

                    <div class="row form-group mb-3">
                        <div class="col-sm-3">
                            <label class="control-label">Identificación:</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="identification" required value="<?php echo $user->identification;?>">
                        </div>
                    </div>
                    
                    <div class="row form-group mb-3">
                        <div class="col-sm-3">
                            <label class="control-label">Nombre:</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" required value="<?php echo $user->name;?>">
                        </div>
                    </div>

                    <div class="row form-group mb-3">
                        <div class="col-sm-3">
                            <label class="control-label">Usuario:</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="user" required value="<?php echo $user->user;?>">
                        </div>
                    </div>
                    
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="BorrarDatosForm()">
                    <i class="fa-solid fa-close"></i>
                    <b>Cancelar</b>
                </button>
                <button type="submit" class="btn btn-warning text-light">
                    <i class="fa-solid fa-pencil"></i>
                    <b>Actualizar</b>
                </button>
            </div>

                </form>
        </div>
    </div>
</div>

<script>
    function BorrarDatosForm(){
        document.getElementById("MyFormEdit").reset();
    }
</script>