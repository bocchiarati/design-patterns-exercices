<?php

# TODO: Créer une classe Config en Singleton

namespace App;

class Config
{
    private static $_instance;
    private array $settings;

    private function __construct()
    {
        $this->settings = require_once(__DIR__ . '/../config/config.php');
    }

    public static function getInstance()
    {

        if(is_null(self::$_instance)){
            self::$_instance = new Config();
        }
        return self::$_instance;
    }

    /**
     * @throws \Exception
     */
    public function get($key)
    {
        if(array_key_exists($key, $this->settings)) {
            return $this->settings[$key];
        } else {
            throw new \Exception("Key not found");
        }
    }
}