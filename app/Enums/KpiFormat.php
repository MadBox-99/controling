<?php

declare(strict_types=1);

namespace App\Enums;

enum KpiFormat: string
{
    case Percentage = 'percentage';
    case Number = 'number';
    case Ratio = 'ratio';
    case Duration = 'duration';
}
