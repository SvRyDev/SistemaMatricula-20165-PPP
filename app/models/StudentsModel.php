<?php
class StudentsModel extends Model
{
    // Consulta para obtener todos los registros de la tabla estudiante
    public function getAllStudents()
    {
        $stmt = $this->db->prepare("SELECT * FROM estudiante");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getDataStudents(){
        $stmt = $this->db->prepare("SELECT * FROM vista_estudiantes");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getStudentByParams($param){
        $param = '%' . $param . '%';
        $stmt = $this->db->prepare("SELECT * FROM vista_estudiantes WHERE 
        nombre_completo LIKE :nombre_completo OR 
        documento_identificacion LIKE :numero_ident
        ");
        $stmt->bindParam(':nombre_completo', $param, PDO::PARAM_STR);
        $stmt->bindParam(':numero_ident', $param, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    // 
    public function getCountStudentsActives()
    {
        $stmt = $this->db->prepare("SELECT COUNT(*) AS num_total_estudiantes FROM estudiante WHERE estado LIKE true");
        $stmt->execute();
        
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // CREATE student
    public function createStudent(
        $id_tipo_documento,
        $numero_documento,
        $apellido_paterno,
        $apellido_materno,
        $nombres,
        $id_sexo,
        $id_estado_civil,
        $nacimiento_registrado,
        $fecha_nacimiento,
        $id_pais,
        $departamento,
        $provincia,
        $distrito,
        $lengua_materna,
        $segunda_lengua,
        $religion,
        $numero_hermanos,
        $lugar_ocupacion,
        $id_tipo_discapacidad,
        $certificado_discapacidad,
        $alergias,
        $experiencias_traumaticas,
        $id_tipo_sangre,
        $id_padre,
        $id_madre,
        $esta_matriculado,
        $estado
    ) {
        $sql = "INSERT INTO estudiante (
            id_tipo_documento, 
            numero_documento, 
            apellido_paterno, 
            apellido_materno, 
            nombres, 
            id_sexo, 
            id_estado_civil, 
            nacimiento_registrado, 
            fecha_nacimiento, 
            id_pais, 
            departamento, 
            provincia, 
            distrito, 
            lengua_materna, 
            segunda_lengua, 
            religion, 
            numero_hermanos, 
            lugar_ocupacion, 
            id_tipo_discapacidad, 
            certificado_discapacidad, 
            alergias, 
            experiencias_traumaticas, 
            id_tipo_sangre, 
            id_padre, 
            id_madre, 
            esta_matriculado, 
            estado
        ) VALUES (
            :id_tipo_documento, 
            :numero_documento, 
            :apellido_paterno, 
            :apellido_materno, 
            :nombres, 
            :id_sexo, 
            :id_estado_civil, 
            :nacimiento_registrado, 
            :fecha_nacimiento, 
            :id_pais, 
            :departamento, 
            :provincia, 
            :distrito, 
            :lengua_materna, 
            :segunda_lengua, 
            :religion, 
            :numero_hermanos, 
            :lugar_ocupacion, 
            :id_tipo_discapacidad, 
            :certificado_discapacidad, 
            :alergias, 
            :experiencias_traumaticas, 
            :id_tipo_sangre, 
            :id_padre, 
            :id_madre, 
            :esta_matriculado, 
            :estado
        )";

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(':id_tipo_documento', $id_tipo_documento, PDO::PARAM_INT);
        $stmt->bindParam(':numero_documento', $numero_documento, PDO::PARAM_STR);
        $stmt->bindParam(':apellido_paterno', $apellido_paterno, PDO::PARAM_STR);
        $stmt->bindParam(':apellido_materno', $apellido_materno, PDO::PARAM_STR);
        $stmt->bindParam(':nombres', $nombres, PDO::PARAM_STR);
        $stmt->bindParam(':id_sexo', $id_sexo, PDO::PARAM_INT);
        $stmt->bindParam(':id_estado_civil', $id_estado_civil, PDO::PARAM_INT);
        $stmt->bindParam(':nacimiento_registrado', $nacimiento_registrado, PDO::PARAM_BOOL);
        $stmt->bindParam(':fecha_nacimiento', $fecha_nacimiento, PDO::PARAM_STR);
        $stmt->bindParam(':id_pais', $id_pais, PDO::PARAM_INT);
        $stmt->bindParam(':departamento', $departamento, PDO::PARAM_STR);
        $stmt->bindParam(':provincia', $provincia, PDO::PARAM_STR);
        $stmt->bindParam(':distrito', $distrito, PDO::PARAM_STR);
        $stmt->bindParam(':lengua_materna', $lengua_materna, PDO::PARAM_INT);
        $stmt->bindParam(':segunda_lengua', $segunda_lengua, PDO::PARAM_INT);
        $stmt->bindParam(':religion', $religion, PDO::PARAM_STR);
        $stmt->bindParam(':numero_hermanos', $numero_hermanos, PDO::PARAM_INT);
        $stmt->bindParam(':lugar_ocupacion', $lugar_ocupacion, PDO::PARAM_STR);
        $stmt->bindParam(':id_tipo_discapacidad', $id_tipo_discapacidad, PDO::PARAM_INT);
        $stmt->bindParam(':certificado_discapacidad', $certificado_discapacidad, PDO::PARAM_BOOL);
        $stmt->bindParam(':alergias', $alergias, PDO::PARAM_STR);
        $stmt->bindParam(':experiencias_traumaticas', $experiencias_traumaticas, PDO::PARAM_STR);
        $stmt->bindParam(':id_tipo_sangre', $id_tipo_sangre, PDO::PARAM_INT);
        $stmt->bindParam(':id_padre', $id_padre, PDO::PARAM_INT);
        $stmt->bindParam(':id_madre', $id_madre, PDO::PARAM_INT);
        $stmt->bindParam(':esta_matriculado', $esta_matriculado, PDO::PARAM_BOOL);
        $stmt->bindParam(':estado', $estado, PDO::PARAM_BOOL);

        $stmt->execute();

        return $this->db->lastInsertId();
    }
}
