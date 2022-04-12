<?php

class UsuariosController
{
    static public function MostrarUsuariosController()
    {
        $tabla = "usuarios";
        $respuesta = UsuarioModel::MostrarUsuariosModel($tabla);
        return $respuesta;
    }

    static public function CrearUsuario()
    {
        if (isset($_POST["nom_perfil"]) || isset($_POST["nom_usuario"]) || isset($_POST["nom_password"]) || isset($_POST["nom_email"])) {
            if (isset($_POST["password"]) == isset($_POST["c_password"])) {
                if (isset($_FILES["imagenUsuario"]["tmp_name"]) && !empty($_FILES["imagenUsuario"]["tmp_name"])) {
                    list($ancho, $alto) = getimagesize($_FILES["imagenUsuario"]["tmp_name"]);
                    $ImgAncho = 480;
                    $ImgAlto = 480;
                    $directorio = "Vista/imagenes/usuarios/";
                    if ($_FILES["imagenUsuario"]["type"] == "image/jpeg") {
                        $aleatorio = mt_rand(100, 999);
                        $ruta = $directorio . "/" . "img-" . $aleatorio . ".jpg";
                        $origen = imagecreatefromjpeg($_FILES["imagenUsuario"]["tmp_name"]);
                        $destino = imagecreatetruecolor($ImgAncho, $ImgAlto);
                        imagecopyresized($destino, $origen, 0, 0, 0, 0, $ImgAncho, $ImgAlto, $ancho, $alto);
                        imagejpeg($destino, $ruta);
                    } elseif ($_FILES["imagenUsuario"]["type"] == "image/png") {
                        $aleatorio = mt_rand(100, 999);
                        $ruta = $directorio . "/" . "img-" . $aleatorio . ".png";
                        $origen = imagecreatefrompng($_FILES["imagenUsuario"]["tmp_name"]);
                        $destino = imagecreatetruecolor($ImgAncho, $ImgAlto);
                        imagealphablending($destino, FALSE);
                        imagesavealpha($destino, TRUE);
                        imagecopyresized($destino, $origen, 0, 0, 0, 0, $ImgAncho, $ImgAlto, $ancho, $alto);
                        imagepng($destino, $ruta);
                    } else {
                        echo '<script>
                                swal({
                                    type: "error",
                                    title: "¡La imagen no es valida!",
                                    text: "¡Solo se permiten imagenes en formato JPG o PNG!",
                                    showConfirmButton: true,
                                    confirmButtonText: "Cerrar"
                                }).then(function(result){
                                    if(result.value){
                                        history.back();
                                    }
                                });
                                
                                </script>';
                        return;
                    }
                    $cifrarPassword = crypt($_POST["password"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
                    $datos = array(
                        "nom_perfil" => $_POST["nom_perfil"],
                        "nom_usuario" => $_POST["nom_usuario"],
                        "foto" => $ruta,
                        "correo" => $_POST["correo"],
                        "password" => $cifrarPassword,
                        "rol_usu" => $_POST["rol_usu"],
                        "fecha_reg" => date("Y-m-d"),
                    );
                    $tabla = "usuarios";
                    $respuesta = UsuarioModel::CrearUsuarioModel($tabla, $datos);
                }
            } else {
                echo '<script>
                        swal({
                            type: "error",
                            title: "¡Las contraseñas no coinciden!",
                            text: "¡Vuelve a intentarlo!",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar"
                        }).then(function(result){
                            if(result.value){
                                history.back();
                            }
                        });
                        
                        </script>';
                return;
            }
        } else {
            echo '<script>
                    swal({
                        type: "error",
                        title: "¡No pueden haber campos vacios!",
                        text: "¡Vuelve a intentarlo!",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                    }).then(function(result){
                        if(result.value){
                            history.back();
                        }
                    });
                    
                    </script>';
            return;
        }
    }
}
