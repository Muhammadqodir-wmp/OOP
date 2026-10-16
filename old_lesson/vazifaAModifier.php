<?php

class Davlat
{
    public string $nomi;
    public int $m_yili;

    protected int $tBoylikHajmi;

    public function __construct($nomi, $m_yili)
    {
        $this->nomi = $nomi;
        $this->m_yili= $m_yili;
    }

    private function xavfsizlik(){
        return "\n Chegara himoyada!";
    }

    public function elchixona(){
        return $this->xavfsizlik();
    }
}

class Osiyo extends Davlat{

    public function iqtisod(){
        return "\n Davlat iqtisodi tadbirkorlar uchun ochiq";
    }

}


$uzbekistan = new Osiyo("O'zbekiston", 1991);

echo "Davlat nomi: " . $uzbekistan->nomi . "\n Mustaqillik yili: " . $uzbekistan->m_yili . "<br>" ;

echo $uzbekistan->iqtisod();

echo $uzbekistan->elchixona();