<?php
namespace App\Animals\Mammifere;

class Chat extends Mammifere{
    protected $cri = "Miaou";

    /**
     * Affiche le cri du chat
     *
     * @return string
     */
    public function getCriChat() {
        return $this->cri;
    }
}