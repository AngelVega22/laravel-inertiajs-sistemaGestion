<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activo extends Model
{
    use HasFactory;
 
    protected $fillable = ['codigo_activo' , 'estado_activo', 'modelo_equipo','serie_activo' ,'tipo_activo' ,'cantidad_activo' ,'specs' ,'direccion_ip','ubicacion_id'];

    protected $table = 'activos';

    public function ubicaciones(){
        return $this->belongsTo(Ubicacion::class,'ubicacion_id');
    }
    protected $primaryKey = 'id_activo';


}
