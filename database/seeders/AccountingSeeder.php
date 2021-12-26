<?php

namespace Database\Seeders;

use App\Models\Accounting;
use Illuminate\Database\Seeder;

class AccountingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Accounting::factory()->count(20)->create();
    }
}
