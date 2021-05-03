<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pedidos;

class HomeController extends Controller
{
    public function saluda()
    {
        $pedidos=Pedidos::all(); 
        $pedidos2=Pedidos::where('subtotal','>',500)->get();
        $pedidos3=Pedidos::onlyTrashed()->get();
        // dd($pedidos3);

        return view('pedidos')->with('orders',$pedidos)->with('pedidos2',$pedidos2)->with('pedidos3',$pedidos3);
    }

    public function guardapedido(Request $request)
    {
        $pedido= new Pedidos();
        $pedido->descripcion=request("Descripcion");
        $pedido->unidades=request("Unidades");
        $pedido->subtotal=request("Subtotal");

        $path = $request->file('archivo')->store('public/imagenes');
        $pedido->imagen=$path;
        // dd($path);

        $pedido->save();

        return redirect("/");
    }

    public function muestraactualizacion($id)
    {
        $pedido= Pedidos::find($id);
        return view('actualizapedido')->with('pedido',$pedido);
    }

    public function guardaactualizacion($id)
    {
        $pedido= Pedidos::find($id);
        $pedido->descripcion=request("Descripcion");
        $pedido->unidades=request("Unidades");
        $pedido->subtotal=request("Subtotal");
        $pedido->save();
        return redirect("/");
    }

    public function borra($id)
    {
        $pedido= Pedidos::find($id);
        $pedido->delete();
        return redirect("/");
    }
}
