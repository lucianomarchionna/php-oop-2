<?php
    class users {
        protected $name;
        protected $surname;
        protected $age;

        function __construct($_name, $_surname, $_age)
        {
            $this->name = $_name;
            $this->surname = $_surname;
            $this->age = $_age;
        }

        function setName($_name) {
            $this->name = $_name;
        }

        function getName(){
            return $this->name;
        }

        function setSurname($_surname) {
            $this->surname = $_surname;
        }

        function getSurname(){
            return $this->surname;
        }

        function setAge($_age) {
            if($_age >= 16){
                $this->age = $_age;
            } 
            else{
                throw new Exception("Devi avere almeno 16 anni per poter acquistare qualcosa!");
            }
        }

        function getAge(){
            return $this->age;
        }

    }

?>
