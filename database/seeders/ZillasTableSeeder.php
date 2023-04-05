<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZillasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $zillas = [
            ['name' => 'Barguna'],
            ['name' => 'Barishal'],
            ['name' => 'Bhola'],
            ['name' => 'Jhalokati'],
            ['name' => 'Patuakhali'],
            ['name' => 'Pirojpur'],
            ['name' => 'Bandarban'],
            ['name' => 'Brahmanbaria'],
            ['name' => 'Chandpur'],
            ['name' => 'Chattogram'],
            ['name' => 'Cumilla'],
            ['name' => 'Cox\'s Bazar'],
            ['name' => 'Feni'],
            ['name' => 'Khagrachhari'],
            ['name' => 'Lakshmipur'],
            ['name' => 'Noakhali'],
            ['name' => 'Rangamati'],
            ['name' => 'Dhaka'],
            ['name' => 'Faridpur'],
            ['name' => 'Gazipur'],
            ['name' => 'Gopalganj'],
            ['name' => 'Kishoreganj'],
            ['name' => 'Madaripur'],
            ['name' => 'Manikganj'],
            ['name' => 'Munshiganj'],
            ['name' => 'Narayanganj'],
            ['name' => 'Narsingdi'],
            ['name' => 'Rajbari'],
            ['name' => 'Shariatpur'],
            ['name' => 'Tangail'],
            ['name' => 'Bagerhat'],
            ['name' => 'Chuadanga'],
            ['name' => 'Jashore'],
            ['name' => 'Jhenaidah'],
            ['name' => 'Khulna'],
            ['name' => 'Kushtia'],
            ['name' => 'Magura'],
            ['name' => 'Meherpur'],
            ['name' => 'Narail'],
            ['name' => 'Satkhira'],
            ['name' => 'Jamalpur'],
            ['name' => 'Mymensingh'],
            ['name' => 'Netrokona'],
            ['name' => 'Sherpur'],
            ['name' => 'Bogura'],
            ['name' => 'Joypurhat'],
            ['name' => 'Naogaon'],
            ['name' => 'Natore'],
            ['name' => 'Chapai Nawabganj'],
            ['name' => 'Pabna'],
            ['name' => 'Rajshahi'],
            ['name' => 'Sirajganj'],
            ['name' => 'Dinajpur'],
            ['name' => 'Gaibandha'],
            ['name' => 'Kurigram'],
            ['name' => 'Lalmonirhat'],
            ['name' => 'Nilphamari'],
            ['name' => 'Panchagarh'],
            ['name' => 'Rangpur'],
            ['name' => 'Thakurgaon'],
            ['name' => 'Habiganj'],
            ['name' => 'Moulvibazar'],
            ['name' => 'Sunamganj'],
            ['name' => 'Sylhet'],
        ];

        DB::table('zillas')->insert($zillas);
    }
}