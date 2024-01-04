<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1><?php echo $titulo ;?></h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url() ;?>">Inicio</a></li>
            <li class="breadcrumb-item active"><?php echo $titulo ;?></li>
        </ol>
        </div>
        <div class="col-sm-4">
        <br>
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
            Archivo
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="<?php echo base_url() ;?>/SystemUsers"><i class="fa fa-check"></i> - Usuarios Activos</a>
        </div>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>Email</th>
                    <th> </th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($users as $user):?>
                    <tr>
                        <td><?php echo $user['id'] ;?></td>
                        <td><?php echo $user['name'] ;?></td>
                        <td><?php echo $user['username'] ;?></td>
                        <td><?php echo $user['email'] ;?></td>
                        <td style="text-align: center;">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            Opciones
                            </button>
                            <div class="dropdown-menu">
                            <a class="dropdown-item reacUser" href="#" data-toggle="modal" data-target="#modal-default" data-id="<?php echo $user['id'] ;?>"><i class="fa fa-check"></i> - Reactivar Usuario</a>
                            </div>

                        </td>
                    </tr>
                <?php endforeach ;?>
                </tbody>
            </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->



<div class="modal fade" id="modal-default">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
    <div class="modal-body">
    
    </div>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->