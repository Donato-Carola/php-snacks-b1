<?php 


class Persona {
    public $name;
    public $surname;
    public $age;



    public function __construct(string $_name,string $_surname,int $_age)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->age = $_age;
        
    }

    public function setAge($_age) {
        if (!is_int($_age)) {
            throw new InvalidArgumentException('L\'età deve essere un numero intero.');
        }

        $this->age = $_age;
    }

    public function getAge()
    {
        return $this->age;
    }



}

try {
    $persona = new Persona("Mario", "Rossi", 30);
    

    
    $persona->setAge(35);
    echo "Nuova età: " . $persona->getAge() . "<br>";

    
    $persona->setAge("non un numero"); 

} catch (InvalidArgumentException $e) {
    echo "Errore: " . $e->getMessage();
}









?>