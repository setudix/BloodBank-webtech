<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThanaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $zid = DB::table('zillas')->where('name', 'Dhaka')->value('id');

        $thanas = [
            ['name' => 'Abdullahpur', 'zilla_id' => $zid],
            ['name' => 'Agargaon', 'zilla_id' => $zid],
            ['name' => 'Badda', 'zilla_id' => $zid],
            ['name' => 'Banani', 'zilla_id' => $zid],
            ['name' => 'Banasree', 'zilla_id' => $zid],
            ['name' => 'Baridhara', 'zilla_id' => $zid],
            ['name' => 'Bashundhara', 'zilla_id' => $zid],
            ['name' => 'Bawnia', 'zilla_id' => $zid],
            ['name' => 'Beraid', 'zilla_id' => $zid],
            ['name' => 'Cantonment area', 'zilla_id' => $zid],
            ['name' => 'Dakshinkhan', 'zilla_id' => $zid],
            ['name' => 'Dania', 'zilla_id' => $zid],
            ['name' => 'Demra', 'zilla_id' => $zid],
            ['name' => 'Dhanmondi', 'zilla_id' => $zid],
            ['name' => 'Farmgate', 'zilla_id' => $zid],
            ['name' => 'Gabtali', 'zilla_id' => $zid],
            ['name' => 'Gulshan', 'zilla_id' => $zid],
            ['name' => 'Hazaribagh', 'zilla_id' => $zid],
            ['name' => 'Islampur', 'zilla_id' => $zid],
            ['name' => 'Jurain', 'zilla_id' => $zid],
            ['name' => 'Kafrul', 'zilla_id' => $zid],
            ['name' => 'Kamalapur', 'zilla_id' => $zid],
            ['name' => 'Kamrangirchar', 'zilla_id' => $zid],
            ['name' => 'Kazipara', 'zilla_id' => $zid],
            ['name' => 'Khilgaon', 'zilla_id' => $zid],
            ['name' => 'Khilkhet', 'zilla_id' => $zid],
            ['name' => 'Kotwali', 'zilla_id' => $zid],
            ['name' => 'Lalbagh', 'zilla_id' => $zid],
            ['name' => 'Matuail', 'zilla_id' => $zid],
            ['name' => 'Mirpur', 'zilla_id' => $zid],
            ['name' => 'Mohakhali', 'zilla_id' => $zid],
            ['name' => 'Mohammadpur', 'zilla_id' => $zid],
            ['name' => 'Motijheel', 'zilla_id' => $zid],
            ['name' => 'Nimtoli', 'zilla_id' => $zid],
            ['name' => 'Pallabi', 'zilla_id' => $zid],
            ['name' => 'Paltan', 'zilla_id' => $zid],
            ['name' => 'Ramna', 'zilla_id' => $zid],
            ['name' => 'Rampura', 'zilla_id' => $zid],
            ['name' => 'Sabujbagh', 'zilla_id' => $zid],
            ['name' => 'Sadarghat', 'zilla_id' => $zid],
            ['name' => 'Satarkul', 'zilla_id' => $zid],
            ['name' => 'Shahbagh', 'zilla_id' => $zid],
            ['name' => 'Sher-e-Bangla Nagar', 'zilla_id' => $zid],
            ['name' => 'Shyampur', 'zilla_id' => $zid],
            ['name' => 'Sutrapur', 'zilla_id' => $zid],
            ['name' => 'Tejgaon', 'zilla_id' => $zid],
            ['name' => 'Uttara', 'zilla_id' => $zid],
            ['name' => 'Uttarkhan', 'zilla_id' => $zid],
            ['name' => 'Vatara', 'zilla_id' => $zid],
            ['name' => 'Wari', 'zilla_id' => $zid],
        ];

        DB::table('thanas')->insert($thanas);
    }
}