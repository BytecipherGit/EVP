<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocVerification extends Model
{
    use HasFactory;
    protected $table='doc_verifications';
    protected $fillable=['rid','doc','doctype'];
}
