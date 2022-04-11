<?php
class RankClass extends DBClass{
    public function __construct()
    {
        $this->table="droits_user";
        $this->getConnection();
    }
}