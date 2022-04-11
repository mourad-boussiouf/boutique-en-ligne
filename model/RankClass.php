<?php
class RankClass extends Model{
    public function __construct()
    {
        $this->table="droits_user";
        $this->getConnection();
    }
}