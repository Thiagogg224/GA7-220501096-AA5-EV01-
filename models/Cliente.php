<?php
    require_once("connection/Connection.php");
    class Cliente{
        public static function login($usuario, $contraseña) {
            $db= new Connection();
            $query = "SELECT * FROM cliente WHERE usuario = '$usuario' AND contraseña = '$contraseña'";
            $resultado = $db->query($query);
            $datos = [];
            if ($resultado->num_rows===1) {
                while($row = $resultado->fetch_assoc()) {
                    $datos[] = [
                        'id_cliente' => $row['id_cliente'],
                        'usuario' => $row['usuario'],
                        'contraseña' => $row['contraseña'],
                        'correo' =>$row['correo']
                    ];
                }//end while
                return $datos;
            }//end if
            return $datos;
        }//end getAll

        public static function getAll() {
            $db= new Connection();
            $query = "SELECT * FROM cliente";
            $resultado = $db->query($query);
            $datos = [];
            if ($resultado->num_rows) {
                while($row = $resultado->fetch_assoc()) {
                    $datos[] = [
                        'id_cliente' => $row['id_cliente'],
                        'usuario' => $row['usuario'],
                        'contraseña' => $row['contraseña'],
                        'correo' =>$row['correo']
                    ];
                }//end while
                return $datos;
            }//end if
            return $datos;
        }//end getAll

        public static function getWhere($id_cliente) {
            $db= new Connection();
            $query = "SELECT * FROM cliente where id_cliente=$id_cliente";
            $resultado = $db->query($query);
            $datos = [];
            if ($resultado->num_rows) {
                while($row = $resultado->fetch_assoc()) {
                    $datos[] = [
                        'id_cliente' => $row['id_cliente'],
                        'usuario' => $row['usuario'],
                        'contraseña' => $row['contraseña'],
                        'correo' =>$row['correo']
                    ];
                }//end while
                return $datos;
            }//end if
            return $datos;
        }//end getWhere


        public static function insert($usuario,$contraseña,$correo) {
            $db = new Connection();
            $query = "INSERT INTO cliente (usuario, contraseña, correo) VALUES('".$usuario."', '".$contraseña."', '".$correo."')";
            $db->query($query);
            if ($db->affected_rows) {
                return TRUE;
            }//end if
            return FALSE;
        }//end insert

        public static function update($id_cliente, $usuario,$contraseña,$correo) {
            $db = new Connection();
            $query = "UPDATE cliente SET usuario='".$usuario."', contraseña='".$contraseña."', correo='".$correo."' WHERE id_cliente=$id_cliente";
            $db->query($query);
            if ($db->affected_rows) {
                return TRUE;
            }//end if
            return FALSE;
        }//end update

        public static function delete($id_cliente) {
            $db = new Connection();
            $query = "DELETE FROM cliente WHERE id_cliente=$id_cliente";
            $db->query($query);
            if ($db->affected_rows) {
                return TRUE;
            }//end if
            return FALSE;
        }//end delete
    }//end class Cliente

?>