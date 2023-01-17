<?php 
namespace App\Models;

use CodeIgniter\Model;

class User extends Model{
    protected $table      = 'informacion_consejero';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['grado', 'nombre','apellido_paterno','apellido_materno','cumpleanos','cargo','tipo', 'daua', 'tel_cel_1','tel_cel_1_whats','tel_cel_2','tel_cel_2_whats','tel_casa','tel_oficina','extension','correo_institucional','correo_personal','comision','protesta','consejero_asociado','activo', 'foto'];
    
}