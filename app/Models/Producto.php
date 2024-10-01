<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','descripcion', 'stock', 'precio', 'estado'];

    //protected $guarded = [];

    public function ventas(){
        return $this->hasMany(Venta::class, 'id');
    }

    public function compras(){
        return $this->hasMany(Compra::class, 'id');
    }
}
