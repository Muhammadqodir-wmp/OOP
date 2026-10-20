<?php

namespace App\Models;

class User{
    public function getName(string $name):string{
        return "$name - sizning ismingiz";
    }
}