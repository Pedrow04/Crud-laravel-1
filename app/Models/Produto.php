<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    //especificar com quais campos de tabela nós vamos trabalhar 
    protected $fillable = ['nome','valor','estoque'];
}
