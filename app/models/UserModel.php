<?php
class UserModel extends Model
{


    public function getAllUsers()
    {
        $stmt = $this->db->prepare("SELECT * FROM vista_usuarios");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findUserByCredentials($user_name, $pass)
    {
        $stmt = $this->db->prepare("SELECT * FROM usuario WHERE nombre_usuario LIKE :user_name AND clave LIKE :pass");
        $stmt->bindParam(':user_name', $user_name, PDO::PARAM_STR);
        $stmt->bindParam(':pass', $pass, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function getUserByIdFromView($id_usuario)
    {
        $stmt = $this->db->prepare("SELECT * FROM vista_usuarios WHERE id_usuario = :id_usuario");
        $stmt->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
