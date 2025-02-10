<?php
require_once "../config/conecction.php";
class Persona extends Connection
{
    public static function mostrarDatos()
    {
        try {
            $sql = "SELECT * FROM estatus_t WHERE id = 1";
            $stmt = Connection::getConnection()->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }


    // public static function mostrarDatos()
    // {
    //     try {
    //         // Realizamos un JOIN entre persona y estatus para obtener ambos datos en una sola consulta
    //         $sql = "SELECT persona.id, persona.nombres, persona.email, persona.edad, estatus.estatus_actividad
    //                 FROM persona
    //                 LEFT JOIN estatus ON persona.id = estatus.persona_id"; // JOIN correcto

    //         $stmt = Connection::getConnection()->prepare($sql);
    //         $stmt->execute();
    //         $result = $stmt->fetchAll(PDO::FETCH_ASSOC); // Usamos FETCH_ASSOC para obtener resultados como un arreglo asociativo
    //         return $result; // Devuelve los resultados como un arreglo
    //     } catch (PDOException $e) {
    //         echo "Error: " . $e->getMessage();
    //     }
    // }





    public static function obtenerDatoId($id)
    {
        try {
            $sql = "SELECT * FROM persona WHERE id = :id";
            $stmt = Connection::getConnection()->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }
    public static function guardarDato($data)
    {
        try {
            $sql = "INSERT INTO persona (nombres, email, edad) VALUES (:nombres, :email, :edad)";
            $stmt = Connection::getConnection()->prepare($sql);
            $stmt->bindParam(':nombres', $data['nombres']);
            $stmt->bindParam(':email', $data['email']);
            $stmt->bindParam(':edad', $data['edad']);
            $stmt->execute();
            return true;
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }
    public static function actualizarDato($data)
    {
        try {
            $sql = "UPDATE persona SET nombres = :nombres, email = :email, edad = :edad WHERE id = :id";
            $stmt = Connection::getConnection()->prepare($sql);
            $stmt->bindParam(':nombres', $data['nombres']);
            $stmt->bindParam(':email', $data['email']);
            $stmt->bindParam(':edad', $data['edad']);
            $stmt->bindParam(':id', $data['id']);
            $stmt->execute();
            return true;
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }
    public static function eliminarDato($id)
    {
        try {
            $sql = "DELETE FROM persona WHERE id = :id";
            $stmt = Connection::getConnection()->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return true;
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }
}
