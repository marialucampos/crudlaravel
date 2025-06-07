<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UsuarioSeeder extends Seeder
{
    public function run(): void
    {
         $dados=['name'=>"Maria Luiza", 'email'=>"mlo.campos@unesp.br",'password'=>bcrypt("123")];
         User::create($dados); 
    }
}
