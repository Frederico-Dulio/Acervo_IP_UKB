<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprestimo extends Model
{
    use HasFactory;
    protected $fillable = [
        'data_de_emprestimo',
        'data_de_devolucao',
        'data_de_devolucao_real',
        'status'
    ];

    public function livro()
    {
        return $this->belongsTo(Livro::class);
    }
}
