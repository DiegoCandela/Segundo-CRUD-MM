<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'telefono', 'correo'];

    public function compras(){
        return $this->hasMany(Compra::class, 'id');
    }
}
