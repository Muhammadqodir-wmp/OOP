<?php

class Meva
{
    public $yil;
    public $nav;
    public $nom;

    public function __construct($yil, $nav, $nom)
    {
        $this->yil = $yil;
        $this->nav = $nav;
        $this->nom = $nom;
    }

    function ekildi(){
        return $this->nom . ' daraxti ekildi.'. "<br>";
    }

    function novda(){
        return  $this->nom . ' novda bo\'ldi.' . "<br>";
    }

}

class Uzum extends Meva {
    
}

class Banan extends Meva{
    #[Override]
    public function novda()
    {
        return $this->nom  .    " novda bo'ldi va keraksiz shohchalari olindi.";
    }
}

class Olma extends Meva{
        public $rang;

}

$qoraUzum = new Uzum(2012, 'Kishmish', 'Qora uzum');

echo $qoraUzum->ekildi();
echo $qoraUzum->novda();

var_dump($qoraUzum);

echo "<br>";

$yashilOlma = new Olma(2021, 'Husanboy ota', 'Yashil olma');

$yashilOlma->rang = "Yashil";

var_dump($yashilOlma);

echo "<br>";


$AfrikaBanani = new Banan(2009, 'Afrika durdonasi', 'Banancha');

echo $AfrikaBanani->novda();