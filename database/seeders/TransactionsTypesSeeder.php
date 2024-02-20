<?php

namespace Laravel\LaravelTransactionPackage\seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionsTypesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('transactions_types')->insert([
            ['name'=>'merchantFees'],
            ['name'=>'servicesFees'],
            ['name'=>'paymentTaxes'],
            ['name'=>'deliveryFees'],
        ]);
    }
}
