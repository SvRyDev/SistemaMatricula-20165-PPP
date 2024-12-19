<?php
class VacunasEstModel extends Model
{
    public function getAllVacunas()
    {
        $stmt = $this->db->prepare("SELECT * FROM estudiante_vacuna");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getVacunasFromStudent($estudiante_id){
        $stmt = $this->db->prepare("SELECT * FROM estudiante_vacuna WHERE estudiante_id = :estudiante_id ORDER BY edad DESC");
        $stmt->bindParam(':estudiante_id', $estudiante_id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // CREATE vacuna_estudiante
    public function createVacunaEst(
        $estudiante_id,
        $edad,
        $descripcion
    ) {
        $sql = "INSERT INTO estudiante_vacuna (
        estudiante_id,
        edad,
        descripcion
        ) VALUES (
            :estudiante_id,
            :edad,
            :descripcion
        )";

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(':estudiante_id', $estudiante_id, PDO::PARAM_INT);
        $stmt->bindParam(':edad', $edad, PDO::PARAM_INT);
        $stmt->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);

        $stmt->execute();

        // Retornar el ID del nuevo padre si es necesario
        return $this->db->lastInsertId();
    }
}
