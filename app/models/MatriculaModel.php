<?php
class MatriculaModel extends Model
{
    public function getAllMatriculas()
    {
        $stmt = $this->db->prepare("SELECT * FROM matricula");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getMatriculasByParams($id_anio, $id_nivel, $id_grado, $id_seccion = null)
    {
        // Base de la consulta
        $query = "SELECT * FROM vista_matricula WHERE 1=1";
        $params = [];
    
        // Agregar condiciones dinámicas según los parámetros recibidos
        if (!empty($id_anio)) {
            $query .= " AND periodo_academico_id = :periodo_academico_id";
            $params[':periodo_academico_id'] = $id_anio;
        }
        
        if (!empty($id_nivel)) {
            $query .= " AND nivel_id = :nivel_id";
            $params[':nivel_id'] = $id_nivel;
        }
        
        if (!empty($id_grado)) {
            $query .= " AND grado_id = :grado_id";
            $params[':grado_id'] = $id_grado;
        }
        
        if (!empty($id_seccion)) {
            $query .= " AND seccion_id = :seccion_id";
            $params[':seccion_id'] = $id_seccion;
        }
        
        // Preparar la consulta
        $stmt = $this->db->prepare($query);
    
        // Asignar los valores a los placeholders
        foreach ($params as $key => $value) {
            $stmt->bindValue($key, $value, PDO::PARAM_INT);
        }
    
        // Ejecutar la consulta
        $stmt->execute();
    
        // Retornar los resultados
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    


    public function getMatriculasByStudentFromView($id_estudiante)
    {
        $stmt = $this->db->prepare("SELECT * FROM vista_matricula WHERE id_estudiante = :id_estudiante ORDER BY periodo_academico ASC");
        $stmt->bindParam(':id_estudiante', $id_estudiante, PDO::PARAM_INT);
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


    public function getMatriculasByYears()
    {
        $stmt = $this->db->prepare("SELECT pa.nombre_año AS Año, COUNT(m.id_matricula) AS Estudiantes_Matriculados
                                    FROM matricula m
                                    JOIN periodo_anual pa ON m.id_periodo_anual = pa.id_periodo_anual
                                    WHERE m.estado = true
                                    GROUP BY pa.nombre_año
                                    ORDER BY pa.nombre_año ASC;
                                    ");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getGradeAndSectionsByYearId($id_periodo_anual)
    {
        $stmt = $this->db->prepare("SELECT 
                                        g.nombre_grado AS Grado,
                                        n.nombre_nivel AS Nivel,
                                        COUNT(m.id_matricula) AS Estudiantes_Matriculados
                                    FROM matricula m
                                    JOIN periodo_anual pa ON m.id_periodo_anual = pa.id_periodo_anual
                                    JOIN seccion s ON m.id_seccion = s.id_seccion
                                    JOIN grado g ON s.id_grado = g.id_grado
                                    JOIN nivel n ON g.id_nivel = n.id_nivel
                                    WHERE pa.id_periodo_anual = :id_periodo_anual -- Aquí, ? es el año ingresado
                                    AND m.estado = true
                                    GROUP BY g.nombre_grado, n.nombre_nivel
                                    ORDER BY n.nombre_nivel, g.nombre_grado;

                                    ");

        $stmt->bindParam(':id_periodo_anual', $id_periodo_anual, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
