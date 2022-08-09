<!-- Modal -->
<div class="modal fade " id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Agregar Usuario</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body px-5">        
                <form method="POST" action="./controllers/users/add.php" id="MyFormAdd">

                    <div class="row form-group mb-3">
                        <div class="col-sm-3">
                            <label class="control-label">Identificacion:</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="identification" required>
                        </div>
                    </div>
                    
                    <div class="row form-group mb-3">
                        <div class="col-sm-3">
                            <label class="control-label">Nombre:</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" required>
                        </div>
                    </div>

                    <div class="row form-group mb-3">
                        <div class="col-sm-3">
                            <label class="control-label">Usuario:</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="user" required>
                        </div>
                    </div>
                    
                    <div class="row form-group mb-3">
                        <div class="col-sm-3">
                            <label class="control-label">Contraseña:</label>
                        </div>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="password" id="password" name="password" class="form-control" autocomplete="off" required/>
                                <div class="input-group-append">
                                    <button id="show_password" class="btn btn-muted gradient-custom-2" type="button" onclick="mostrarPassword()"> <span id="iconPass" class="fa-solid fa-eye-slash"></span> </button>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="BorrarDatosForm()">
                    <i class="fa-solid fa-close"></i>
                    <b>Cancelar</b>
                </button>
                <button type="submit" class="btn btn-success">
                    <i class="fa-solid fa-plus"></i>
                    <b>Agregar</b>
                </button>
            </div>

                </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    function mostrarPassword(){
        var cambio = document.getElementById("password");
        if(cambio.type == "password"){
            cambio.type = "text";
            /* $('.icon').removeClass('fa-solid fa-eye-slash').addClass('fa-solid fa-eye'); */
            document.getElementById("iconPass").className = "fa-solid fa-eye";
        }else{
            cambio.type = "password";
            /* $('.icon').removeClass('fa-solid fa-eye').addClass('fa-solid fa-eye-slash'); */
            document.getElementById("iconPass").className = "fa-solid fa-eye-slash";
        }
    } 
</script>

<script>
    function BorrarDatosForm(){
        document.getElementById("MyFormAdd").reset();
    }
</script>