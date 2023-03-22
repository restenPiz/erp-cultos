<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Member;
use Illuminate\Support\Facades\DB;
class memberSeeder extends Seeder
{
    public function run()
    {
        $dados = [];

        for ($i = 0; $i < 1000; $i++) {
            $dados[] = [
                'Name'=>'Mauro',
                'Password'=>'mauro123',
                'Password_confirmation'=>'mauro123',
                'Email'=>'mauropeniel@gmail.com',
                'Profession'=>'Software Engineer',
                'Number_of_bi'=>'0092983729398AB',
                'Gender'=>'Masculino',
                'Contact'=>'867336817',
                'Surname'=>'Peniel',
                'Date_of_birth'=>'11/09/2002',
                'Marital_status'=>'Solteiro',
                'Baptism'=>'Nao baptizado',
                'Time_in_church'=>'2 anos',
                'Affiliation'=>'Peniel e Assuncao',
                'Theological_level'=>'Caminho de Deus',            
            ];
        }

        DB::table('departments')->insert($dados);
    }
}
