<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coffeshop extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'photo', 'prix','description','type_plat','menu_type'];
}
