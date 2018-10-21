<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'id'=>1,
                'name'=>'Hoa chúc mừng',
                'description'=>'Hoa chúc mừng',
            ],
            [
                'id'=>2,
                'name'=>'Hoa sinh nhật',
                'description'=>'Hoa sinh nhật',
            ],
            [
                'id'=>3,
                'name'=>'Hoa tình yêu',
                'description'=>'Hoa tình yêu',
            ],
            [
                'id'=>4,
                'name'=>'Hoa giỏ, hộp',
                'description'=>'Hoa giỏ, hộp',
            ],
            [
                'id'=>5,
                'name'=>'Hoa cưới',
                'description'=>'Hoa cưới',
            ],
        ]);
    }
}
