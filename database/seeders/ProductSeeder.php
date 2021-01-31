<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
                'name' => 'Akua',
                'category_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Panta',
                'category_id' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Cola',
                'category_id' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Poca Sweat',
                'category_id' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'The Tarik',
                'category_id' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Susu Sapi',
                'category_id' => '8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Ultra Susu',
                'category_id' => '8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
    }
}
