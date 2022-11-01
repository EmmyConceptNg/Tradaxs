<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrenciesTableSeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Currency::create([
            'currency_code' => 'BTC',
            'name' => 'bitcoin',
            'price' => '125,000',
        ]);
    }
}
