<?php

namespace App\State\Order;

use App\State\Order\Contracts\StateInterface;

class Context {
    private StateInterface $state;

    public static function create(): Context {
        $order = new self;
        $order->state = new StateCreated;

        return $order;
    }

    public function setState(StateInterface $state) {
        $this->state = $state;
    }

    public function proceedToNext() {
        $this->state->proceedToNext($this);
        return $this;
    }

    public function toString() {
        return $this->state->toString();
    }
}