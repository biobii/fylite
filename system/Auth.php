<?php

namespace App\Core;

/**
 * ------------------
 * --- EXPERIMENT ---
 * ------------------
 * I'm not sure with this code, but you can try :D
 */

class Auth
{

    public $id, $name;

    public function setAuth($user_info)
    {
        if (is_array($user_info)) {
            $_SESSION['auth_id'] = $user_info[0];
            $_SESSION['auth_name'] = $user_info[1];
            $this->name = $_SESSION['auth_name'];
        } else {
            $_SESSION['auth_id'] = $user_info[0];
        }

        $this->id = $_SESSION['auth_id'];
    }

    public function check()
    {
        return isset($_SESSION['auth_id']) ? true : false;
    }

    public function logout()
    {
        if ($this->check()) {
            if (isset($_SESSION['auth_id']) && isset($_SESSION['auth_name'])) {
                unset($_SESSION['auth_id']);
                unset($_SESSION['auth_name']);
            } else if (isset($_SESSION['auth_id'])) {
                unset($_SESSION['auth_name']);
            }
            return true;
        }
        return false;
    }
}