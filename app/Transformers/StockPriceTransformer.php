<?php

namespace App\Transformers;

class StockPriceTransformer
{
    public function transform(object $response): array
    {
        return [
            'symbol' => $response->{"Global Quote"}->{'01. symbol'},
            'open' => $response->{"Global Quote"}->{'02. open'},
            'high' => $response->{"Global Quote"}->{'03. high'},
            'low' => $response->{"Global Quote"}->{'04. low'},
            'price' => $response->{"Global Quote"}->{'05. price'},
            'volume' => $response->{"Global Quote"}->{'06. volume'},
            'latest_trading_day' => $response->{"Global Quote"}->{'07. latest trading day'},
            'previous_close' => $response->{"Global Quote"}->{'08. previous close'},
            'change' => $response->{"Global Quote"}->{'09. change'},
            'change_percent' => $response->{"Global Quote"}->{'10. change percent'},
        ];
    }
}
