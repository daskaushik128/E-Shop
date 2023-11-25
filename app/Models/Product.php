<?php

namespace App\Models;

use phpDocumentor\Reflection\Types\Null_;

class Product{
     
    public $name = NULL;
    public $code = NULL;
    public $price = NULL;
    public $quantity = NULL;
  

   
    

    public function setName($name_){
        $this->name = trim($name_);
    }
    
        
    public function getName(){
        return $this->name;
    }
    public function setCode($code_){
        $this->code = $code_;
        return TRUE;
    
    }
    public function getCode()
	{
		return $this->code;
	}
    public function setPrice($price_){
        $this->price = $price_;
        return TRUE;
    
    }
    public function getPrice()
	{
		return $this->price;
	}
    public function setQuantity($quantity_){
        $this->quantity = $quantity_;
    }
    public function getQuantity()
	{
		return $this->quantity;
	}

    public function add_product()
	{
        if($this->name != NULL && $this->code != NULL && $this->price != NULL && $this->quantity != NULL){
            
			return TRUE;
		}

		return FALSE;
    }
    
}

?>