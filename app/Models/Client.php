<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';
    protected $primaryKey = 'IdClient';

    protected $fillable = ['FirstName', 'LastName', 'Email', 'PhoneNumber', 'Password'];
    
 
}