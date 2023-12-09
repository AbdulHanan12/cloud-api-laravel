<?php

namespace Modules\Wpbox\Database\Seeds;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PricingPlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

         //Whatsapp
         DB::table('plan')->insert([
            'name' => 'Lite',
            'limit_items'=>0,
            'limit_orders'=>0,
            'price'=>0,
            'paddle_id'=>'',
            'description'=>'30 days trial',
            'features'=>'100 Clients, 10 campaigns per month, 1000 messages',
            'created_at' => now(),
            'updated_at' => now(),
            'enable_ordering'=>0,
        ]);

        DB::table('plan')->insert([
            'name' => 'Unlimited',
            'limit_items'=>0,
            'limit_orders'=>0,
            'price'=>25,
            'paddle_id'=>'',
            'period'=>1,
            'description'=>'30 days trial',
            'features'=>'Unlimited clients, Unlimited campaigns, Unlimited messages',
            'created_at' => now(),
            'updated_at' => now(),
            'enable_ordering'=>1,
        ]);

        Model::reguard();
    }
}
