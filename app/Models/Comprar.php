<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comprar extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'purchases';
    protected $fillable = [ 'name', 'imagem','price', 'qtd', 'desc', 'cidade_saida', 'cidade_destino', 'wait', 'created_at', 'updated_at'];
}
