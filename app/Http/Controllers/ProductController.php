<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Item;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    function index()
    {
        $data= product::all();
        return view('product',['products'=>$data]);
    }
    function detail($id)
    {
        $data = product::find($id);
        return view('detail',['product'=>$data]);

   }
   function search(Request $req)
   {

$data= Product::
where('name', 'like', '%', $req->input('query'),'%')
->get();
return view('search',['products'=>$data]);
   }

  function addToCart(Request $req)
   {
       if($req->session()->has('user'))
       {
        $items= new Items;
        $items->user_id = $req->session()->get('user')['id'];
        $items->product_id = $req->product_id;
        $items->save();
        return redirect('/');
       }
       else
       {
          return redirect('/login'); 
       } 

   }

   
   static function cartItem()
   {
       $userId=Session::get('user')['id'];
       return Item::where('user_id',$userId)->count();

   }
   function orderNow()
   {
$userId=Session::get('user')['id'];
$total= $products= DB::table('items');
join('products','items.product_id','=','products.id')
->where('items.user_id',$userId)
->sum('products.price');
return view('ordernow',['total'=>$total]);

   }
   public function productList()
   {
       $products = Product::all();

       return view('product', compact('products'));
   }

  
}
