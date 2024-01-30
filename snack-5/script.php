<?php


class Persona
{
    public $name;
    public $surname;
    public $age;




    public function setAge($_age)
    {
        if (!is_int($_age)) {
            throw new Exception('L\'età deve essere un numero intero.');
        } else {


            $this->age = $_age;
        }
    }
}


$persona = new Persona();
try {







    $persona->setAge("non un numero");
} catch (Exception $e) {
    echo "Errore: " . $e->getMessage();
}
