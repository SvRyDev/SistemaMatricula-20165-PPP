<?php
class PeriodoAnualModel extends Model
{

    public function findIdByYearName($nombre_anio)
    {
        $sql = "SELECT * FROM periodo_anual WHERE nombre_año = :nombre_anio";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':nombre_anio', $nombre_anio, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
   
    ;
    }


    public function createNewYear($periodo_academico)
    {
        $sql = "INSERT INTO periodo_anual (
            nombre_año
        ) VALUES (
            :periodo_academico
    
        )";

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':periodo_academico', $periodo_academico, PDO::PARAM_STR);

        $stmt->execute();

        // Retornar el ID del nuevo padre si es necesario
        return $this->db->lastInsertId();
    }


    public function isYearExist($nombre_anio)
    {
        $sql = "SELECT COUNT(*) as count FROM periodo_anual WHERE nombre_año = :nombre_anio";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':nombre_anio', $nombre_anio, PDO::PARAM_STR);
        $stmt->execute();

        // Obtener el resultado
        $result = $stmt->fetch(PDO::FETCH_OBJ);

        return $result->count > 0;
    }

    public function isMatriculaActive($nombre_anio)
    {
        $sql = "SELECT matricula_activa FROM periodo_anual WHERE nombre_año = :nombre_anio";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':nombre_anio', $nombre_anio, PDO::PARAM_STR);
        $stmt->execute();

        // Obtener el resultado
        $result = $stmt->fetch(PDO::FETCH_OBJ);

        return $result->matricula_activa;
    }


    public function activeMatricula($periodo_anual, $aforo)
    {
        $stmt =  $this->db->prepare("UPDATE periodo_anual SET matricula_activa = true, aforo = :aforo
                                    WHERE nombre_año = :periodo_anual");
        $stmt->bindParam(':periodo_anual', $periodo_anual);
        $stmt->bindParam(':aforo', $aforo);
        $stmt->execute();
    }
}
