<?php

    class Man{

        private $age=10;
        private $name='LiLei';
        /**
         * Man constructor.
         * @param int $age_1
         * @param String $name_1
         */
        public function __construct($age_1, $name_1){
            $this->age=$age_1;
            $this->name=$name_1;
        }

        public function getName(){
            return $this->name;
        }

        public function getAge(){
            return $this->age;
        }

        public static function sayHello(){
            echo "Hello !";
        }
    }