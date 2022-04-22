<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    use HasFactory;
    protected $fillable = ['area' , 'piso', 'oficina' ];

    protected $table = 'ubicaciones';

    public function activos(){
        return $this ->hasMany(Activo::class,'id');
    }

}
