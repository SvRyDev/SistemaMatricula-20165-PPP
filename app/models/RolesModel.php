<?php
class RolesModel extends Model
{

    public function getAllRoles()
    {
        $stmt = $this->db->prepare("SELECT * FROM rol WHERE estado = 1");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createRole(
        $codigo,
        $descripcion,
        $permisos = null,
        $estado = true
    ) {
        $sql = "INSERT INTO rol (
            codigo,
            descripcion,
            permisos,
            estado
        ) VALUES (
            :codigo,
            :descripcion,
            :permisos,
            :estado
        )";
    
        $stmt = $this->db->prepare($sql);
    
        $stmt->bindParam(':codigo', $codigo, PDO::PARAM_STR);
        $stmt->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
        $stmt->bindParam(':permisos', $permisos, PDO::PARAM_STR);
        $stmt->bindParam(':estado', $estado, PDO::PARAM_BOOL);
    
        $stmt->execute();
    
        // Retornar el ID del nuevo rol si es necesario
        return $this->db->lastInsertId();
    }

    public function deleteRole($id_role) {
        $stmt = $this->db->prepare("UPDATE rol SET estado = 0 WHERE id_rol = :id_role");
        $stmt->bindParam(':id_role', $id_role);
        $stmt->execute();
    }
    
  
}
