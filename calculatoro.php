<?php

trait calculator {
    public function sum($_a, $_b) {
        return $_a + $_b;
    }

    public function subtraction($_a, $_b) {
        return $_a - $_b;
    }

    public function division ($_a, $_b) {
        return $_a / $_b;
    }

    public function multiplication ($_a, $_b) {
        return $_a * $_b;
    }

}

class rectangle {

    use calculator;

    public $base;
    public $height;


    public function __construct($_base, $_height){
        $this -> base = $_base;
        $this -> height = $_height;
    }

    public function area(){
        return $this->multiplication($this->base, $this->height);
    }

    public function perimeter(){
        return $this->multiplication(2, $this->base) + $this->multiplication(2, $this->height);
    }

    public function diagonal(){
        return sqrt(($this->multiplication($this->base, $this->base)) + ($this->multiplication($this->base, $this->base)));
    }


};

$rectangle = new rectangle(5, 5);

echo "L'area del rettangolo è " . ($rectangle->area()) . "\n";
echo "Il perimetro del rettangolo è {$rectangle->perimeter()}\n";
echo "La diagonale del rettangolo è {$rectangle->diagonal()}\n";
