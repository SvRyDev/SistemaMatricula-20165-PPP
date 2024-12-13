<?php
class MatriculaModel extends Model
{
    public function getAllMatriculas()
    {
        $stmt = $this->db->prepare("SELECT * FROM matricula");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // CREATE vacuna_estudiante
    public function createMatricula(
        $▓,
        $▓
    ) {
        $sql = "INSERT INTO estudiante_enfermedad (
        ▓,
        ▓
        ) VALUES (
            :▓,
            :▓
        )";

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':▓', $▓, PDO::PARAM_INT);
        $stmt->execute();

        // Retornar el ID del nuevo padre si es necesario
        return $this->db->lastInsertId();
    }
}
