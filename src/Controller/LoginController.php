<?php

namespace App\Controller;

use App\Repository\LoginRepository;
use App\Utils\Controller;

class LoginController extends Controller {
    public function __construct(public $loginRepository = new LoginRepository) { 
        parent::__construct();
    }

    public function index() {
        $title = 'Login';
        $this->loadView('login', compact('title'));
    }

    public function authenticate() {
        $data = $this->validator->validate($this->request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(!$data) redirectBack();

        if($this->loginRepository->authenticate(username: $data['email'], password: $data['password'])) {
            return redirect('/dashboard');
        } else {
            $this->session->flash('error_email', 'Credentials not found');
            return redirectBack();
        }
    }

    public function logout() {
        $this->loginRepository->logout();

        return redirect('/login');
    }
}