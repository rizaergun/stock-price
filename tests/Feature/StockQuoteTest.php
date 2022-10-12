<?php

namespace Tests\Feature;

use App\Actions\StockQuote;
use Tests\TestCase;

class StockQuoteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_stock_quote_response_contains()
    {
        $response = StockQuote::run('AMZN');

        $this->assertContains('AMZN', $response);
    }
}
