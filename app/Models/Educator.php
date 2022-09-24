<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Educator extends Model
{
    use HasFactory;
    protected $table = 'educators';
    protected $primaryKey = 'id';
    protected $fillable = ['educator', 'myservice', 'location', 'phone', 'mail', 'photo'];
}
