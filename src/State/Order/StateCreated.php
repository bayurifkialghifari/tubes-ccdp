<?php

namespace App\State\Order;

use App\State\Order\Context;
use App\State\Order\Contracts\StateInterface;

class StateCreated implements StateInterface
{
    public function proceedToNext(Context $context) {
        $context->setState(new StateShipped);
    }

    public function toString(): string {
        return 'created';
    }
}