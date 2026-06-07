<?php
// Este archivo actúa como puente

require_once('Config/database.php');
//*
class Conexion extends Database { // "Hereda" de la clase Database
    
    public function getUsuario($usuario, $password) {
        // Usamos la conexión ($this->con) que heredamos de arriba
        $query = $this->con->query(
            "SELECT id, usuario, nombre FROM usuarios WHERE usuario='$usuario' AND password='$password'"
        );
        
        if ($query && $query->num_rows > 0) {
            return $query->fetch_assoc();
        }
        return null;
    }
}
    //*/
?>
