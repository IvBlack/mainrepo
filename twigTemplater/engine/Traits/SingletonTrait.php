<?php

/**
 * Trait SingletonTrait
 *
 * Трейт синглтона, что бы каждый раз не делать
 */
trait SingletonTrait
{
    protected static $instance;

    protected function __construct(){
    }

    protected function __clone(){
    }

    protected function __wakeup(){
    }

    public static function getInstance(): self
    {
        if (empty(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}