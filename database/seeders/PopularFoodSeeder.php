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
                'image' =>'popular_foods/popular_food1.png',
                'name' =>'Chicken pizza',
                'description'=>'The Registration Fee',
                'price'=>'$26.99',


            ],
            [
                'image' =>'popular_foods/popular_food2.png',
                'name' =>'Egg And Cucumber',
                'description'=>'The Registration Fee',
                'price'=>'$28.00',


            ],
            [
                'image' =>'popular_foods/popular_food3.png',
                'name' =>'Chicken Fried Rice',
                'description'=>'The Registration Fee',
                'price'=>'$32.20',


            ],
            [
                'image' =>'popular_foods/popular_food4.png',
                'name' =>'Chicken Leg Piece',
                'description'=>'The Registration Fee',
                'price'=>'$25.00',


            ],
        ];
    }
}
