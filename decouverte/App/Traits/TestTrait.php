<?php
namespace App\Traits;

trait TestTrait {

    public function hello()
    {
        parent::sayHello();
        echo 'World!';
    }
}