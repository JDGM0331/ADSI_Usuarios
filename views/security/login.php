<?php include('./views/partials/header.php') ?> 

<div class="container">

    <div class="abs-center">
        <div class="card">

            <?php 
                if (isset($login) and $login == 'Error') { ?>
                    <script type="text/javascript">
                        Swal.fire({
                            title: 'Credenciales incorrectas',    
                            text: 'Intentelo nuevamente',
                            icon: 'error',
                            confirmButtonText: 'Aceptar'
                        })
                    </script>
            <?php } ?>

            <div class="card-header text-center fs-3">
                Iniciar Sesión
            </div>
            <div class="card-body">
                <form class="mt-3" action="" method="POST" id="form">
                    <!-- User input -->
                    <div class="form-outline mb-4">
                        <input type="user" id="user" name="user" class="form-control" autocomplete="off"/>
                        <label class="form-label">Usuario</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <div class="input-group">
                            <input type="password" id="password" name="password" class="form-control" autocomplete="off"/>
                            <div class="input-group-append">
                                <button id="show_password" class="btn btn-primary gradient-custom-2" type="button" onclick="mostrarPassword()"> <span id="iconPass" class="fa-solid fa-eye-slash"></span> </button>
                            </div>
                        </div>
                        <label class="form-label">Contraseña</label>
                    </div>                    

                    <!-- Submit button -->
                    <div class="col text-center">
                        <input type="submit" class="btn btn-primary btn-block mb-4 center-block" value="Ingresar">
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

</div>

<?php include('./views/partials/footer.php') ?> 