<div class="content-wrapper" style="min-height: 717px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Administrar Usuarios</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <button type="button" class="btn btn-success crear-usuarios" data-toggle="modal" data-target="#modal-crear-usuarios">
                            <i class="fas fa-user-plus"></i> Crear Usuario
                        </button><br>
                    </div><br>
                    <div class="card-body">
                        <table class="table table-borderer table-striped dt-responsive tablaperfil" width="100%">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Nombre</th>
                                    <th>Usuario</th>
                                    <th>Foto</th>
                                    <th>F. Creación</th>
                                    <th>Correo</th>
                                    <th>Rol</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($usuarios as $key => $value) {
                                ?>
                                    <tr>
                                        <td><?php echo ($key + 1); ?></td>
                                        <td><?php echo $value["nombre"]; ?></td>
                                        <td><?php echo $value["usuario"]; ?></td>
                                        <td><img src="<?php echo $value["foto"]; ?>" class="rounded-circle" width="25px" height="25px" alt="<?php echo $value["usuario"]; ?>"></td>
                                        <td><?php echo $value["f_registro"]; ?></td>
                                        <td><?php echo $value["correo"]; ?></td>
                                        <td><?php echo $value["rol"]; ?></td>
                                        <td><button class="btn btn-info text-white btn-sm"><?php echo $value["estado"]; ?></button></td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-warning btn-sm">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </button>
                                                <button class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <small class="badge badge-info"> <i class="fas fa-info-circle"></i> Solo se mostraran los usuarios activos</small>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Modal para crear usuario -->
<div class="modal fade" id="modal-crear-usuarios" tabindex="-1" role="dialog" aria-labelledby="modalUsuario" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content text-center">
            <div class="modal-header modal-border">
                <h2 class="modal-title"><i class="fas fa-user text-success"></i>  Crear Usuario</h2>
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <input name="nom_perfil" class="form-control" type="text" placeholder="Nombre" minlength="3" maxlength="15" required>
                    </div>
                    <div class="form-group">
                        <input name="nom_usuario" type="text" class="form-control" placeholder="Usuario" minlength="3" maxlength="30" required>
                    </div>
                    <div class="form-group">
                        <input name="correo" type="email" class="form-control" placeholder="Correo" minlength="3" maxlength="50" required>
                    </div>
                    <div class="form-group">
                        <select name="rol_usu" class="form-control">
                            <option value="">Seleccione un rol</option>
                            <option value="1">Administrador</option>
                            <option value="2">Usuario</option>
                            <option value="3">Moderador</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input name="password" type="password" class="form-control" placeholder="Contraseña" required>
                    </div>
                    <div class="form-group">
                        <input name="c_password" type="password" class="form-control" placeholder="Confirmar Contraseña" required>
                    </div>
                    <div class="form-group">
                        <div class="btn btn-default btn-file">
                            <i class="fas fa-paperclip"></i> Adjuntar Imagen
                            <input type="file" name="imagenUsuario">
                        </div>
                        <img class="previsualizarImgPerfil img-fluid p-3" width="125" height="125">
                        <p class="help-block small badge badge-info">Dimensiones: 480px * 382px | Peso Max: 2MB | Formato: JPG o PNG</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-dark btn-flat">Reiniciar</button>
                        <button type="submit" class="btn ripple-effect btn-primary btn-flat">Guardar</button>
                    </div>
                </form>
            </div>
            <?php 
                $crearUsuario = new UsuariosController();
                $crearUsuario -> CrearUsuario();
            ?>
        </div>
    </div>
</div>