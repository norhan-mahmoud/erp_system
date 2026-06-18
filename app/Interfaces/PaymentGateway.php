<?php

namespace App\Interfaces;

interface PaymentGateway{

    public function pay(array $data): array;

    public function verify(array $data): bool;

    
}
