<?php

use Illuminate\Database\Seeder;
use App\Test;
use App\Package;
use App\PackageTest;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        Test::truncate();
        Package::truncate();

        Test::insert([
            [
            'name' => 'Test A',
            'status' => 'active'
            ],
            [
            'name' => 'Test B',
            'status' => 'active'
            ],
            [
            'name' => 'Test C',
            'status' => 'active'
            ],
            [
                'name' => 'Test D',
                'status' => 'active'    
            ],
            [
                'name' => 'Test E',
                'status' => 'active'
            ],
        ]);

        Package::insert([
            [
                'name' => 'Package 1',
                'price' => 100.00,
                'order' => 1,
                'discount' =>20,
                'status' => 'active'
            ],
            [
                'name' => 'Package 2',
                'price' => 200.00,
                'order' => 2,
                'discount' => 30,
                'status' => 'inactive'
            ],
        ]);
        
        PackageTest::insert([
            [
                'package_id' => 1,
                'test_id' => 1
            ],
            [
                'package_id' => 1,
                'test_id' => 2
            ],
            [
                'package_id' => 1,
                'test_id' => 3
            ],
            [
                'package_id' => 2,
                'test_id' => 1
            ],
            [
                'package_id' => 2,
                'test_id' => 2
            ],
            [
                'package_id' => 2,
                'test_id' => 3
            ],
            [
                'package_id' => 2,
                'test_id' => 4
            ],
            [
                'package_id' => 3,
                'test_id' => 5
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
