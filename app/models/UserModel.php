<?php
class UserModel extends Model
{


    public function getAllUsers()
    {
        $stmt = $this->db->prepare("SELECT * FROM vista_usuarios");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCountUsers()
    {
        $stmt = $this->db->prepare("SELECT COUNT(*) AS total_usuarios FROM vista_usuarios");
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    public function getUserById($id_usuario)
    {
        $stmt = $this->db->prepare("SELECT * FROM usuario WHERE id_usuario = :id_usuario AND estado = 1");
        $stmt->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
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


    public function createUser(
        $nombre_usuario,
        $nombre_persona,
        $clave,
        $id_rol,
        $estado = true
    ) {
        $sql = "INSERT INTO usuario (
            nombre_usuario,
            nombre_persona,
            clave,
            id_rol,
            estado
        ) VALUES (
            :nombre_usuario,
            :nombre_persona,
            :clave,
            :id_rol,
            :estado
        )";

        $stmt = $this->db->prepare($sql);


        $stmt->bindParam(':nombre_usuario', $nombre_usuario, PDO::PARAM_STR);
        $stmt->bindParam(':nombre_persona', $nombre_persona, PDO::PARAM_STR);
        $stmt->bindParam(':clave', $hashedClave, PDO::PARAM_STR);
        $stmt->bindParam(':id_rol', $id_rol, PDO::PARAM_INT);
        $stmt->bindParam(':estado', $estado, PDO::PARAM_BOOL);

        $stmt->execute();

        // Retornar el ID del nuevo usuario si es necesario
        return $this->db->lastInsertId();
    }

    public function updateUser(
        $id_usuario,
        $nombre_usuario,
        $clave = "",
        $id_rol,
        $nombre_persona
    ) {

        $sql = 'UPDATE usuario SET nombre_usuario = :nombre_usuario, ';
        if(!empty($clave)){
            $sql .= 'clave = :clave, ';
        }
        $sql .= 'id_rol = :id_rol, nombre_persona = :nombre_persona WHERE id_usuario = :id_usuario';
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':nombre_usuario', $nombre_usuario);
        if(!empty($clave)){
            $stmt->bindParam(':clave', $clave);
         
        }

        
        $stmt->bindParam(':id_rol', $id_rol);
        $stmt->bindParam(':nombre_persona', $nombre_persona);
        $stmt->bindParam(':id_usuario', $id_usuario);
        $stmt->execute();

        
    }
}
