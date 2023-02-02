<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forgot extends Model
{
    use HasFactory;
    protected $table='forgot_password';
    protected $fillable=['email'];
}
