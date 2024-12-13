<?php
class DomicilioEstModel extends Model
{
    public function getAllDomicilios()
    {
        $stmt = $this->db->prepare("SELECT * FROM domicilio_estudiante");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // CREATE vacuna_estudiante
    public function createDomicilioEst(
        $estudiante_id,
        $id_periodo_anual,
        $direccion,
        $lugar,
        $departamento,
        $provincia,
        $distrito,
        $telefono
    ) {
        $sql = "INSERT INTO domicilio_estudiante (
        estudiante_id,
        id_periodo_anual,
        direccion,
        lugar,
        departamento,
        provincia,
        distrito,
        telefono
        ) VALUES (
            :estudiante_id,
            :id_periodo_anual,
            :direccion,
            :lugar,
            :departamento,
            :provincia,
            :distrito,
            :telefono
        )";

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(':estudiante_id', $estudiante_id, PDO::PARAM_INT);
        $stmt->bindParam(':id_periodo_anual', $id_periodo_anual, PDO::PARAM_INT);
        $stmt->bindParam(':direccion', $direccion, PDO::PARAM_STR);
        $stmt->bindParam(':lugar', $lugar, PDO::PARAM_STR);
        $stmt->bindParam(':departamento', $departamento, PDO::PARAM_STR);
        $stmt->bindParam(':provincia', $provincia, PDO::PARAM_STR);
        $stmt->bindParam(':distrito', $distrito, PDO::PARAM_STR);
        $stmt->bindParam(':telefono', $telefono, PDO::PARAM_STR);

        $stmt->execute();

        // Retornar el ID del nuevo padre si es necesario
        return $this->db->lastInsertId();
    }
}
