<?php

namespace App;
require_once('ApplyDiscount.php');
use App\ApplyDiscount;

class Action extends StirKinor
{
    use ApplyDiscount;
    
    public $movieCategory = "Action";
    public $price = 25;

    public function members()
    {
        $price = $this->applyDiscount($this->price, 20);

        echo "$price";
    }
}


