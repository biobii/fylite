<?php

namespace App\Models;

class User extends Model
{
    private $table = 'users';
    
    public function getUserByEmail($email)
    {
        return $this->db->select()->from('users')
                        ->where('email', '=', $email)
                        ->execute()->fetch();
    }

}