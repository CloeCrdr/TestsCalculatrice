<?php 

class User {
    private $email;
    private $name;
    private $firstname;
    private $age;

    function __construct($email,$name,$firstname,$age) {
        $this->email = $email;
        $this->name= $name;
        $this->firstname = $firstname;
        $this->age = $age;
    }

    function getEmail(){
        return $this->email;
    }

    function getName(){
        return $this->name;
    }
    function getFirstname(){
        return $this->firstname;
    }
    function getAge(){
        return $this->age;
    }

    function isValid(){
        $errors = [];

        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $errors = "Email invalide";
        }
        if(!$this->name){
            $errors = "Nom invalide";
        }
        if(!$this->firstname){
            $errors = "Prénom invalide";
        }
        if(!$this->name >= 13){
            $errors = "Vous avez l'âge suffisant pour continuer !";
        }  else {
            $errors = "Vous n'avez pas l'âge requis pour continuer";
        }
    }
}
