<?php
    class User{
        //Atributos
        private $id_user;
        private $email;
        private $password;

        //Constructor
        public function __construct($email, $password) {
            $this->emial=$email;
            $this->password=$password;
        }

        //Metodos getters y Setters
        //Metodo get para devolver valores y set para meter valores.
        
        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of password
         */ 
        public function getPassword()
        {
                return $this->password;
        }

        /**
         * Set the value of password
         *
         * @return  self
         */ 
        public function setPassword($password)
        {
                $this->password = $password;

                return $this;
        }
    }

?>