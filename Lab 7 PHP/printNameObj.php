<?php
    class Person{
        public $firstName;
        public $lastName;

        function __construct($firstName,$lastName){
             $this->firstName = $firstName;
             $this->lastName = $lastName;
        }

        public function printName($num){
            while($num>0){
                echo $this->firstName , " " , $this->lastName,"<br>";
                $num--;
            }
        }
    }

    $person1 = new Person("John","Smith");
    $person1->printName(10);
?>