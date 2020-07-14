<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Customers;
class customer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($k = 0; $k < 100; $k++) {
            for ($j = 0; $j < 100; $j++) {
                $array = [];
                for ($i = 0; $i < 100; $i++) {
                    $array[$i]['first_name'] = 'first_' . uniqid();
                    $array[$i]['last_name'] = 'last_' . uniqid();
                    $array[$i]['email'] = uniqid() . "@gmail.com";
                    $array[$i]['created_at'] = Carbon::now();
                    $array[$i]['updated_at'] = Carbon::now();
                }
                Customers::insert($array);
            }
        }
    }
}
