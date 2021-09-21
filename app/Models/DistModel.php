<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DistModel extends Model
{
    use HasFactory;
    protected $table=('reg_districts');
}
