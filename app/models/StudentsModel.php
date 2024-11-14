<?php
class StudentsModel extends Model {
    // Consulta para obtener todos los registros de la tabla estudiante
    public function getAllStudents() {
        $stmt = $this->db->prepare("SELECT * FROM estudiante");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    
    // Consulta para obtener un estudiante por su ID
    public function findStudentById($studentId) {
        $stmt = $this->db->prepare("SELECT estudiante_id, nombre, apellido, edad FROM estudiante WHERE estudiante_id = :studentId");
        $stmt->bindParam(':studentId', $studentId);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>