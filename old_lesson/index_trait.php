<?php

trait Admin_Setting{
    public function tahrirlash(){
        return "Admin tahrirldi";
    }
}

trait Moderator_Setting{
    public function tahrirlash(){
        return "Moderator tahrirladi!";
    }
}

class User{
    use Admin_Setting, Moderator_Setting{
        Admin_Setting::tahrirlash insteadof Moderator_Setting;
        Moderator_Setting::tahrirlash as Moder_edit;
    }
}
$m = new User;
echo $m->tahrirlash() . "<br>";
echo $m->Moder_edit();