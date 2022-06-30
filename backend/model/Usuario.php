<?php
    require_once('backend/core/conexionBD.php');
    
    class Usuario extends ConexionPDO{
        // Atributos
        public $id_usuario;
        public $nombre;
        public $email;
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

        /*public function RegistrarPasajero(){
            $this->query = "INSERT INTO personas (nombre, apellido, email, password, telefono, rol_id)
                            VALUES(:nombre, :apellido, :email, :password, :telefono, :rol_id)";

            $this->ejecutar( array(
                ':nombre' => $this->nombre,
                ':apellido' => $this->apellido,
                ':email' => $this->email,
                ':password' => $this->password,
                ':telefono' => $this->telefono,
                ':rol_id' => $this->rol_id
            ));
        }*/

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