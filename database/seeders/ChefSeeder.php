<?php

namespace Database\Seeders;

use App\Models\Chef;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChefSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->datas() as $key => $value) {
            Chef::create($value);
        }
    }

    private function datas()
    {
        return [
            [
                'image'=>'chefs/chef1.png',
                'name'=>'Ralph Edwards',
                'designation'=>'Chef Lead',
            ],
            [
                'image'=>'chefs/chef2.png',
                'name'=>'Leslie Alexander',
                'designation'=>'Chef Assistant',
            ],
            [
                'image'=>'chefs/chef3.png',
                'name'=>'Ronald Richards',
                'designation'=>'Chef Assistant',
            ]
            // dummy data array will be here
        ];
    }
}
