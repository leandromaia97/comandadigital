<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cozinha extends Model
{
    protected $fillable = ['codigo_cozinha','descricao'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'cozinha';
}
