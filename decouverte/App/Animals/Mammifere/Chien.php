<?php
namespace App\Animals\Mammifere;

class Chien extends Mammifere {

    /**
     * cri du chien
     *
     * @var string
     */
    protected $cri = "Ouaf";

    final public function cours ()
    {
        echo "Le chien se met à courir";
    }
    
}