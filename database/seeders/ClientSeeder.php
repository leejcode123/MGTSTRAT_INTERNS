<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            [
                'company_name' => 'MGT_STRAT',
                'yr_mnth_sales' => 'C2010-00-01-029',
                'old_id' => 'C2018-11-02-175',
                'sales_pax' => 'Tine',
                'client_class' => 'ACTIVE',
                'industry' => 'Shipping & Logistics',
                'old_new' => 'Old',
                'first_eng' => '7/2/1905',
                'second_eng' => 'Jan 2016',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
            ]);
    }
}
