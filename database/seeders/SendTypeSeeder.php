<?php

namespace Database\Seeders;

use App\Models\SendType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SendTypeSeeder extends Seeder
{
    public function run()
    {
        SendType::create(['name' => 'پست پیشتاز', 'price' => 30000]);
        SendType::create(['name' => 'تیپاکس', 'price' => 45000]);
        SendType::create(['name' => 'تحویل حضوری', 'price' => 0]);
    }
}
