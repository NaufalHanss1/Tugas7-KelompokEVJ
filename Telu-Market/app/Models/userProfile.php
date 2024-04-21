<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userProfile extends Model
{
    use HasFactory;
    protected $table='data';
    protected $fillable=['Username', 'name', 'nim', 'Email', 'profile_image', 'address', 'birthday', 'country', 'phone', 'website'];
    
}
