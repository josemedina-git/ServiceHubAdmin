<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesional extends Model
{
    use HasFactory;

    protected $table = 'professionals';
    protected $primaryKey = 'IdProfessional';

    protected $fillable = ['FirstName', 'LastName', 'CURP', 'RFC', 'Experience','Availability','Email','Password'];
    
    // NO vamos a usar encriptación automática aquí para asegurarnos que funcione con tu código existente
    // La encriptación la manejamos manualmente en el controlador con Hash::make()
}