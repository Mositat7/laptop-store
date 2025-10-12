<?php

namespace Database\Seeders;

use App\Models\ContactInfo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactInfoSeeder extends Seeder
{
    public function run()
    {
        ContactInfo::create([
            'address' => 'تهران-خیابان امام',
            'email' => 'example@gmail.com',
            'phones' => ['09933450235', '09111111111'],
            'working_hours' => 'شنبه تا پنجشنبه: ۸:۰۰ تا ۱۷:۰۰',
            'map_location' => 'https://maps.google.com/?q=35.6892,51.3890'
        ]);
    }
}
