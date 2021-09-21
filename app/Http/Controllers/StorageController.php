<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StorageController extends Controller
{
    public function download_local(Request $req){
        if(Storage::disk('local')->exists("portofolio/$req->file")){
    $path= Storage::disk('local')->path("portofolio/$req->file");
    $content=file_get_contents($path);
    return response($content)->withHeaders([
        'Content-Type' => mime_content_type($path)
    ]);

        }
        return redirect('/404');
    }

    public function download_public(Request $req){
        if(Storage::disk('public')->exists("portofolio/$req->file")){
    $path= Storage::disk('public')->path("portofolio/$req->file");
    $content=file_get_contents($path);
    return response($content)->withHeaders([
        'Content-Type' => mime_content_type($path)
    ]);

        }
        return redirect('/404');
    }
}
