<?php

namespace App\Traits;

use Carbon\Carbon;

trait PropertySliderTrait
{
    protected const PROPERTY_FLAGS = [
        'is_featured' => 'Featured',
        'is_cashflow_positive' => 'Cash Flow Positive', 
        'is_ndis' => 'NDIS',
        'is_smsf' => 'SMSF',
        'is_firb' => 'FIRB',
        'is_co_living' => 'Coliving'
    ];

    protected function formatTags(array $item): array 
    {
        return array_values(array_filter(
            self::PROPERTY_FLAGS,
            fn($tag, $flag) => $item[$flag] ?? false,
            ARRAY_FILTER_USE_BOTH
        ));
    }

    protected function formatPrice(float $price): string
    {
        return number_format($price, 0, '.', ',');
    }

    protected function formatDate(string $date): string 
    {
        return Carbon::parse($date)->diffForHumans();
    }
} 