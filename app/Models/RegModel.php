<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RegModel extends Model
{
    use HasFactory;
    protected $table=('reg_provinces');
    //public function allData()
    //{
        //return DB::table('reg_provinces')->get();
        //->leftJoin('reg_regencies', 'reg_regencies.province_id', '=', 'reg_provinces.id')
        //->leftJoin('reg_districts', 'reg_districts.regency_id', '=', 'reg_provinces.id')
        //->leftJoin('reg_villages', 'reg_villages.name', '=', 'reg_provinces.name')
        //->get();
    //}

    // User::join('profile', 'profiles.user_id', '=', 'users.id')
    //->join('policies', 'policies.user_id', '=', 'users.id')
    //->join('companies', 'policies.company_id', '=', 'companies.id')
    //->where('users.id', '=', $userId)
    //->first(); 
    //protected $table=('reg_provinces');

}
