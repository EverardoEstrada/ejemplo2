<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Pedidos;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // dd(Auth::user());

        if(Auth::user()->tipo=='admin')
          return view('dashboard');
        else
            return view("chalan");
    }

    public function saluda()
    {
        return view('principal.principal');
    }

    public function pedidos()
    {
        $palabra=request("busqueda");

        if(!is_null($palabra) && $palabra!="")
        {
            $orders=Pedidos::where('descripcion', 'Like','%'.$palabra.'%')->get();
        }
        else
        {
            $orders=Pedidos::all();
        }
        return view('pedidos')->with('orders',$orders);
    }

    public function guardapedido()
    {
        $p1= new Pedidos();
        $p1->descripcion=request("Descripcion");
        $p1->unidades=request("Unidades");
        $p1->subtotal=request("Subtotal");
        $p1->save();
        return redirect('/pedidos');
    }

    public function borra($id)
    {
        $p1=Pedidos::find($id);
        $p1->delete();
        return redirect('/pedidos');
    }
    
}
