<?php


namespace App\Models;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;



use Illuminate\Database\Eloquent\Model;
 
class qqq extends Model
{
    protected $table = 'qqq';
    protected $primaryKey = 'id';
    protected $fillable = ['namep', 'emailp', 'numbp'];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}