<?php

namespace App\Traits;

use App\Services\FusionCrmService;
use Carbon\Carbon;

trait PropertySliderTrait
{
    public $title = '';
    public $type = '';
    public $attr = [];
    protected $items = [];
    private $fusionCrmService;

    public function mount()
    {
        $this->fetchItems();
    }

    protected function formatTags($item)
    {
        $tags = [];
        $flags = [
            'is_featured' => 'Featured',
            'is_cashflow_positive' => 'Cash Flow Positive',
            'is_ndis' => 'NDIS',
            'is_smsf' => 'SMSF',
            'is_firb' => 'FIRB',
            'is_co_living' => 'Coliving'
        ];

        foreach ($flags as $flag => $tag) {
            if ($item[$flag] ?? false) {
                $tags[] = $tag;
            }
        }

        return $tags;
    }

    protected function formatPrice($price)
    {
        return number_format($price, 0, '.', ',');
    }

    protected function formatDate($date)
    {
        return Carbon::parse($date)->diffForHumans();
    }
} 