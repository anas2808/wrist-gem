<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\login;
use Illuminate\Support\Facades\Hash;

class login_controller extends Controller
{
    //
    function index(Request $req)
    {
          $data=login::where('name',$req->user)->get();
          if($data->isNotEmpty())
          {
            session()->put('id',$data[0]->id);
            session()->put('role',$data[0]->role);
                if(Hash::check($req->password,$data[0]->password))
                {
                   if($data[0]->role=='user')
                   {
                       $req->session()->put('user',$data[0]->name);
                       return redirect('/index');
                   }
                   else if($data[0]->role=='admin')
                   {
                       $req->session()->put('admin',$data[0]->name);
                       return redirect('/admin');
                   }    
               }
               else{
                  return redirect()->back()->withErrors(['failure' => 'Invalid username or password']);
               }
          } 
    }
        
    public function insert_data(Request $req)
    {
        if($req->password==$req->cpassword)
        {
            $info=new login;    
            $info->name=$req->user;
            $info->email=$req->userId;
            $info->password=Hash::make($req->password);
            $id=$info->save();
            if($id>0)
            {
                $req->session()->put('user',$req->user);
                return redirect('/index');
            }
        }
        else
        {
            return redirect()->back()->withErrors(['failure' => 'Password and confirm password must be same']);;
        }
    }
}
