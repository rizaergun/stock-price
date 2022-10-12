<?php

namespace App\Http\Controllers;

use App\Actions\CreateNewStockPrice;
use Illuminate\Http\Request;
use \App\Actions\StockQuote;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class StockPrice extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(Request $request)
    {
        $symbol = $request->symbol;
        $stock_quote = StockQuote::run($symbol);

        $stock_price = CreateNewStockPrice::run($stock_quote);

        return redirect()->route('stock_quote.show', ['symbol' => $stock_price->symbol]);
    }

    public function show(Request $request)
    {
        $last_stock_price = \App\Models\StockPrice::whereSymbol($request->symbol)
            ->orderBy('id', 'desc')
            ->first();

        return Inertia::render('StockQuote/Show', [
            'stock_quote' => $last_stock_price->toArray()
        ]);
    }
}
