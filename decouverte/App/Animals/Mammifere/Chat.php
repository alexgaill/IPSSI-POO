<?php
namespace App\Animals\Mammifere;

class Chat extends Mammifere{
    protected $cri = "Miaou";
    private static $instances = 1;

    public function __clone()
    {
        self::$instances++;
    }

    /**
     * Affiche le cri du chat
     *
     * @return string
     */
    public function getCriChat() {
        return $this->cri;
    }

    /**
     * Get the value of instances
     *
     * @return $instances
     */
    public static function getInstances()
    {
        return self::$instances;
    }
}