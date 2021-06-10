<?php
namespace App\Traits;

use App\Animals\TraitAnimal;

class Test extends TestParent{
    use TestTrait, TraitAnimal;

    // public function hello()
    // {
    //     echo "Hello Universe!";
    // }
}