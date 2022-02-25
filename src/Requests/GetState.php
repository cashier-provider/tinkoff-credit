<?php

declare(strict_types=1);

namespace CashierProvider\Tinkoff\Credit\Requests;

class GetState extends BaseRequest
{
    protected $path = '/api/partners/v2/orders/{orderNumber}/info';

    public function getRawBody(): array
    {
        return [
            'orderNumber' => $this->model->getExternalId(),
        ];
    }
}
