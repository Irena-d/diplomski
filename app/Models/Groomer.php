<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groomer extends Model
{
    use HasFactory;

    protected $table = 'groomers';
    protected $primaryKey = 'id';
    protected $fillable = ['groomer', 'salon', 'location', 'phone', 'mail', 'photo'];
}
