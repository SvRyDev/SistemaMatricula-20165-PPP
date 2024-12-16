<?php
class ApoderadoModel extends Model
{
  public function getAllApoderados() {}

  public function createApoderado(
    $apod_ape_paterno,
    $apod_ape_materno,
    $apod_nombres,
    $apod_fech_nac,
    $apod_g_instruccion,
    $apod_ocupacion,
    $apod_domicilio,
    $apod_telefono,
    $estado = true
  ) {
    $sql = "INSERT INTO apoderado (
          apellido_paterno,
          apellido_materno,
          nombres,
          fecha_nacimiento,
          id_escolaridad,
          ocupacion,
          domicilio,
          telefono,
          whataspp,
          estado
        
          ) VALUES (
              :apellido_paterno,
              :apellido_materno,
              :nombres,
              :fecha_nacimiento,
              :id_escolaridad,
              :ocupacion,
              :domicilio,
              :telefono,
              :telefono,
              :estado
          )";

    $stmt = $this->db->prepare($sql);

    $stmt->bindParam(':apellido_paterno', $apod_ape_paterno, PDO::PARAM_STR);
    $stmt->bindParam(':apellido_materno', $apod_ape_materno, PDO::PARAM_STR);
    $stmt->bindParam(':nombres', $apod_nombres, PDO::PARAM_STR);
    $stmt->bindParam(':fecha_nacimiento', $apod_fech_nac, PDO::PARAM_STR);
    $stmt->bindParam(':id_escolaridad', $apod_g_instruccion, PDO::PARAM_INT);
    $stmt->bindParam(':ocupacion', $apod_ocupacion, PDO::PARAM_STR);
    $stmt->bindParam(':domicilio', $apod_domicilio, PDO::PARAM_STR);
    $stmt->bindParam(':telefono', $apod_telefono, PDO::PARAM_STR);
    $stmt->bindParam(':estado', $estado, PDO::PARAM_BOOL);

    $stmt->execute();

    // Retornar el ID del nuevo padre si es necesario
    return $this->db->lastInsertId();
  }
}
