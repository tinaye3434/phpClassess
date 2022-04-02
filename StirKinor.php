<?php

namespace App;
require_once('ApplyDiscount.php');
use App\ApplyDiscount;

class StirKinor
{
    use ApplyDiscount;

    public $about = "Movie House";
    public $price = 10;

    public function members()
    {
       $price = $this->applyDiscount($this->price, 20);

       echo "$price";
    }

    public function ordinaryClients()
    {
        $price = $this->price; 

        echo "$price";
    }
}

$stirkinor = new StirKinor;
echo $stirkinor -> members();