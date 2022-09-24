<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WalkersAndKeepers extends Model
{
    use HasFactory;
    protected $table = 'walkersNkeepers';
    protected $primaryKey = 'id';
    protected $fillable = ['walkerNkeeper', 'myservice', 'location', 'phone', 'mail', 'photo'];
}
