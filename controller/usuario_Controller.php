<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/mindblow/path.php');
require_once(MODEL_PATH . 'usuario_Model.php');

class usuario_Controller{
    
    function __construct(){
        $this->usuario_Mod = new usuario_Model;
    }
    
    public function sesion(){
        if (isset($_POST['login'])) {
            echo $_POST['email_Usuario'] . "<br>" . $_POST['password_Usuario'] . "<br>";
            //if (preg_match('/^[ a-zA-Z0-9@ ]+$/', $_POST['email_Usuario']) && preg_match('/^[ a-zA-Z0-9@ ]+$/', $_POST['password_Usuario'])) {
                $datos = array("email_Usuario" => $_POST['email_Usuario']);
                $respuesta = $this->usuario_Mod->listar_Usuarios($datos);
                if ($respuesta['email_Usuario'] == $_POST['email_Usuario'] && $respuesta['password_Usuario'] == $_POST['password_Usuario'] && $respuesta['estado_Usuario'] == 'Activo'){
                    session_start();
                    $_SESSION['Ok'];
                    echo "Correcto";
                }else{
                    echo "Incorrecto";
                }
            //}
        }
    }

    public function insert_User(){
        if (isset($_POST['usuario'])) {
            $datos = array("nombres_Usuario" => $_POST['nombres_Usuario'],
            "apellidos_Usuario" => $_POST['apellidos_Usuario'],
            "email_Usuario" => $_POST['email_Usuario'],
            "password_Usuario" => $_POST['password_Usuario'],
            "telefono_Usuario" => $_POST['telefono_Usuario'],
            "direccion_Usuario" => $_POST['direccion_Usuario']
        );
            $respuesta = $this->usuario_Mod->insertar_Usuarios($datos);
            echo $datos['nombres_Usuario'];
            if($respuesta == "Correcto"){
                echo "Insertado Correctamente";
            }else{
                echo $respuesta;
            }
        }
    }

    public function insert_Repartidor(){
        if (isset($_POST['repartidor'])) {
            $datos = array("nombres_Usuario" => $_POST['nombres_Usuario'],
            "apellidos_Usuario" => $_POST['apellidos_Usuario'],
            "email_Usuario" => $_POST['email_Usuario'],
            "password_Usuario" => $_POST['password_Usuario'],
            "rut_Usuario" => $_POST['rut_Usuario'],
            "telefono_Usuario" => $_POST['telefono_Usuario'],
            "direccion_Usuario" => $_POST['direccion_Usuario']
        );
            $respuesta = $this->usuario_Mod->insertar_Repartidor($datos);
            if ($respuesta == "Correcto") {
                echo "Peticion Enviada Correctamente";
            }else {
                echo "Su peticion NO se pudo procesar, intente nuevamente.";
            }
        }else{

        }
    }

    public function insert_Empresa(){
        if (isset($_POST['empresa'])) {
            $datos = array("empresa_Usuario" => $_POST['empresa_Usuario'],
            "nombres_Usuario" => $_POST['nombres_Usuario'],
            "apellidos_Usuario" => $_POST['apellidos_Usuario'],
            "email_Usuario" => $_POST['email_Usuario'],
            "password_Usuario" => $_POST['password_Usuario'],
            "nit_Usuario" => $_POST['nit_Usuario'],
            "telefono_Usuario" => $_POST['telefono_Usuario'],
            "direccion_Usuario" => $_POST['direccion_Usuario'],
            "img_Usuario" =>  '/mindblow/assets/images/empresas'. $_POST['img_Usuario'],
            "hora_Apertura" => $_POST['hora_Apertura'],
            "hora_Cierre" => $_POST['hora_Cierre']
        );
            $respuesta = $this->usuario_Mod->insertar_Empresa($datos);
            if ($respuesta == "Correcto") {
                echo "Peticion Enviada Correctamente";
            }else {
                echo "Su peticion NO se pudo procesar, intente nuevamente.";
            }
        }else{

        }
    }
    
}

?>