<div class='row'>
    <div class="col-4">
        <h4>Crear Usuario</h4>
    </div>
    <div class="col-4">

    </div>
    <div class="col-4">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="col-12">
        <hr>
    </div>
</div>
<form method="POST" action="<?php echo base_url();?>/SystemUsers/SaveUser" autocomplete="off">
    <div class="card-body">
        <!-- Mensajes de Verificación -->
        <div id="errormensaje" class="alert alert-danger ocultar" role="alert">
            Las contraseñas no coinciden, por favor, verificar.
        </div>
        <!-- Fin Mensajes de Verificación -->
        <div class='row'>
            <div class="col-6">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>
            </div>            
            <div class="col-6">
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" name="password" id="password" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="conpassword">Confirmar Contraseña</label>
                    <input type="password" class="form-control" name="conpassword" id="conpassword" required>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
    <div class='row'>
        <div class="col-4">

        </div>
        <div class="col-4">

        </div>
        <div class="col-4">
            <div class="card-footer">
                <button type="submit" id="btnerror01" class="btn btn-primary guardando">Crear Usuario</button>
            </div>
        </div>
    </div>
</form>

<script>
    $('#conpassword').keyup(function(){
      var pass_1 = $('#password').val();
      var pass_2 = $('#conpassword').val();
      if(pass_1 != pass_2 ){
        // Si las constraseñas no coinciden mostramos un mensaje
        document.getElementById("errormensaje").classList.add("mostrar");
        document.getElementById("btnerror01").classList.add("ocultar");
        $("form").keypress(function(e) {
            if (e.which == 13) {
                return false;
            }
        })
      }else{
          // Contraseñas son iguales
          document.getElementById("errormensaje").classList.remove("mostrar");
          document.getElementById("btnerror01").classList.remove("ocultar");
      }
    });
</script>

<script src="<?php echo base_url();?>public/admin/dist/js/mensajes.js"></script>