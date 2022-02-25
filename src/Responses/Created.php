<?php

declare(strict_types=1);

namespace CashierProvider\Tinkoff\Credit\Responses;

use CashierProvider\Core\Http\Response;

class Created extends Response
{
    protected $map = [
        self::KEY_EXTERNAL_ID => 'id',

        self::KEY_STATUS => 'status',
    ];
}
