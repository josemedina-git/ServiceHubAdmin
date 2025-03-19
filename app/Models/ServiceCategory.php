<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    use HasFactory;

    protected $table = 'service_category';

    protected $primaryKey = ['IdService', 'IdCategory'];
    public $incrementing = false; // Indica que la llave primaria NO es autoincremental
    public $timestamps = false; // Si no usas timestamps

    protected $fillable = [
        'IdService',
        'IdCategory'
    ];
}