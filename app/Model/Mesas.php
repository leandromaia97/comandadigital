<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Mesas extends Model
{
    protected $fillable = ['codigo_mesa','capacidade','status','mesas_mescladas'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'mesas';
}
