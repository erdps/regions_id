<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\EmailModel;

class EmailController extends Controller
{
    //
    public function show(){

        return view('tugasdua.subscribe');
    }
    public function index(){

        $subscribe = DB::table('subscriptions')->get();

        return view('tugasdua.index', compact(1));
    }

    public function create(){
        return view('tugasdua.create');
    }

    public function store(Request $request){
    $validator = Validator::make($request->all(),[        
        'email'=>'required|email|unique:subscriptions',
    ]);

    if(!$validator->passes()){
        return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
    }else{
        $values = [
             'email'=>$request->email,
             'ip'   =>$request->ip(),
        ];

        $query = DB::table('subscriptions')->insert($values);
        if( $query ){
            return response()->json(['status'=> true, 'msg'=>'New Student has been successfully registered']);
                        
        }                       
    }
}
    //public function getData(Request $req) //p
    //{
    //   $req->validate([
    //       'email'=>'required'
    //    ]);
    //    return $req->input();
    //}

    //public function store(Request $request){ //p
    //
    //  $data = array();
    //    $data['email'] = $request->email;
    //    $data['ip'] = $request->ip();
    
    //$subs = DB::table('subscriptions')->insert($data);
    //    return redirect()->route('index')
    //                     ->with('Subscribed', 'Terima Kasih');

    //               $request->validate([
    //                    'email'=>'required']);
    //                     return $req->input();
    //                    }

    
}
