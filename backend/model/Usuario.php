<?php
    require_once('backend/core/conexionBD.php');
    
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

       /* public function actualizar(){
            $this->query = "UPDATE personas 
                            SET nombre = :nombre,
                                apellido = :apellido,
                                password  = :password,
                                telefono = :telefono
                            WHERE persona_id = :persona_id ";

            $this->ejecutar( array(
                ':nombre' => $this->nombre,
                ':apellido' => $this->apellido,
                ':password' => $this->password,
                ':telefono' => $this->telefono,
                ':persona_id' => $this->persona_id
            ));
        }*/

    }

?>