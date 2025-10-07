<?php

declare(strict_types=1);

namespace App\Enums;

enum KpiDataSource: string
{
    case Analytics = 'analytics';
    case SearchConsole = 'search_console';
    case Manual = 'manual';
    case Calculated = 'calculated';
}
