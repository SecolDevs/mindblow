<?php 
//LLAMADA A ARCHIVO PATHS
require_once($_SERVER['DOCUMENT_ROOT'] . '/mindblow/path.php');

class usuario_Model{
    
    function __construct(){
        require_once(MODEL_PATH . 'conexion.php');
        $this->db = Conexion::conectar();
    }

    //LISTAR USUARIOS
    public function listar_Usuarios($datos){
        if ($datos!=null) {
            $query = $this->db->prepare("SELECT * FROM usuario WHERE email_usuario = :email_Usuario");
            $query -> bindParam(':email_Usuario', $datos["email_Usuario"], PDO::PARAM_STR);
            $query->execute();
            return $query->fetch();
            $query = null;
        }else{
            $query = $this->db->prepare("SELECT * FROM usuario");
            $query->execute();
            return $query->fetchAll();
            $query = null;
        }
    }

    //INSERTAR USUARIOS
    public function insertar_Usuarios($datos){
        if ($datos!=null) {
            $query = $this->db->prepare("INSERT INTO usuario (nombres_Usuario, apellidos_Usuario, email_Usuario, password_Usuario, telefono_Usuario, direccion_Usuario, tipo_Usuario, estado_Usuario) VALUES (:nombres_Usuario, :apellidos_Usuario, :email_Usuario, :password_Usuario, :telefono_Usuario, :direccion_Usuario, 'DIOS', 'Activo')");
            $query -> bindParam(':nombres_Usuario', $datos["nombres_Usuario"], PDO::PARAM_STR);
            $query -> bindParam(':apellidos_Usuario', $datos["apellidos_Usuario"], PDO::PARAM_STR);
            $query -> bindParam(':email_Usuario', $datos["email_Usuario"], PDO::PARAM_STR);
            $query -> bindParam(':password_Usuario', $datos["password_Usuario"], PDO::PARAM_STR);
            $query -> bindParam(':telefono_Usuario', $datos["telefono_Usuario"], PDO::PARAM_STR);
            $query -> bindParam(':direccion_Usuario', $datos["direccion_Usuario"], PDO::PARAM_STR);
            
            return $query->execute() ? "Correcto" : "Incorrecto ";
        }
    }

    
}

?>