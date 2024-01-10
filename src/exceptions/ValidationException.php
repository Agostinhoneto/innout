<?php

class ValidationException extends AppException {
    private $errors = [];
    public function __construct($errors = [],
    $message = 'Erros de Validação',
    $code = 0,$previus = null){
    parent::__construct($message,$code,$previus);
    $this->errors = $errors;
    }    
    
    public function getErros(){
        return $this->errors;
    }

    public function get($att){
        return $this->errors[$att];
    }
        
}