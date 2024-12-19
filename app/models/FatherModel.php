<?php
class FatherModel extends Model
{
    public function getAllFathers()
    {
        $stmt = $this->db->prepare("SELECT * FROM padre");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getFatherByIdFromView($id_padre)
    {
        $stmt = $this->db->prepare("SELECT * FROM vista_padre WHERE id_padre = :id_padre");
        $stmt->bindParam(':id_padre', $id_padre, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // CREATE padre
    public function createFather(
        $apellido_paterno,
        $apellido_materno,
        $nombres,
        $vive,
        $fecha_nacimiento,
        $id_escolaridad,
        $ocupacion,
        $vive_con_estudiante,
        $religion
    ) {
        $sql = "INSERT INTO padre (
            apellido_paterno,
            apellido_materno,
            nombres,
            vive,
            fecha_nacimiento,
            id_escolaridad,
            ocupacion,
            vive_con_estudiante,
            religion
        ) VALUES (
            :apellido_paterno,
            :apellido_materno,
            :nombres,
            :vive,
            :fecha_nacimiento,
            :id_escolaridad,
            :ocupacion,
            :vive_con_estudiante,
            :religion
        )";
    
        $stmt = $this->db->prepare($sql);
    
        $stmt->bindParam(':apellido_paterno', $apellido_paterno, PDO::PARAM_STR);
        $stmt->bindParam(':apellido_materno', $apellido_materno, PDO::PARAM_STR);
        $stmt->bindParam(':nombres', $nombres, PDO::PARAM_STR);
        $stmt->bindParam(':vive', $vive, PDO::PARAM_BOOL);
        $stmt->bindParam(':fecha_nacimiento', $fecha_nacimiento, PDO::PARAM_STR);
        $stmt->bindParam(':id_escolaridad', $id_escolaridad, PDO::PARAM_INT);
        $stmt->bindParam(':ocupacion', $ocupacion, PDO::PARAM_STR);
        $stmt->bindParam(':vive_con_estudiante', $vive_con_estudiante, PDO::PARAM_BOOL);
        $stmt->bindParam(':religion', $religion, PDO::PARAM_STR);
    
        $stmt->execute();
    
        // Retornar el ID del nuevo padre si es necesario
        return $this->db->lastInsertId();
    }
    
}
