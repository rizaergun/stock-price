<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockPrice extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'symbol', 'open', 'high', 'low', 'price', 'volume', 'latest_trading_day', 'previous_close', 'change', 'change_percent'
    ];
}
