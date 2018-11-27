<?php

class Figure {
    protected $isBlack;

    public function __construct($isBlack) {
        $this->isBlack = $isBlack;
    }

    /** @noinspection PhpToStringReturnInspection */
    public function __toString() {
        throw new \Exception("Not implemented");
    }

    public function isBlack() {
        return $this->isBlack;
    }

    public function checkMove($form, $to, $destination = null, $figures=null) {
        throw new \Exception("Not implemented");
    }
}
