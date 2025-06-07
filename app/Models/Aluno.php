<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{

    protected $fillable = ['nome', 'celular', 'imagem', 'id_curso'];

    // Relacionamento com o Curso
    public function curso()
{
    return $this->belongsTo(\App\Models\Curso::class, 'id_curso');
}
}
