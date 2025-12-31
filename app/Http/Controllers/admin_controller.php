<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\login;
use App\Models\cart;
use App\Models\orderitem;
use App\Models\order;
use App\Models\adminmodel;
use App\Models\categouries;
use DB;

class admin_controller extends Controller
{


    //product
   
    
   
   public function index()
    { 
     if(session()->get('role')=='admin')
     {
        
            $products=adminmodel::all();
            $orders=order::all();
            $customers=login::where('role','user')->get();
            $categouries=categouries::all();
            return view('admin.index',compact('products','orders','customers','categouries'));
     }
     return redirect()->back();
     }
    public function adminproducts()
    {
         if(session()->get('role')=='admin')
     {
        $products=adminmodel::all();
        $categouries=categouries::all();
        return view('admin.products',compact('products'),compact('categouries'));
         }
     return redirect()->back();
    }
    public function addnewproduct(Request $data)
    {
         if(session()->get('role')=='admin')
     {
        $products=new adminmodel();
        $products->product=$data->input('product');
        $products->price=$data->input('price');
        $products->type=$data->input('type');
        $products->quantity=$data->input('quantity');
        $products->categouries=$data->input('categouries');
        $products->description=$data->input('description');
        $products->picture=$data->file('file')->getClientOriginalName();
        $data->file('file')->move('uploads/products/',$products->picture);
        $products->save();
        return redirect()->back()->with('success','congratulation! new product listed successfully');
         }
     return redirect()->back();
    }
    public function updateproduct(Request $data)
    {
         if(session()->get('role')=='admin')
     {
        $products=adminmodel::find($data->input('id'));
        $products->product=$data->input('product');
        $products->price=$data->input('price');
        $products->type=$data->input('type');
        $products->quantity=$data->input('quantity');
        $products->categouries=$data->input('categouries');
        $products->description=$data->input('description');
        if($data->file('file')!=NULL)
        {
            $products->picture=$data->file('file')->getClientOriginalName();
        $data->file('file')->move('uploads/products/',$products->picture);
        
        }
        $products->save();
        return redirect()->back()->with('success','congratulation! product listed updated successfully');
         }
     return redirect()->back();
    }
    public function deleteproduct($id)
    {
         if(session()->get('role')=='admin')
     {
        $products=adminmodel::find($id);
        $products->delete();

        return redirect()->back()->with('success','congratulation! product listed delete successfully');
         }
     return redirect()->back();
    }

    //customers


    public function customers()
    {
        if(session()->get('role')=='admin')
     {
           $customers=login::where('role','user')->get();
           return view('admin.customers',compact('customers'));
            }
     return redirect()->back();
       
    }
    public function deletecustomer($id)
    {
         if(session()->get('role')=='admin')
     {
        $customers=login::find($id);
        $customers->delete();

        return redirect()->back()->with('success','congratulation! product listed delete successfully');
         }
     return redirect()->back();
    }
    

    //categouries

    public function categouries()
    {   
         if(session()->get('role')=='admin')
     {
        $categouries=categouries::all();
        return view('admin.categouries',compact('categouries'));
         }
     return redirect()->back();
    }
    public function addcategouries(Request $data)
    {   
         if(session()->get('role')=='admin')
     {
        $categouries=new categouries();
        $categouries->categouries=$data->input('categouries');
        $categouries->save();
        return redirect()->back()->with('success','congratulation! new product listed successfully');
         }
     return redirect()->back();
    }
    public function deletecategouries($id)
    {    if(session()->get('role')=='admin')
     {
        $categouries=categouries::find($id);
        $categouries->delete();

        return redirect()->back()->with('success','congratulation! categouries listed delete successfully');
         }
     return redirect()->back();
    }

    public function editcategouries(Request $data,$id)
    {
         if(session()->get('role')=='admin')
     {
        $categouries=categouries::find($id);
        $categouries->categouries=$data->input('categouries');
        $categouries->save();
        return redirect()->back()->with('success','congratulation! product listed updated successfully');
         }
     return redirect()->back();
    }



    //orders
    public function ourorders()
    { 
     if(session()->get('role')=='admin')
     {
        $orderitems=DB::table('orderitems')
        ->join('product','orderitems.productId','product.id')
        ->select('orderitems.*','product.picture','product.product')
        ->get();
        $orders=DB::table('login')
        ->join('orders','orders.userid','login.id')
        ->select('orders.*','login.name','login.email')
        ->get();
        return view('admin.orders',compact('orders','orderitems')); 
     }
     return redirect()->back();
     }
     public function changeorderstatus($status,$id)
    { 
     if(session()->get('role')=='admin')
     {
        $order=order::find($id);
        $order->status=$status;
        $order->save();
        return redirect()->back();
         
     }
     return redirect()->back();
     }


     //profile
     public function profile()
    {
         if(session()->get('role')=='admin')
     {
        $login=login::find(session()->get('id'));
        return view('admin.profile',compact('login'));
         }
     return redirect()->back();
    }
    public function editprofile(Request $req)
    {
        $data=login::find(session()->get('id'));
        $data->picture=$req->file('file')->getClientOriginalName();
        $req->file('file')->move('uploads/products/',$data->picture);
        $data->save();
        return redirect()->back()->with('success','congratulation! picture added successfully');
    }
   

    //admin dashboard
    

   
}

