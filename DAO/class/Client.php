<?php


class Client {
    
    private $id;
    private $name;
    private $user;
    private $password;
    
    public function getIdClient() {
        return $this->id;
    }
    
    public function setIdCLient($value){
        return $this->id = $value;
    }
    
    
    public function setNameCLient($value){
        return $this->name = $value;
    }
    
    public function getNameClient() {
        return $this->name;
    }
    
    
    public function setUserCLient($value){
        return $this->user = $value;
    }
    
    public function getUserClient() {
        return $this->user;
    }
    
    
    public function setPasswordCLient($value){
        return $this->password = $value;
    }
    
    public function getPasswordClient() {
        return $this->password;
    }
    
    
    public function loadById($id){
        $sql = new Sql();
        $result = $sql->select("SELECT * FROM client WHERE id = :ID", array(':ID' => $id));
        if ($result > 0) {
            $row = $result[0];

            $this->setIdClient($row['id']);
            $this->setNameClient($row['name']);
            $this->setUserClient($row['user']);
            $this->setPasswordClient($row['password']);

        }
    }
    
    public function __toString () {
        return json_encode(array(
            'id'=>$this->getIdCLient(),
            'name'=>$this->getNameClient(),
            'user'=>$this->getUserClient(),
            'password'=>$this->getPasswordClient()
        ));
    }
}

?>