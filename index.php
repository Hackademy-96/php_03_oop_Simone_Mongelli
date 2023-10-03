<?php

// trait MaxSpeed{
//     public $maxspeed;

//     public function MaxSpeed(){
//         echo "240Km/h";
//     }
// }


class Moto {
    use MaxSpeed;
    public $marchio;
    public $modello;
    public $prezzo;

    public static $counter = 0;

    public function __construct($_marchio,$_modello,$_prezzo){
        $this->marchio = $_marchio;
        $this->modello = $_modello;
        $this->prezzo = $_prezzo;

        self::$counter ++;
        
    }
}

$moto1 = new Moto("Ducati", "r4","16.000€");

// var_dump($moto1);



abstract class Automobili {
    public $marchio;
    public $modello;
    public $numeroporte;
    public $prezzo;

    public static $counter = 0;

    public function __construct($_marchio,$_modello,$_numeroporte,$_prezzo){
        $this->marchio = $_marchio;
        $this->modello = $_modello;
        $this->numeroporte = $_numeroporte;
        $this->prezzo = $_prezzo;

        self::$counter ++;
        
    }
    public abstract function avvio();
}

// $Automobile1 = new Automobili("Fiat", "500X", "5","16.000€");
// $Automobile2 = new Automobili("Fiat", "Panda", "4","11.000€");
// $Automobile3 = new Automobili("Alfaromeo", "Brera", "5","40.00€");


// // var_dump($Automobile1);
// echo Automobili::$counter . "\n";


class Suv extends Automobili {

    public $trazione_ruote;
    public static $counterSuv = 0;

    public function __construct($_marchio,$_modello,$_numeroporte,$_prezzo,$_trazione_ruote){

        parent::__construct($_marchio,$_modello,$_numeroporte,$_prezzo);

        $this-> trazione_ruote = $_trazione_ruote;

        self::$counterSuv ++;
        
    }

    public function avvio(){
        echo "sto partendo";
    }
}


$suv1 = new Suv("Jeep","Renegade","5","30.000€","4X4");
$suv1->avvio();
$suv2 = new Suv("Jeep","Compass","5","30.000€","4X4");

// var_dump($suv);

echo Suv::$counterSuv . "\n";


class Utilitari extends Suv{

    public $consumo_litro;
    public static $counterUtilitari = 0;

  public function __construct($_marchio,$_modello,$_numeroporte,$_prezzo,$_trazione_ruote,$_consumo_litro){

    parent::__construct($_marchio,$_modello,$_numeroporte,$_prezzo,$_trazione_ruote);

    $this->consumo_litro = $_consumo_litro;

    self::$counterUtilitari ++;
        
    }
    public function avvio(){
        echo "sto partendo";
    }
}

$utilitari1 = new Utilitari("Toyota", "Yaris","5","22.000€","Anteriore","Medio");
$utilitari2 = new Utilitari("Toyota", "C-HR","5","22.000€","Posteriore","Alto");

echo Utilitari::$counterUtilitari . "\n";


class Sportiva extends Utilitari{

    use MaxSpeed;

    public $potenza;
    public static $counterSportiva = 0;

  public function __construct($_marchio,$_modello,$_numeroporte,$_prezzo,$_trazione_ruote,$_consumo_litro,$_potenza){

    parent::__construct($_marchio,$_modello,$_numeroporte,$_prezzo,$_trazione_ruote,$_consumo_litro);

    $this->potenza = $_potenza;

    self::$counterSportiva ++;
        
    }
    public function avvio(){
        echo "sto partendo";
    }
}

$sportiva1 = new Sportiva("Audi", "Rs3","5","22.000€","Anteriore","Medio","300cv");
$sportiva2 = new Sportiva("Alfa", "GTam","5","22.000€","Posteriore","Alto","430cv");

echo Sportiva::$counterSportiva . "\n";


$moto1->MaxSpeed() ;
$sportiva1->MaxSpeed() ;

trait MaxSpeed{
    public $maxspeed;

    public function MaxSpeed(){
        echo "240Km/h  \n";
    }
    public function avvio(){
        echo "sto partendo";
    }
}