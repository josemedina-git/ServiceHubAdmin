<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professional_service extends Model
{
    use HasFactory;

    protected $table = 'professional_service';
    protected $primaryKey = 'IdProfessional';

    protected $fillable = ['IdProfessional', 'IdService', 'Email', 'PhoneNumber', 'PriceHour'];
}
