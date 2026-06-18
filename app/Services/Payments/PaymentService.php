<?php

namespace App\Services\Payments;

class PaymentService
{
    public function __construct(
        private GatewayResolver $resolver
    ) {}

    public function pay(string $gateway, array $data)
    {
        return $this
            ->resolver
            ->resolve($gateway)
            ->pay($data);
    }
}
