<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\RegModel;
use App\Models\CityModel;
use App\Models\DistModel;
use App\Models\SubdModel;

class RegController extends Controller
{
    //
    function show()
    {
        //return DB::table(DB::raw('reg_provinces, reg_regencies, reg_districts, reg_villages'))
        //->select(DB::raw('province_name', 'regency_name', 'district_name', 'village_name'))
        
        return DB::table('reg_provinces')
        ->join('reg_regencies', 'reg_provinces.id',"=", 'reg_regencies.province_id')
        ->join('reg_districts', 'reg_regencies.id',"=", 'reg_districts.regency_id')
        ->join('reg_villages', 'reg_districts.id',"=", 'reg_villages.district_id')
        //->select('reg_provinces.*')
        ->get();
    }
    function list()
    {
        $province= RegModel::all();
        $regency = CityModel::all();
        $district= DistModel::all();
        $village = SubdModel::all();
        return view('tugasatu',["province"=>$province, "district"=>$district, "regency"=>$regency, "village"=>$village]);

        //return view('tugasatu',["province"=>$province]);
    }
    
    //public function __construct()
    //{
    //    $this->RegModel = new RegModel();

    //}
    //public function index()
    //{
    //    $data = [
    //        'province' => $this->RegModel->allData(),
    //    ];
    //    return view('tugasatu', $data);
    //}
    
    
    
    
    //function list()
    
        //$province = Reg_Province::all();
        //$district = Reg_Province::all();
        //$regency  = Reg_Province::all();
        //$village  = Reg_Province::all();
        //return view('tugasatu',['province'=>$province, 'district'=>$district, 'regency'=>$regency, 'village'=>$village]);

    
    
}
