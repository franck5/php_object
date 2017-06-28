<?php 

class User {

	private $_id = "Mon id";
	private $_email = "mon mail";
	private $_createdAt = "28 juin";


	 public function id(){
      return $this -> _id;
    }
    public function email(){
      return $this -> _email;
    }
    public function createdAt(){
      return $this -> _createdAt;
    }
}


?>