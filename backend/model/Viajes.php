<?php
    require_once('backend/core/conexionBD.php');
    
    class Viajes extends ConexionPDO{
        
        public $id_viajes;
        public $fecha_hora_inicial;
        public $fecha_hora_final;
        public $id_pasajero;
        public $id_conductor;
        public $punto_inicial;
        public $punto_final;

        // Metodos
        /*public function loguear($name, $pass){
            $this->query = "SELECT * FROM usuario P INNER JOIN
            rol R ON R.id_rol = P.id_rol WHERE P.email = :email AND P.contraseña = :password;";
            $this->obtenerRows(array(
                ':email' => $name,
                ':password' => $pass
            ));
            return $this->rows;
        }*/

        public function showViajes($id_usuario) {
            $this->query = "SELECT V.id_viajes, V.fecha_hora_inicial, V.fecha_hora_final,V.id_pasajero,V.id_conductor, V.punto_inicial, V.punto_final   FROM viajes V WHERE viajes.id_pasajero = :id_usurio";
            $this->obtenerRows(array(
            ':id_viajes' => $id_viajes;
            ':fecha_hora_inicial' => $fecha_hora_inicial;
             ':fecha_hora_final'  => $fecha_hora_final;
             ':id_pasajero' => $id_pasajero;
             ':id_conductor' => $id_conductor;
             ':punto_inicial' => $punto_inicial;
             ':punto_final' =>  $punto_final;
            ));
            return $this->rows;
        }

       

    }

?>