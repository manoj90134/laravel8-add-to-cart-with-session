<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use session;

class productcontroller extends Controller
{

    public function cart(){
        return view('home');
   }

   public function cart_page(){
    return view('cart');
    // print_r(session('cart'));
    
   }


public function add_to_cart(Request $req){

print_r(session()->all());

$cart=session()->get('cart'); // check card sesion is available or not

 if(!$cart){
           $cart=[ 
                $req->id=>[
                   'id'=>$req->id,
                   'name'=>$req->name,
                   'price'=>$req->price,
                   'qty'=>1,

                    ] 
                ];


session()->put('cart',$cart);
return redirect('cart_page');

}

if(isset($cart[$req->id])){
$cart[$req->id]['qty']++;
session()->put('cart',$cart);
return redirect('cart_page');
}


    $cart[$req->id]=[
        'id'=>$req->id,
        'name'=>$req->name,
        'price'=>$req->price,
        'qty'=>1,
    ];

    session()->put('cart',$cart);
    return redirect('cart_page');


}



public function cart_remove($id){

    $cart=session()->get('cart');

if(isset($cart[$id])){

    unset($cart[$id]);
    session()->put('cart',$cart);
    return redirect()->route('cart_page');

    }


}


}
