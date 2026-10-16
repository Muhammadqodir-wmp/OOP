<?php

abstract class Davlat
{
    public string $nomi;
    public int $m_yili;

    protected int $tBoylikHajmi;

    public function __construct($nomi, $m_yili)
    {
        $this->nomi = $nomi;
        $this->m_yili = $m_yili;
    }

    abstract function xavfsizlik();

    public function elchixona()
    {
        return $this->xavfsizlik();
    }
}

class Osiyo extends Davlat
{

    #[Override]
    public function xavfsizlik()
    {
        return "\n Chegara himoyada!". " Qo'shin hujumga tayyor!";
    }


    public function iqtisod()
    {
        return "\n Davlat iqtisodi tadbirkorlar uchun ochiq";
    }
}


$uzbek = new Osiyo("O'zbekiston", 1991);

echo "\nDavlat nomi: " . $uzbek->nomi . "\nDavlat mustaqillik sanasi: " . $uzbek->m_yili;

echo $uzbek->xavfsizlik();