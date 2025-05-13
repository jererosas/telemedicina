<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doc extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'horarios',
        'habilitado',
        'user_id',
        'id_comentarios',
        'id_horarios',
        'rating',
        'inicio',
        'final',
        'especialidad',
        'email',
        'whatsapp',
        'img_perfil',
        'recetas',
        'certificados',
        'precio_consulta'
    ];

 

    // Relación con el usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relación con comentarios (si decides hacerla como tabla separada)
 
}