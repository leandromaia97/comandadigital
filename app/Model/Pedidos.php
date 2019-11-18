<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    protected $fillable = ['numero_mesa','','nome_cliente','comidas','bebidas','observacoes','status'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'pedidos';
}
