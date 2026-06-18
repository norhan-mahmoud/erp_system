<?php

namespace App\Services\Payments\Gateways;

use App\Interfaces\PaymentGateway;

class PaymobGateway extends BasePaymantGateway implements PaymentGateway
{

    public string $token;


    public function __construct()
    {
        $this->base_url = config('services.paymob.base_url');
        $this->header= [];

    }

    public function pay(array $data): array
    {

        return [];

    }

    public function verify(array $data): bool
    {
        return true;
    }

    public function authenticate()
    {
        $response = $this->buildRequest('POST', '/auth/tokens', [
            'api_key' => config('services.paymob.api_key'),
        ]);
        return $response;

        if (!($response['success'] ?? false)) {
                throw new \Exception('Paymob authentication failed');
            }

            $this->token = $response['data']['token'] ?? null;

            if (!$this->token) {
                throw new \Exception('Token not found in Paymob response');
            }

         $this->token = $response['token'];
            $this->headers = [
                'Authorization' => 'Bearer '.$this->token,
            ];
    }

    public function createToken(): string
    {
        $this->authenticate();

        return $this->token;
    }
}
