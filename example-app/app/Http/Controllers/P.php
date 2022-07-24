<?php

namespace App\Http\Controllers;

use App\Models\qqq;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class     P extends Controller
{
    public function show(){$p=qqq::all();
    
    return view("welcome",['p'=>$p]);}
    public function create(){
    
        return view("create");}

public function store(Request $request)
{
    $input = $request->all();
    
    
    
    
    qqq::create($input);
    return redirect('/')->with('flash_message', 'Contact Addedd!');  
    
     
}
public function edit($id)
    {
        $contact = qqq::find($id);
        return view('edit')->with('contacts', $contact);
    }




    public function update(Request $request, $id)
    {$input = $request->except('_token','_method');
        $contact = qqq::where('id',$id)->update($input);
        
        
        return redirect('/')->with('flash_message', 'Contact Updated!');  
    }public function delete($id)
    {
        qqq::destroy($id);
        
        
        
        return redirect('/');
    }
}