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

}