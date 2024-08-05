<?php

namespace App\Repository\Login;

interface LoginRepositoryInterface {

    public function authenticate($username, $password);

    public function logout();
}