<?php
    require_once ($_SERVER['DOCUMENT_ROOT'].'/backend/core/conexionBD.php');
    
    class Usuario extends ConexionPDO{
        // Atributos
        public $id_usuario;
        public $nombre;
        public $email;
        public $telefono;
        public $identificacion;
        public $id_rol;
        public $password; //contraseña en BD

        // Metodos
        public function loguear($name, $pass){
            $this->query = "SELECT * FROM usuario P INNER JOIN
            rol R ON R.id_rol = P.id_rol WHERE P.email = :email AND P.contraseña = :password;";
            $this->obtenerRows(array(
                ':email' => $name,
                ':password' => $pass
            ));
            return $this->rows;
        }

        public function RegistrarPasajero(){
            $this->query = "INSERT INTO usuario (usuario.email,usuario.telefono, usuario.contraseña, usuario.identificacion, usuario.nombre, usuario.id_rol)
                            VALUES(:email,:telefono ,:password, :identificacion, :nombre, 1)";

            $this->ejecutar( array(
                ':nombre' => $this->nombre,
                ':telefono' => $this->telefono,
                ':email' => $this->email,
                ':password' => $this->password,
                ':identificacion' => $this->identificacion
                
            ));

            return true;
        }

        public function getInfoUser($id_user) {
            $this->query = "SELECT * FROM usuario WHERE usuario.id_usuario = :id;";
            $this->obtenerRows(array(
                ':id' => $id_user
            ));
            return $this->rows;
        }

        public function actualizarUser($id_usuario){
            $this->query = "UPDATE usuario SET usuario.email = :email, usuario.telefono = :telefono, 
            usuario.contraseña = :password, usuario.identificacion = :identificacion, usuario.nombre = :nombre WHERE usuario.id_usuario = :id_user";

            $this->ejecutar( array(
                ':nombre' => $this->nombre,
                ':email' => $this->email,
                ':password' => $this->password,
                ':telefono' => $this->telefono,
                ':identificacion' => $this->identificacion,
                ':id_user' => $id_usuario
            ));

            return true;
        }

        public function deleteUser($id_user) {
            $this->query = "DELETE FROM usuario where usuario.id_usuario = :id_user";

            $this->ejecutar( array(
                ':id_user' => $id_user
            ));

            return true;
        }

    }

?>