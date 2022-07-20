<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\http\Request;
use Illuminate\Support\Facades\DB;
class     P extends Controller
{
    public function show(){$p=DB::select('select * from qqq');
    
    return view("welcome",['p'=>$p]);}
}
