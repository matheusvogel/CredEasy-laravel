<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model implements Authenticatable
{
    use HasFactory;

    protected $table = 'cliente';
    protected $primarykey = 'id';
    protected $with = ['emprestimos'];
    protected $keyType = 'string';

    public $timestamps = false;

        public function getAuthIdentifierName()
    {
        return 'email';
    }

    public function emprestimos()
    {
                                             // foreignKey, localKey
        return $this->hasMany(Emprestimo::class, 'cpf_cliente','cpf');
    }

    public function getAuthIdentifier()
    {
        return $this->attributes['email'];
    }

    public function getAuthPassword()
    {
        return $this->attributes['senha'];
    }

    public function setRememberToken($value)
    {

    }

    public function getRememberToken()
    {
        return '';
    }

    public function getRememberTokenName()
    {
        return '';
    }
}
