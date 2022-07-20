<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprestimo extends Model
{
    use HasFactory;

    protected $table = 'emprestimo';

    public $timestamps = false;

    public function parcelas()
    {
        return $this->hasMany(Parcela::class);
    }
}
