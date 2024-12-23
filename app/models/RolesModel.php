<?php
class RolesModel extends Model
{

    public function getAllRoles()
    {
        $stmt = $this->db->prepare("SELECT * FROM rol");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

   
  
}
