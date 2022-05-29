<?php

namespace Core;

class Error {
    public $error;

    public function __construct($error) {
        $this->error = $error;
    }
}