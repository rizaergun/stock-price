<?php

namespace App\Actions;

use Lorisleiva\Actions\Concerns\AsAction;
use \App\Models\StockPrice;

class CreateNewStockPrice
{
    use AsAction;

    public function handle(array $data): StockPrice
    {
        return StockPrice::create($data);
    }

    public function getControllerMiddleware(): array
    {
        return ['auth'];
    }

    public function rules(): array
    {
        return [
            'symbol' => ['required'],
            'high' => ['required'],
            'low' => ['required'],
            'price' => ['required']
        ];
    }
}
