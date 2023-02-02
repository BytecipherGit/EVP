<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyReg extends Model
{
    use HasFactory;
    protected $table='company_regs';
    protected $fillable=['oname','admin','website','email','password','designation','dept','address','country','state','city','pin'];
}
