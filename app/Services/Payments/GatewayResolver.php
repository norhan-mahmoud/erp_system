<?php

namespace App\Services\Payments;

use App\Interfaces\PaymentGateway;

class GatewayResolver
{
    /**
     * Create a new class instance.
     */
   public function resolve(string $gateway): PaymentGateway
    {
        $gatewayClass = config("gateways.$gateway");

        if (!$gatewayClass) {
            throw new \InvalidArgumentException(
                "Unsupported gateway [$gateway]"
            );
        }

        return app($gatewayClass);
    }
}
