<?php

namespace App\Repository\Login;

use App\Utils\Auth;

class LoginRepository implements LoginRepositoryInterface{
    public function __construct(public $auth = new Auth) { }

    public function authenticate($username, $password) {
        return $this->auth->login($username, $password);
    }

    public function logout() {
        return $this->auth->logout();
    }
}
