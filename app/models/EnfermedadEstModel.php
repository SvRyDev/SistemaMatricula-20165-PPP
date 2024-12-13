<?php
class EnfermedadEstModel extends Model
{
    public function getAllEnfermedades()
    {
        $stmt = $this->db->prepare("SELECT * FROM estudiante_enfermedad");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // CREATE vacuna_estudiante
    public function createEnfermedadEst(
        $estudiante_id,
        $edad,
        $descripcion
    ) {
        $sql = "INSERT INTO estudiante_enfermedad (
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
