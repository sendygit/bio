<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    use HasFactory;
    protected $table = "t_bills";

    protected $guarded = [];
    protected $primaryKey = 'id_bills';
}
