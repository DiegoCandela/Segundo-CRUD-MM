<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class cliente extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['nombre', 'telefono'];

    //protected $guarded = [];

    public function ventas(){
        return $this->hasMany(Venta::class, 'id');
    }
}
