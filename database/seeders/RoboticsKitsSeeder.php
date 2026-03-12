<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoboticsKitsSeeder extends Seeder
{
    public function run()
    {
        DB::table('robotics_kits')->insert([
            [
                'name' => 'Arduino Starter Kit',
                'description' => 'Basic robotics kit with Arduino components'
            ],
            [
                'name' => 'LEGO Mindstorms Kit',
                'description' => 'Educational robotics kit for robotics learning'
            ],
            [
                'name' => 'Raspberry Pi Robotics Kit',
                'description' => 'Advanced robotics kit using Raspberry Pi'
            ]
        ]);
    }
}