<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class infoCustumer extends Model
{
    use HasFactory;
    protected $table = "info_custumers";
    protected $primaryKey = "id";
    
}
