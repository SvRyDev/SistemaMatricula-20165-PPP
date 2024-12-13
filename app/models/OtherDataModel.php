<?php
class OtherDataModel extends Model
{

    //Tabla Sexo
    public function getAllGeneros()
    {
        $stmt = $this->db->prepare("SELECT * FROM sexo");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //Tabla Lenguaje
    public function getAllLanguajes()
    {
        $stmt = $this->db->prepare("SELECT * FROM lengua");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //Tabla Estado Civil
    public function getAllEstadoCivil()
    {
        $stmt = $this->db->prepare("SELECT * FROM estado_civil");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //Tabla Discapacidad
    public function getAllDiscapacidades()
    {
        $stmt = $this->db->prepare("SELECT * FROM discapacidad");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //Tabla Pais
    public function getAllPaises()
    {
        $stmt = $this->db->prepare("SELECT * FROM pais");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    //Tabla Tipo Sangre
    public function getAllTipoSangre()
    {
        $stmt = $this->db->prepare("SELECT * FROM tipo_sangre");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //Tabla Tipo Grado de Instruccion - Escolaridad
    public function getAllEscolaridad()
    {
        $stmt = $this->db->prepare("SELECT * FROM escolaridad");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //Tabla Secciones
    public function getAllSections()
    {
        $stmt = $this->db->prepare("SELECT * FROM seccion ORDER BY codigo_seccion ASC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //Tabla Grados
    public function getAllGrados()
    {
        $stmt = $this->db->prepare("SELECT * FROM grado");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //Tabla Niveles
    public function getAllNiveles()
    {
        $stmt = $this->db->prepare("SELECT * FROM nivel");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

        //Tabla Turnos
        public function getAllTurnos()
        {
            $stmt = $this->db->prepare("SELECT * FROM turno");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        //Tabla Situacion Final
        public function getAllSituacionFinal()
        {
            $stmt = $this->db->prepare("SELECT * FROM situacion_final_matricula");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }


}
