<?php
class MatriculaModel extends Model
{
    public function getAllMatriculas()
    {
        $stmt = $this->db->prepare("SELECT * FROM matricula");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // CREATE matricula
    public function createMatricula(
        $id_estudiante,
        $id_apoderado,
        $id_periodo_anual,
        $vive_padre,
        $vive_madre,
        $parentesco_estudiante,
        $id_usuario,
        $id_situacion_matricula,
        $fecha_matricula,
        $fecha_actualizacion,
        $fecha_retiro,
        $nombre_IE,
        $codigo_modular,
        $instancia_ugel,
        $id_seccion,
        $id_turno,
        $id_forma,
        $id_modalidad,
        $id_sit_fin_anio_lectivo,
        $id_sit_fin_rec_pedagoica,
        $id_estado_matricula,
        $estado = true
    ) {
        $sql = "INSERT INTO matricula (
        id_estudiante,
        id_apoderado,
        id_periodo_anual,
        vive_padre,
        vive_madre,
        parentesco_estudiante,
        id_usuario,
        id_situacion_matricula,
        fecha_matricula,
        fecha_actualizacion,
        fecha_retiro,
        nombre_IE,
        codigo_modular,
        instancia_ugel,
        id_seccion,
        id_turno,
        id_forma,
        id_modalidad,
        id_sit_fin_anio_lectivo,
        id_sit_fin_rec_pedagoica,
        id_estado_matricula,
        estado
    ) VALUES (
        :id_estudiante,
        :id_apoderado,
        :id_periodo_anual,
        :vive_padre,
        :vive_madre,
        :parentesco_estudiante,
        :id_usuario,
        :id_situacion_matricula,
        :fecha_matricula,
        :fecha_actualizacion,
        :fecha_retiro,
        :nombre_IE,
        :codigo_modular,
        :instancia_ugel,
        :id_seccion,
        :id_turno,
        :id_forma,
        :id_modalidad,
        :id_sit_fin_anio_lectivo,
        :id_sit_fin_rec_pedagoica,
        :id_estado_matricula,
        :estado
    )";

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(':id_estudiante', $id_estudiante, PDO::PARAM_INT);
        $stmt->bindParam(':id_apoderado', $id_apoderado, PDO::PARAM_INT);
        $stmt->bindParam(':id_periodo_anual', $id_periodo_anual, PDO::PARAM_INT);
        $stmt->bindParam(':vive_padre', $vive_padre, PDO::PARAM_BOOL);
        $stmt->bindParam(':vive_madre', $vive_madre, PDO::PARAM_BOOL);
        $stmt->bindParam(':parentesco_estudiante', $parentesco_estudiante, PDO::PARAM_STR);
        $stmt->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
        $stmt->bindParam(':id_situacion_matricula', $id_situacion_matricula, PDO::PARAM_INT);
        $stmt->bindParam(':fecha_matricula', $fecha_matricula, PDO::PARAM_STR);
        $stmt->bindParam(':fecha_actualizacion', $fecha_actualizacion, PDO::PARAM_STR);
        $stmt->bindParam(':fecha_retiro', $fecha_retiro, PDO::PARAM_STR);
        $stmt->bindParam(':nombre_IE', $nombre_IE, PDO::PARAM_STR);
        $stmt->bindParam(':codigo_modular', $codigo_modular, PDO::PARAM_STR);
        $stmt->bindParam(':instancia_ugel', $instancia_ugel, PDO::PARAM_STR);
        $stmt->bindParam(':id_seccion', $id_seccion, PDO::PARAM_INT);
        $stmt->bindParam(':id_turno', $id_turno, PDO::PARAM_INT);
        $stmt->bindParam(':id_forma', $id_forma, PDO::PARAM_INT);
        $stmt->bindParam(':id_modalidad', $id_modalidad, PDO::PARAM_INT);
        $stmt->bindParam(':id_sit_fin_anio_lectivo', $id_sit_fin_anio_lectivo, PDO::PARAM_INT);
        $stmt->bindParam(':id_sit_fin_rec_pedagoica', $id_sit_fin_rec_pedagoica, PDO::PARAM_INT);
        $stmt->bindParam(':id_estado_matricula', $id_estado_matricula, PDO::PARAM_INT);
        $stmt->bindParam(':estado', $estado, PDO::PARAM_BOOL);

        $stmt->execute();

        // Retornar el ID del nuevo registro si es necesario
        return $this->db->lastInsertId();
    }
}
