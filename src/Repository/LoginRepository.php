<?php

namespace App\Repository;

use App\Utils\Auth;

class LoginRepository {
    public function __construct(public $auth = new Auth) { }

    public function authenticate($username, $password) {
        return $this->auth->login($username, $password);
    }

    public function logout() {
        return $this->auth->logout();
    }
}
