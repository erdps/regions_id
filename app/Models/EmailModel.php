<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class EmailModel extends Model
{
    use HasFactory;

    public $table = 'subscriptions';

    public $timestamps = true;

    //protected $dates = [
    //    'created_at',
    //    'updated_at',
    //];
    
    protected $fillable = [
        'id',
        'email',
        'ip',
        'created_at',
        'updated_at',
    ];
    
        //protected $table = 'pegawai';
        //protected $primaryKey = 'pegawai_id';
        //public $incrementing = false;
        //protected $keyType = 'string';
        //public $timestamps = false;
    
}
