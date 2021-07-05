<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'travel';
    protected $fillable = [ 'cidade_saida', 'cidade_destino', 'travel_at', 'created_at', 'updated_at'];
}
