<?php

namespace App\State\Order\Contracts;

use App\State\Order\Context;

interface StateInterface {
    public function proceedToNext(Context $context);

    public function toString(): string;
}