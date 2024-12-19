<?php
class OtherDataModel extends Model
{

    //Tabla Modalidad
    public function getAllModalidad()
    {
        $stmt = $this->db->prepare("SELECT * FROM modalidad");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //Tabla Modalidad por ID
    public function getModalidadById($id_modalidad)
    {
        $stmt = $this->db->prepare("SELECT * FROM modalidad WHERE id_modalidad = :id_modalidad");
        $stmt->bindParam(':id_modalidad', $id_modalidad, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    //Tabla Modalidad
    public function getAllForma()
    {
        $stmt = $this->db->prepare("SELECT * FROM forma");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    //Tabla Modalidad por ID
    public function getFormaById($id_forma)
    {
        $stmt = $this->db->prepare("SELECT * FROM forma WHERE id_forma = :id_forma");
        $stmt->bindParam(':id_forma', $id_forma, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


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
    public function getAllSituacionMatricula()
    {
        $stmt = $this->db->prepare("SELECT * FROM situacion_matricula");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //Tabla Situacion Final
    public function getAllSituacionFinalMatricula()
    {
        $stmt = $this->db->prepare("SELECT * FROM situacion_final_matricula");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
