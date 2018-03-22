<?php

namespace App\Models;

class User extends Model
{

    public function __construct()
    {
        parent::__construct();
        $this->table = 'users';
    }
    
    public function all()
    {
        return $this->db->select()->from($this->table)
                        ->execute()->fetchAll();
    }

}