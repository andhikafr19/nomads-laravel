<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Transactions')->insert([
            'travel_packages_id' =>Str::length(1),
            'users_id' => Str::length(1),
            'additional_visa' => Str::length(190),
            'transaction_total' => Str::length(290),
            'transaction_status' => Str::random('PENDING')
        ]);
    }
}
