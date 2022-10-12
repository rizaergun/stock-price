<?php

namespace App\Actions;

use App\Transformers\StockPriceTransformer;
use Lorisleiva\Actions\Concerns\AsAction;
use App\Services\AlphaVantage;

class StockQuote
{
    use AsAction;

    private AlphaVantage $alphaVantage;

    public function __construct(AlphaVantage $alphaVantage)
    {
        $this->alphaVantage = $alphaVantage;
    }

    public function handle(string $symbol): array
    {
        $this->alphaVantage->setParams([
            'function' => 'GLOBAL_QUOTE',
            'symbol' => $symbol,
        ]);

        $response = $this->alphaVantage->getResponse();

        if (isset($response->{"Global Quote"}->{'01. symbol'}))
            return (new StockPriceTransformer)->transform($response);

        return [];
    }
}
