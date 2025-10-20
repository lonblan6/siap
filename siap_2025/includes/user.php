<?php
include_once 'db.php';

class User extends DB{
    private $nombre_Completo;
    private $Usuario;


    public function userExists($user, $pass){
        $md5pass = $pass;
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE Usuario = :user AND Clave = :pass');
        $query->execute(['user' => $user, 'pass' => $md5pass]);

        if($query->rowCount()){
            return true;    
        }else{
            return false;
        }
    }

    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE Usuario = :user');
        $query->execute(['user' => $user]);
        
        foreach ($query as $currentUser) {
            $this->Nombre_Completo = $currentUser['Nombre_Completo'];
            $this->Usuario = $currentUser['Usuario'];
        }
    }

    public function getNombre(){
        return $this->Nombre_Completo;
    }
}

?>