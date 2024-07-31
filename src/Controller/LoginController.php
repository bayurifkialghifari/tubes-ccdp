<?php

namespace App\Controller;

use App\Utils\Auth;
use App\Utils\Controller;

class LoginController extends Controller {
    public function index() {
        $title = 'Login';
        $this->loadView('login', compact('title'));
    }

    public function authenticate() {
        $auth = new Auth;

        $data = $this->validator->validate($this->request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(!$data) redirectBack();

        if($auth->login($data['email'], $data['password'])) {
            return redirect('/dashboard');
        } else {
            $this->session->flash('error_email', 'Credentials not found');
            return redirectBack();
        }
    }

    public function logout() {
        $auth = new Auth;
        $auth->logout();

        return redirect('/login');
    }
}