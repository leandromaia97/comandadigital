<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $fillable = ['codigo_produto','nome','descricao','preco','quantidade','data_entrega'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'produtos';
}
