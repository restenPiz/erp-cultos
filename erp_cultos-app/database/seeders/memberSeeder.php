<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Member;
class memberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Member::create([
            'Name'=>'',
            'Password'=>'',
            'Password_confirmation'=>'',
            'Email'=>'',
            'Profession'=>'',
            'Number_of_bi'=>'',
            'Gender'=>'',
            'Contact'=>'',
            'Surname'=>'',
            'Date_of_birth'=>'',
            'Marital_status'=>'',
            'Baptism'=>'',
            'Time_in_church'=>'',
            'Affiliation'=>'',
            'Theological_level'=>'',
        ]);
    }
}
