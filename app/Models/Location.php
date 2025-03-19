<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $table = 'locations';
    protected $primaryKey = 'IdLocation';

    protected $fillable = ['IdClient', 'Address', 'City', 'State', 'postal_code', 'Country',];

    public function client()
    {
        return $this->belongsTo(Client::class, 'IdClient', 'IdClient');
    }
}
