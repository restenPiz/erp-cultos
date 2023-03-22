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
        Member::create(
            [
                'Name' => 'Mauro',
                'Password' => 'mauro123',
                'Password_confirmation' => 'mauro123',
                'Email' => 'mauropeniel@gmail.com',
                'Profission' => 'Software Engineer',
                'Number_of_bi' => '0092983729398AB',
                'Gender' => 'Masculino',
                'Contact' => '867336817',
                'Surname' => 'Peniel',
                'Date_of_birth' => '11/09/2002',
                'Marital_status' => 'Solteiro',
                'Baptism' => 'Nao baptizado',
                'Time_in_church' => '2 anos',
                'Affiliation' => 'Peniel e Assuncao',
                'Theological_level' => 'Caminho de Deus',
            ],
            [
                'Name'=>'Arnaldo',
                'Password'=>'arnaldo123',
                'Password_confirmation'=>'arnaldo123',
                'Email'=>'arnaldo@gmail.com',
                'Profession'=>'Software Engineer',
                'Number_of_bi'=>'0092983729398AB',
                'Gender'=>'Masculino',
                'Contact'=>'867336812',
                'Surname'=>'Tomo',
                'Date_of_birth'=>'11/09/2002',
                'Marital_status'=>'Solteiro',
                'Baptism'=>'Nao baptizado',
                'Time_in_church'=>'2 anos',
                'Affiliation'=>'Tomo e Maria',
                'Theological_level'=>'Caminho de Deus',
            ],
            [
                'Name'=>'Foo',
                'Password'=>'foo123',
                'Password_confirmation'=>'foo123',
                'Email'=>'foo@gmail.com',
                'Profession'=>'Software Engineer',
                'Number_of_bi'=>'0092983729398AB',
                'Gender'=>'Masculino',
                'Contact'=>'855686307',
                'Surname'=>'Lam',
                'Date_of_birth'=>'11/09/2002',
                'Marital_status'=>'Solteiro',
                'Baptism'=>'baptizado',
                'Time_in_church'=>'2 anos',
                'Affiliation'=>'Lam e Tag',
                'Theological_level'=>'Caminho de Deus',
            ]
        );
    }
}