<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'ano_publicacao',
        'isbn',
        'quantidade_total',
        'quantidade_disponivel'
    ];

    public function emprestimo()
    {
        return $this->hasMany(Emprestimo::class);
    }

    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }

    public function autor()
    {
        return $this->belongsTo(Autor::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function foto()
    {
        return $this->hasMany(Foto::class);
    }
}
