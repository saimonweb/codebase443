<div class='row'>
    <div class="col-4">
        <h4>Eliminar Usuario</h4>
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
<form method="POST" action="<?php echo base_url();?>/SystemUsers/DesactiveUser" autocomplete="off">
    <input type="hidden" name="iduser" value="<?php echo $user['id'] ;?>">
    <div class="card-body">
        <div class='row'>
            <div class="col-12 text-center">
                <h2>¿ Desea eliminar el usuario <?php echo $user['name'] ;?> ?</h2>
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
                <button type="submit"  class="btn btn-primary actualizando">Eliminar</button>
            </div>
        </div>
    </div>
</form>


<script src="<?php echo base_url();?>public/admin/dist/js/mensajes.js"></script>