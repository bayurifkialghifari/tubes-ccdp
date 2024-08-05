<?php

namespace App\State\Order;

use App\State\Order\Context;
use App\State\Order\Contracts\StateInterface;

class StateShipped implements StateInterface
{
    public function proceedToNext(Context $context) {
        $context->setState(new StateDone);
    }

    public function toString(): string {
        return 'shipped';
    }
}