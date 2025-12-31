<?php

namespace App\Http\Controllers;
use DB;
use App\Models\login;
use App\Models\cart;
use App\Models\orderitem;
use App\Models\contact;
use App\Models\order;
use App\Models\adminmodel;
use App\Models\categouries;

use Illuminate\Http\Request;

class client extends Controller
{
    //
    public function index()
    {
        $products=adminmodel::all();
        return view('/index',compact('products'));
    }
    public function displayproducts()
    {
        $products=adminmodel::all();
        return view('product',compact('products'));
    }
    public function singleproduct($id)
    {
        $products=adminmodel::find($id);
        return view('singleproduct',compact('products'));
    }




    //cart
     public function addtocart(Request $data)
    {
        if(session()->has('id'))
        {
        $item=new Cart();
        $item->quantity=$data->input('quantity');
        $item->productId=$data->input('id');
        $item->userId=session()->get('id');
        $item->save();
        return redirect()->back()->with('success','congratulation! item added into your cart');
        }
        else
        {
            return redirect('login')->with('error','info! please login to system.');
        }
    }
    public function cart()
    {
        $cartitem=DB::table('product')
        ->join('carts','carts.productId','product.id')
        ->select('product.product','product.quantity as pquantity','product.price','product.picture','carts.*')
        ->where('carts.userId',session()->get('id'))
        ->get();
        return view('cart',compact('cartitem'));
        
    }
    public function deletecartitem($id)
    {
        $item=cart::find($id);
        $item->delete();
        return redirect()->back();        
    }
    public function updatecart(Request $data)
    {
        if(session()->has('id'))
        {
        $item=cart::find($data->input('id'));
        $item->quantity=$data->input('quantity');
        $item->save();
        return redirect()->back();
        }
        else
        {
            return redirect('login');
        }
    }
     public function checkout(Request $data)
    {
        if(session()->has('id'))
        {
            $order=new order();
            $order->status="pending";
            $order->userid=session()->get('id');
            $order->bill=$data->input('bill');
            $order->address=$data->input('address');
            $order->fullname=$data->input('fullname');
            $order->phone=$data->input('phone');
            if($order->save())
            {
                $carts=cart::where('userid',session()->get('id'))->get();
                foreach($carts as $item)
                {
                    
                    $product=adminmodel::find($item->productId);
                    $product->quantity=($product->quantity - $item->quantity);
                    $orderitem=new orderitem();
                    $orderitem->productid=$item->productId;
                    $orderitem->quantity=$item->quantity;
                    $orderitem->price=$product->price;
                    $orderitem->orderid=$order->id;
                    $product->save();
                    $orderitem->save();
                    $item->delete();
                }

            }
            return redirect()->back()->with('success','your order is placed successfully');
        }
        else
        {
            return redirect('login');
        }
    }

    public function ordershistory()
    { 
        $orders=order::where('userid',session()->get('id'))->get();
        $orderitems=DB::table('orderitems')
        ->join('product','orderitems.productId','product.id')
        ->select('orderitems.*','product.picture','product.product')
        ->get();
        
        return view('orderhistory',compact('orders','orderitems')); 
    
     }
     
     public function contact(Request $data)
     {
        $contact=new contact();
        $contact->name=$data->input('yourname');
        $contact->phone=$data->input('phone');
        $contact->message=$data->input('message');
        $contact->email=$data->input('email');
        $contact->save();
        return view('contact');
     }
}
