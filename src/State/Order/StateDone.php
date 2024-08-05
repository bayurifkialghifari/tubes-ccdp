<?php

namespace App\State\Order;

use App\State\Order\Context;
use App\State\Order\Contracts\StateInterface;

class StateDone implements StateInterface {
    public function proceedToNext(Context $context) {
        // there is nothing more to do
    }

    public function toString(): string {
        return 'done';
    }
}