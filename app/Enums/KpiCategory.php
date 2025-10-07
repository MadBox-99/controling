<?php

declare(strict_types=1);

namespace App\Enums;

enum KpiCategory: string
{
    case Traffic = 'traffic';
    case Engagement = 'engagement';
    case Conversion = 'conversion';
    case Seo = 'seo';
    case Custom = 'custom';
}
