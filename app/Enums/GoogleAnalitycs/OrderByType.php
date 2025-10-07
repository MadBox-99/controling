<?php

declare(strict_types=1);

namespace App\Enums\GoogleAnalitycs;

use Filament\Support\Contracts\HasLabel;
use Illuminate\Contracts\Support\Htmlable;

enum OrderByType: string implements HasLabel
{
    case DIMENSION = 'dimension';
    case METRIC = 'metric';

    public function getLabel(): string|Htmlable|null
    {
        return match ($this) {
            self::DIMENSION => __('Dimension'),
            self::METRIC => __('Metric'),
        };
    }
}
