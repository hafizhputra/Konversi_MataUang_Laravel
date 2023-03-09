<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Convert extends Model
{
    // use HasFactory;
    protected $table = 'convert';
    protected $primaryKey = 'id';
    protected $fillable = ['amount', 'currency_from', 'currency_to', 'converted_amount', 'status'];
    
}
