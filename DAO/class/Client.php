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
        if (count($result) > 0) {
            $this->setData($result[0]);
        }
    }
    
    public static function getList(){
        $sql = new Sql();
        return $result = $sql->select("SELECT * FROM client");
    }
    
    public static function getSearchClient($name){
        $sql = new Sql();
        return $result = $sql->select("SELECT * FROM client WHERE name LIKE :SEARCH", array(':SEARCH' => "%".$name."%"));
    }
    
    public function login ($user, $password){
        $sql = new Sql();
        $result = $sql->select("SELECT * FROM client WHERE user = :USER and password = :PASSWORD ", array(':USER'=>$user, ':PASSWORD'=>$password));

        if (count($result)>0) {
            $this->setData($result[0]);
        } else {
            throw new Exception ("Access Denied, please check your credentials");
        }
    }
    
    public function insert(){
        $sql = new Sql();
        
        $sql->select("INSERT INTO client (name, password, user) VALUES (:NAME, :USER, :PASSWORD)", array(
            ":NAME"=>$this->name,
            ":USER"=>$this->user,
            ":PASSWORD"=>$this->password,
        ));
    }
    
    public function setData($data){
        $this->setIdClient($data['id']);
        $this->setNameClient($data['name']);
        $this->setUserClient($data['user']);
        $this->setPasswordClient($data['password']);
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