<?php

class Adminuser extends classes
{
    public function __construct()
    {
        $this->table = "user";
        $this->getConnection();
    }
