<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Services extends Model
{
    use HasFactory;

    protected $table = 'services';
    protected $primaryKey = 'IdService';
    public $incrementing = true;
    public $timestamps = true;

    protected $fillable = ['NameService', 'Description', 'created_at', 'updated_at'];
}