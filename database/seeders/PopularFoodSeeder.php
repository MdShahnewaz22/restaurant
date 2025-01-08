<?php

namespace Database\Seeders;

use App\Models\PopularFood;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PopularFoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->datas() as $key => $value) {
            PopularFood::create($value);
        }
    }

    private function datas()
    {
        return [
            // dummy data array will be here
            [
                'image' =>'popular_foods/image.jpg',
                'name' =>'Food',
                'description'=>'Very Good Food',
                'price'=>'120',

            
            ],
        ];
    }
}
