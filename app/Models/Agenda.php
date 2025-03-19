<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $table = 'agenda';
    protected $primaryKey = 'IdAgenda';

    protected $fillable = ['IdClient', 'IdService', 'DateAgenda', 'AgendaStatus'];

    public function client()
    {
        return $this->belongsTo(Client::class, 'IdClient', 'IdClient');
    }

    public function services()
    {
        return $this->belongsTo(Services::class, 'IdService', 'IdService');
    }
}
