<?php

namespace App\Controller;

use App\State\Order\Context;
use App\Utils\Controller;

class DashboardController extends Controller {
    public function index() {
        $orderContext = Context::create();
        
        $this->loadView('dashboard', compact('orderContext'));
    }
}