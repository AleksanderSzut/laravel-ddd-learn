<?php

declare(strict_types=1);

namespace App\Shared\Domain\Criteria;

enum OrderType
{
    case Asc;
    case Desc;
    case None;
}
