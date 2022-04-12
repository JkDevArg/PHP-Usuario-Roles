<?php

require_once "Conexion.php";

class UsuarioModel{
    static public function MostrarUsuariosModel($tabla){
        $respuesta = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $respuesta->execute();
        return $respuesta->fetchAll();
        $respuesta->close();
        $respuesta = null;
    }

    static public function CrearUsuarioModel($datos, $tabla){
        $respuesta = Conexion::conectar()->prepare("INSERT INTO $tabla (nom_perfil, nom_usuario, foto, correo, password) VALUES (:nom_perfil, :nom_usuario, :foto, :correo, :password)");
        $respuesta->bindParam(":nom_perfil", $datos["nom_perfil"], PDO::PARAM_STR);
        $respuesta->bindParam(":nom_usuario", $datos["nom_usuario"], PDO::PARAM_STR);
        $respuesta->bindParam(":foto", $datos["foto"], PDO::PARAM_STR);
        $respuesta->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
        $respuesta->bindParam(":password", $datos["password"], PDO::PARAM_STR);
        if ($respuesta->execute()) {
            return "ok";
        } else {
            return "error";
        }
        $respuesta->close();
        $respuesta = null;
    }
}

?>