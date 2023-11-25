<?php

namespace App\Models;

use phpDocumentor\Reflection\Types\Null_;

class User{
     
    public $name = NULL;
    protected $email = NULL;
    private $password = NULL;
  
	public static $count = 0;
	private $uid;

   
    

    public function setName($name_){
        $this->name = trim($name_);
    }
    
        
    public function getName(){
        return $this->name;
    }
    public function setEmail($email_){
        $this->email = $email_;
        return TRUE;
    
    }
    public function getEmail()
	{
		return $this->email;
	}
    public function setPassword($password_){
        $this->password = $password_;
        return TRUE;
    }
    public function getPassword()
	{
		return $this->password;
	}
    public function register()
	{
        if($this->name != NULL && $this->email != NULL && $this->password != NULL){
            
			return TRUE;
		}

		return FALSE;
    }
    public function login($id, $pass)
	{
		if($id===$this->email && $pass===$this->password){
			return TRUE;
		}

		return FALSE;

	}
}

?>