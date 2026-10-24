<?php

namespace Dokon;

use Exception;

class BankAccount
{
    private string $owner;
    private float $balance;

    public function __construct(string $owner, float $balance)
    {
        $this->owner = $owner;
        $this->balance = $balance;
    }

    public function __get(string $property): mixed
    {
        if ($property === 'owner') {
            return $this->owner;
        }
        if ($property === "balance") {
            return $this->balance;
        }

        throw new Exception("Bunday $property mavjud emas");
    }

    public function __set(string $property, mixed $value)
    {
        if ($property === 'owner') {
            $this->owner = $value;
        }
        if($property === 'balance'){
            $this->balance = $value;
        }

    }
}
