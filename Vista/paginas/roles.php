<div class="content-wrapper" style="min-height: 717px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Administrar Roles</h1>
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
                            <i class="fas fa-user-shield"></i> Crear Rol
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
                                    <th>Rol</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Modal para crear usuario -->
<div tabindex="-1" class="modal pmd-modal fade" id="modal-crear-usuarios" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header pmd-modal-border">
                <h2 class="modal-title">Crear Usuario</h2>
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="nom_perfil"><i class="fas fa-user"></i> Nombre</label>
                        <input name="nom_perfil" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label for="nom_usuario"><i class="fas fa-user-shield"></i> Usuario</label>
                        <input name="nom_usuario" type="text" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="password"><i class="fas fa-user-edit"></i> Rol</label>
                    </div>
                    <div class="form-group">
                        <label for="password"><i class="fas fa-lock"></i> Contraseña</label>
                        <input name="password" type="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password"><i class="fas fa-lock"></i> Confirmar Contraseña</label>
                        <input name="c_password" type="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <div class="btn btn-default btn-file">
                            <i class="fas fa-paperclip"></i> Adjuntar Imagen
                            <input type="file" name="subirImgPerfil">
                        </div>
                        <img class="previsualizarImgPerfil img-fluid py-2" width="200" height="200">
                        <p class="help-block small">Dimensiones: 480px * 382px | Peso Max: 2MB | Formato: JPG o PNG</p>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-dark btn-flat" type="button">Reset</button>
                <button data-dismiss="modal" class="btn ripple-effect btn-primary btn-flat" type="submit">Guardar</button>
            </div>
        </div>
    </div>
</div>